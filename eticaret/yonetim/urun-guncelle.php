<?php
include 'ayarlar/baglanti.php';
include 'ayarlar/function.php';

$urun_id= g('urun_id');
foreach (urungetir($urun_id) as $urun);

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
                <li><span>Ürün Güncelle</span></li>
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

                    <h2 class="panel-title">Ürün Güncelle</h2>
                </header>
                <div class="panel-body">
                    <div id="urunGuncelleAlert"></div>
                    <form id="urunGuncelleForm" class="form-horizontal form-bordered" enctype="multipart/form-data" method="post">

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Ürün Resmi</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="urun_resim">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Ürün Kategorisi</label>
                            <div class="col-md-6">
                                <select class="form-control" name="urun_kategori">
                                    <?php
                                    $veri=$db->prepare("SELECT * FROM kategoriler WHERE kategori_durum='1' ");
                                    $veri->execute(array());
                                    $v=$veri->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($v as $kat){
                                        ?>
                                        <option <? echo $kat['kategori_id'] == $urun['urun_kategori'] ? 'selected' : ''; ?>
                                                value="<?php echo $kat['kategori_id']; ?>"><?php echo $kat['kategori_title']?> </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Başlık</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="urun_title" value="<? echo $urun['urun_title']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Ürün Açıklama</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="urun_desc" rows="5"><? echo $urun['urun_desc']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Ürün Meta Başlık</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="urun_meta_title" value="<? echo $urun['urun_meta_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"  for="inputDefault">Ürün Meta Açıklama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="urun_meta_desc" value="<? echo $urun['urun_meta_desc']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Anahtar Meta Kelimeler</label>
                            <div class="col-md-6">
                                <input id="tags-input" data-role="tagsinput" data-tag-class="label label-primary" type="text" class="form-control" name="urun_meta_keyw" value="<? echo $urun['urun_meta_keyw']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Ürün Fiyatı</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="urun_fiyat" onkeyup="javascript:this.value=ParaFormat(this.value); " value="<? echo parayaz2($urun['urun_fiyat']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Ürün Sırası</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="urun_sira"  value="<? echo $urun['urun_sira']; ?>">
                            </div>
                        </div>
                        <input type="hidden" name="urun_id" value="<? echo $urun_id; ?>">
                        <div class="col-md-6 col-md-offset-3">
                            <div id="urunGuncelleBtn" class="btn btn-primary btn-lg pull-right">Güncelle</div>
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