<?php
include 'ayarlar/baglanti.php';
include 'ayarlar/function.php';
include 'inc/header.php';
?>

    <!-- start: page -->
    <header class="page-header">
        <h2>Üyeler</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Üyeler</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">


                    <h2 class="panel-title">Tüm Üyeler</h2>
                </header>
                <div class="panel-body">
                    <? include 'inc/alert.php'; ?>
                    <table class="table table-bordered table-striped mb-none">
                        <thead>
                        <tr>
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>Telefon</th>
                            <th>İl</th>
                            <th>İlçe</th>
                            <th>Adres</th>
                            <th>Mail</th>
                            <th>Cinsiyet</th>
                            <th>Kullanıcı Adı</th>
                            <th class="hidden-xs">İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $veri= $db ->prepare("SELECT * FROM kisiler");
                        $veri ->execute(array());
                        $v =$veri->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($v as $kisiler){
                        ?>

                                    <tr>
                                        <td><? echo $kisiler['kisi_ad'];?></td>
                                        <td><? echo $kisiler['kisi_soyad'];?></td>
                                        <td><? echo $kisiler['kisi_tel'];?></td>
                                        <td><? echo $kisiler['kisi_il'];?></td>
                                        <td><? echo $kisiler['kisi_ilce'];?></td>
                                        <td><? echo $kisiler['kisi_adres'];?></td>
                                        <td><? echo $kisiler['kisi_mail'];?></td>
                                        <td><? echo $kisiler['kisi_cinsiyet'];?></td>
                                        <td><? echo $kisiler['kisi_kadi'];?></td>

                                        <td>
                                            <!-- Sil Butonu -->
                                            <a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger" href="#modalFullColorPrimary<? echo $kisiler['kisi_id']; ?>"><i class="fa fa-trash"></i> &nbsp;Sil</a>

                                            <div id="modalFullColorPrimary<? echo $kisiler['kisi_id']; ?>" class="modal-block modal-full-color modal-block-primary mfp-hide">
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
                                                                <p><? echo $kisiler['kisi_kadi']; ?> adlı üyeyi silmek istediğinizden emin misiniz?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <footer class="panel-footer">
                                                        <div class="row">
                                                            <div class="col-md-12 text-right">
                                                                <a href="ayarlar/islem.php?kisiSil=ok&kisi_id=<? echo $kisiler['kisi_id']; ?>" class="btn btn-primary">Sil</a>
                                                                <button class="btn btn-default modal-dismiss">Vazgeç</button>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                </section>
                                            </div>
                                            <!-- Sil Butonu -->
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