<?php
require_once 'ayarlar/baglanti.php';
require_once 'ayarlar/function.php';
require_once 'inc/header.php';
?>

    <!-- start: page -->
    <header class="page-header">
        <h2>Ürünler</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Ürünler</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="urun-ekle.php">
                            <span class="fa fa-plus"></span>&nbsp; &nbsp; Yeni Ekle
                        </a>
                    </div>

                    <h2 class="panel-title">Tüm Ürünler</h2>
                </header>
                <div class="panel-body">
                    <? include 'inc/alert.php'; ?>
                    <table class="table table-bordered table-striped mb-none">
                        <thead>
                        <tr>
                            <th>Ürün Resmi</th>
                            <th>Ürün Kategorisi</th>
                            <th>Ürün Adı</th>
                            <th>Fiyatı</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?
                            $veri= $db ->prepare("SELECT * FROM urunler INNER JOIN kategoriler ON kategoriler.kategori_id=urunler.urun_kategori ORDER BY urun_sira ASC ");
                            $veri -> execute(array());
                            $v= $veri->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($v as $urunler) {

                            ?>

                        <tr>
                            <td><img style="height: 100px" src="../<? echo $urunler['urun_resim']; ?>" alt=""></td>
                            <td><? echo $urunler['kategori_title']; ?></td>
                            <td><? echo $urunler['urun_title']; ?></td>
                            <td><? echo parayaz($urunler['urun_fiyat']); ?></td>
                            <td>
                                <!-- Sil Butonu -->
                                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger" href="#modalFullColorPrimary<? echo $urunler['urun_id']; ?>"><i class="fa fa-trash"></i>&nbsp; Sil</a>

                                <div id="modalFullColorPrimary<? echo $urunler['urun_id']; ?>"
                                     class="modal-block modal-full-color modal-block-primary mfp-hide">
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
                                                    <p><? echo $urunler['urun_title']; ?> adlı ürünü silmek istediğinizden emin misiniz?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <div class="row">
                                                <div class="col-md-12 text-right">
                                                    <a href="ayarlar/islem.php?urunSil=ok&urun_id=<? echo $urunler['urun_id']; ?>"
                                                       class="btn btn-primary">Sil</a>
                                                    <button class="btn btn-default modal-dismiss">Vazgeç</button>
                                                </div>
                                            </div>
                                        </footer>
                                    </section>
                                </div>
                                <!-- Sil Butonu -->

                                <!-- Güncelle Butonu -->
                                <a class="mb-xs mt-xs mr-xs btn btn-warning" href="urun-guncelle.php?urun_id=<? echo $urunler['urun_id']; ?>"><i class="fa fa-edit"></i>&nbsp; Düzenle</a>
                                <!-- Güncelle Butonu -->

                                <!-- Galeri Butonu -->
                              <!--  <a class="mb-xs mt-xs mr-xs btn btn-success" href="urun-galeri.php?urun_id=<? echo $urunler['urun_id']; ?>">Galeri</a> -->
                                <!-- Galeri Butonu -->

                            </td>

                        </tr>
                                <? } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
<?php include 'inc/footer.php'; ?>