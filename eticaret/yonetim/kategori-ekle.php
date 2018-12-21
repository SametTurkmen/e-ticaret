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
                <li><span>Kategori Ekle</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>

                    <h2 class="panel-title">Kategori Ekle</h2>
                </header>
                <div class="panel-body">
                    <div id="kategoriEkleAlert"></div>
                    <form id="kategoriEkleForm" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Modeli</label>
                            <div class="col-md-6">
                                <select class="form-control" name="kategori_ust">
                                    <option value="00">Ana Kategori</option>
                                    <?php
                                    $veri = $db->prepare("SELECT * FROM kategoriler WHERE kategori_durum='1' ");
                                    $veri->execute(array());
                                    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($v as $kat) {
                                        ?>
                                        <option value="<?php echo $kat['kategori_id']; ?>"><?php echo $kat['kategori_title'] ?> </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Başlık</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori_title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Açıklama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori_desc">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Anahtar Kelimeler</label>
                            <div class="col-md-6">
                                <input id="tags-input" data-role="tagsinput" data-tag-class="label label-primary"
                                       type="text" class="form-control" name="kategori_keyw">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Durum</label>
                            <div class="col-md-6">
                                <select name="kategori_durum">
                                    <option value="1">Aktif</option>
                                    <option value="00">Pasif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div id="kategoriEkleBtn" class="btn btn-primary btn-lg pull-right">Ekle</div>
                        </div>

                    </form>
                </div>
            </section>

        </div>
    </div>

    <!-- end: page -->
<?php
include 'inc/footer.php';
?>