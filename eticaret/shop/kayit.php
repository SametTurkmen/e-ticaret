<?
require_once '../inc/header.php';
require_once 'main.php';
?>


    <div id="mobile-menu-overlay"></div>

    <div role="main" class="main">

        <section class="form-section register-form">
            <div class="container">
                <h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Hesap Oluştur</h1>

                <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                    <div class="box-content">
                        <div id="kisiEkleAlert"></div>
                        <form id="kisiEkleForm">
                            <h4 class="heading-primary text-uppercase mb-lg ">KİŞİSEL BİLGİ</h4>
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Ad <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="ad">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Soyad <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="soyad">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Telefon <span
                                                    class="required">*</span></label>
                                        <input type="tel" class="form-control" name="telefon">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">İl <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="il">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">İlçe <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="ilce">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Adres <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="adres">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">E-mail Adresi <span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Cinsiyet <span
                                                    class="required">*</span></label>
                                        <input type="text" class="form-control" name="cinsiyet">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="heading-primary text-uppercase mb-lg">GİRİŞ BİLGİLERİ</h4>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Kullanıcı Adı <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="k_ad">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Şifre <span class="required">*</span></label>
                                        <input type="password" class="form-control" id="password" name="sifre">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="font-weight-normal">Şifreyi Onayla <span class="required">*</span></label>
                                        <input type="password" class="form-control" id="passwordconfirm"
                                               name="sifre_onay">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="required mt-lg mb-none">* Zorunlu Alanlar</p>

                                    <div class="form-action clearfix mt-none">
                                        <a href="login.php" class="pull-left"><i class="fa fa-angle-double-left"></i>
                                            Geri</a>

                                        <div id="kisiEkleBtn" class="btn btn-primary">Gönder</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

<? require_once '../inc/footer.php'; ?>