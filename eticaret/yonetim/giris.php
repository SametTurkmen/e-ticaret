<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Yönetivi Girişi</title>
    <meta name="keywords" content="HTML5 Admin Template"/>
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css"/>

    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="assets/images/logo.png" height="54" alt="Porto Admin"/>
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Yönetici Girişi</h2>
            </div>
            <div class="panel-body">
                <div id="yGirisAlert"> </div>
                <form id="yGirisForm" method="post">
                    <div class="form-group mb-lg">
                        <label>E-posta Adresiniz</label>
                        <div class="input-group input-group-icon">
                            <input name="yeposta" type="text" class="form-control input-lg" />
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-user"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Şifreniz</label>
                            <!-- <a href="pages-recover-password.html" class="pull-right">Lost Password?</a> -->
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="ysifre" type="password" class="form-control input-lg"/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <?
                            $s1 = rand(1, 9);
                            $s2 = rand(0, 9);
                            $t = $s1 + $s2;
                            $y = md5($t);
                            ?>
                            <label class="pull-left"><? echo "$s1 + $s2 işleminin sonucunu giriniz." ?> </label>
                        </div>
                        <input type="hidden" value="<? echo $y; ?>" name="toplam">

                        <div class="input-group input-group-icon">
                            <input name="dkodu" type="text" class="form-control input-lg"/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-question"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div id="yGiris" class="btn btn-primary col-sm-12">Giriş Yap</div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Samet Türkmen 2018. Tüm hakları saklıdır.</p>
    </div>
</section>
<!-- end: page -->

<!-- Vendor -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="ayarlar/main.js"></script>
<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets/javascripts/theme.init.js"></script>

</body>
</html>