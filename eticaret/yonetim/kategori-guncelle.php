<?php
include 'ayarlar/baglanti.php';
include 'ayarlar/function.php';

$kategori_id = g('kategori_id');
$veri = $db-> prepare("SELECT * FROM kategoriler WHERE  kategori_id='$kategori_id'");
$veri -> execute(array());
$v =$veri -> fetchAll(PDO::FETCH_ASSOC);
foreach ($v as $kategori);
$k_ust= $kategori['kategori_ust'];

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
                <li><span>Kategori Düzenle</span></li>
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

                    <h2 class="panel-title">Kategori Düzenle</h2>
                </header>
                <div class="panel-body">
                    <div id="kategoriGuncelleAlert"></div>
                    <form id="kategoriGuncelleForm" class="form-horizontal form-bordered" >
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Modeli</label>
                            <div class="col-md-6">
                                <select class="form-control" name="kategori_ust">
                                    <option value="00">Ana Kategori</option>
                                    <?php
                                    $veri=$db->prepare("SELECT * FROM kategoriler WHERE kategori_durum='1' ");
                                    $veri->execute(array());
                                    $v=$veri->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($v as $kat){
                                        $kate_id=$kat['kategori_id'];
                                        ?>
                                        <option <? echo $kate_id == $k_ust ? 'selected' : ''; ?>
                                                value="<?php echo $kat['kategori_id']; ?>"><?php echo $kat['kategori_title']?> </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Başlık</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori_title" value="<? echo $kategori['kategori_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Açıklama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori_desc" value="<? echo $kategori['kategori_desc']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Anahtar Kelimeler</label>
                            <div class="col-md-6">
                                <input id="tags-input" data-role="tagsinput" data-tag-class="label label-primary" type="text" class="form-control" name="kategori_keyw" value="<? echo $kategori['kategori_keyw']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Kategori Durum</label>
                            <div class="col-md-6">
                                <select name="kategori_durum">
                                    <option <? echo $kategori['kategori_durum'] == '0' ? 'selected' : ''; ?> value="00">Pasif</option>
                                    <option <? echo $kategori['kategori_durum'] == '1' ? 'selected' : ''; ?> value="1">Aktif</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" value="<? echo $kategori_id; ?>" name="kategori_id">

                        <div class="col-md-6 col-md-offset-3">
                            <div id="kategoriGuncelleBtn" class="btn btn-primary btn-lg pull-right">Güncelle</div>
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