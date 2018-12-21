<?php
include 'ayarlar/baglanti.php';
include 'ayarlar/function.php';
include 'inc/header.php';
?>

    <!-- start: page -->
    <header class="page-header">
        <h2>Kategoriler</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Kategoriler</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="kategori-ekle.php">
                            <span class="fa fa-plus"></span>&nbsp; &nbsp; Yeni Ekle
                        </a>
                    </div>

                    <h2 class="panel-title">Tüm Kategoriler</h2>
                </header>
                <div class="panel-body">
                    <? include 'inc/alert.php'; ?>
                    <table class="table table-bordered table-striped mb-none">
                        <thead>
                        <tr>
                            <th>Kategori Adı</th>
                            <th>Kategori Açıklaması</th>
                            <th>Durum</th>
                            <th class="hidden-xs">İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        function kategori($k_id = 0, $st = 0)
                        {
                            global $db;
                            $veri = $db->prepare("SELECT * FROM kategoriler WHERE kategori_ust='$k_id' ");
                            $veri->execute(array());
                            $v = $veri->fetchAll(PDO::FETCH_ASSOC);
                            $say = $veri->rowCount();
                            if ($say) {
                                foreach ($v as $tumkategoriler) {
                                    ?>
                                    <tr>
                                        <td><? echo str_repeat("<span class='fa fa-arrow-right'></span>", $st) . $tumkategoriler['kategori_title']; ?></td>
                                        <td><? echo $tumkategoriler['kategori_desc']; ?></td>

                                        <td>
                                            <? echo $tumkategoriler['kategori_durum'] == 1 ? "<div class='label label-success h6 col-md-offset-3 center-blok'>Aktif</div>" : "<div class='label label-danger h6 col-md-offset-3 center-blok'>Pasif</div>" ?>

                                        </td>
                                        <td>
                                            <!-- Sil Butonu -->
                                            <a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger" href="#modalFullColorPrimary<? echo $tumkategoriler['kategori_id']; ?>">Sil</a>

                                            <div id="modalFullColorPrimary<? echo $tumkategoriler['kategori_id']; ?>" class="modal-block modal-full-color modal-block-primary mfp-hide">
                                                <section class="panel">
                                                    <header class="panel-heading">
                                                        <h2 class="panel-title">Emin Misiniz?</h2>
                                                    </header>
                                                    <div class="panel-body">
                                                        <div class="modal-wrapper">
                                                            <div class="modal-icon">
                                                                <i class="fa fa-question-circle"></i>
                                                            </div>
                                                            <div class="modal-text">
                                                                <h4>Sil</h4>
                                                                <p><? echo $tumkategoriler['kategori_title']; ?> adlı kategoriyi silmek istediğinizden emin misiniz?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <footer class="panel-footer">
                                                        <div class="row">
                                                            <div class="col-md-12 text-right">
                                                                <a href="ayarlar/islem.php?kategoriSil=ok&kategori_id=<? echo $tumkategoriler['kategori_id']; ?>" class="btn btn-primary">Sil</a>
                                                                <button class="btn btn-default modal-dismiss">Vazgeç</button>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                </section>
                                            </div>
                                            <!-- Sil Butonu -->
                                            <!-- Güncelle Butonu -->
                                            <a class="mb-xs mt-xs mr-xs btn btn-warning" href="kategori-guncelle.php?kategori_id=<? echo $tumkategoriler['kategori_id']; ?>">Düzenle</a>
                                            <!-- Güncelle Butonu -->
                                        </td>

                                    </tr>
                                    <? kategori($tumkategoriler['kategori_id'], $st + 1); ?>
                                    <?php
                                }
                            }
                        }

                        ?>
                        <?php kategori(); ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
<?php include 'inc/footer.php'; ?>