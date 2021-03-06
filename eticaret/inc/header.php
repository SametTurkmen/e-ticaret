<?
require_once '../shop/main.php';?>

<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>E-Ticaret Sitesi </title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendor/animate/animate.min.css">
    <link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/theme-elements.css">
    <link rel="stylesheet" href="../css/theme-blog.css">
    <link rel="stylesheet" href="../css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="../vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="../vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="../vendor/rs-plugin/css/navigation.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="../css/skins/skin-shop-6.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="../css/demos/demo-shop-6.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Head Libs -->
    <script src="../vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">
    <header id="header" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 147, 'stickySetTop': '-147px', 'stickyChangeLogo': false}">
        <div class="header-body">

            <div class="header-top">
                <div class="container">

                    <div class="top-menu-area">
                        <a href="#">Links <i class="fa fa-caret-down"></i></a>
                        <ul class="top-menu">
                            <li><a href="hesabim.php">HESABIM</a></li>
                            <?
                            if(isLogin){
                                echo '<li><a href="logout.php">ÇIKIŞ</a></li>';
                            }
                            else
                            {
                                echo '<li><a href="login.php">GİRİŞ</a></li>';
                            }
                            ?>

                        </ul>
                    </div>
                    <p class="welcome-msg">ALIŞVERİŞ DÜNYASINA HOŞGELDİNİZ!</p>
                </div>
            </div>
s
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="index.php">
                                <img alt="Porto"  src="../img/demos/shop/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="row">
                            <div class="cart-area">
                                <div class="custom-block">
                                    <i class="fa fa-phone"></i>
                                    <span>545 630 10 42</span>
                                    <span class="split"></span>
                                    <a href="#">BİZE ULAŞIN</a>
                                </div>

                                <div class="cart-dropdown">
                                    <a href="#" class="cart-dropdown-icon">
                                        <i class="minicart-icon"></i>
                                        <span class="cart-info">
													<span class="cart-qty">2</span>
													<span class="cart-text">item(s)</span>
												</span>
                                    </a>

                                    <div class="cart-dropdownmenu right">
                                        <div class="dropdownmenu-wrapper">
                                            <div class="cart-products">
                                                <div class="product product-sm">
                                                    <a href="#" class="btn-remove" title="Remove Product">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <figure class="product-image-area">
                                                        <a href="demo-shop-6-product-details.html" title="Product Name" class="product-image">
                                                            <img src="../img/demos/shop/products/thumbs/cart-product1.jpg" alt="Product Name">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details-area">
                                                        <h2 class="product-name"><a href="demo-shop-6-product-details.html" title="Product Name">Blue Women Top</a></h2>

                                                        <div class="cart-qty-price">
                                                            1 X
                                                            <span class="product-price">$65.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-sm">
                                                    <a href="#" class="btn-remove" title="Remove Product">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <figure class="product-image-area">
                                                        <a href="demo-shop-6-product-details.html" title="Product Name" class="product-image">
                                                            <img src="../img/demos/shop/products/thumbs/cart-product2.jpg" alt="Product Name">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details-area">
                                                        <h2 class="product-name"><a href="demo-shop-6-product-details.html" title="Product Name">Black Utility Top</a></h2>

                                                        <div class="cart-qty-price">
                                                            1 X
                                                            <span class="product-price">$39.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-totals">
                                                Total: <span>$104.00</span>
                                            </div>

                                            <div class="cart-actions">
                                                <a href="demo-shop-6-cart.html" class="btn btn-primary">View Cart</a>
                                                <a href="demo-shop-6-checkout.html" class="btn btn-primary">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="header-search">
                                <a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="Arama..." required>
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

  <!--  <div class="mobile-nav">
        <div class="mobile-nav-wrapper">
            <ul class="mobile-side-menu">
                <li><a href="../shop/index.php">Home</a></li>
                <li>
                    <span class="mmenu-toggle"></span>
                    <a href="#">Fashion <span class="tip tip-new">New</span></a>

                    <ul>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Women</a>
                            <ul>
                                <li>
                                    <a href="#">Tops &amp; Blouses</a>
                                </li>
                                <li>
                                    <a href="#">Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Dresses &amp; Skirts</a>
                                </li>
                                <li>
                                    <a href="#">Shoes &amp; Boots</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Men</a>

                            <ul>
                                <li>
                                    <a href="#">Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Watch &amp; Fashion <span class="tip tip-new">New</span></a>
                                </li>
                                <li>
                                    <a href="#">Tees, Knits &amp; Polos</a>
                                </li>
                                <li>
                                    <a href="#">Pants &amp; Denim</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Jewellery <span class="tip tip-hot">Hot</span></a>

                            <ul>
                                <li>
                                    <a href="#">Sweaters</a>
                                </li>
                                <li>
                                    <a href="#">Heels &amp; Sandals</a>
                                </li>
                                <li>
                                    <a href="#">Jeans &amp; Shorts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Kids Fashion</a>

                            <ul>
                                <li>
                                    <a href="#">Casual Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Spring &amp; Autumn</a>
                                </li>
                                <li>
                                    <a href="#">Winter Sneakers</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="mmenu-toggle"></span>
                    <a href="#">Pages <span class="tip tip-hot">Hot!</span></a>

                    <ul>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Category</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-category-2col.html">2 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-3col.html">3 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-4col.html">4 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-5col.html">5 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-6col.html">6 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-7col.html">7 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-8col.html">8 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-right-sidebar.html">Right Sidebar</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-list.html">Category List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Category Banners</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-category-banner-boxed-slider.html">Boxed slider</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-banner-boxed-image.html">Boxed Image</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-banner-fullwidth.html">Fullwidth</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Product Details</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-product-details.html">Product Details 1</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-product-details2.html">Product Details 2</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-product-details3.html">Product Details 3</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-product-details4.html">Product Details 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="demo-shop-5-cart.html">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="demo-shop-5-checkout.html">Checkout</a>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Login &amp; Register</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-login.html">Login</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-register.html">Register</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Dashboard</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-dashboard.html">Dashboard</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-myaccount.html">My Account</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="demo-shop-5-about-us.html">About Us</a>
                </li>
                <li>
                    <span class="mmenu-toggle"></span>
                    <a href="#">Blog</a>
                    <ul>
                        <li><a href="demo-shop-5-blog.html">Blog</a></li>
                        <li><a href="demo-shop-5-blog-post.html">Blog Post</a></li>
                    </ul>
                </li>
                <li>
                    <a href="demo-shop-5-contact-us.html">Contact Us</a>
                </li>
                <li>
                    <a href="#">Buy Porto!</a>
                </li>
            </ul>
        </div>
    </div> -->

    <div id="mobile-menu-overlay"></div>
