<?
require_once 'main.php';

if(isLogin)
{
    header('Location:hesabim.php');
}


require_once '../inc/header.php';
?>


			<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<li><a href="index.php">Home</a></li>
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
											<a href="demo-shop-6-category-2col.html">2 Columns</a>
										</li>
										<li>
											<a href="demo-shop-6-category-3col.html">3 Columns</a>
										</li>
										<li>
											<a href="demo-shop-6-category-4col.html">4 Columns</a>
										</li>
										<li>
											<a href="demo-shop-6-category-5col.html">5 Columns</a>
										</li>
										<li>
											<a href="demo-shop-6-category-6col.html">6 Columns</a>
										</li>
										<li>
											<a href="demo-shop-6-category-7col.html">7 Columns</a>
										</li>
										<li>
											<a href="demo-shop-6-category-8col.html">8 Columns</a>
										</li>
										<li>
											<a href="demo-shop-6-category-right-sidebar.html">Right Sidebar</a>
										</li>
										<li>
											<a href="demo-shop-6-category-list.html">Category List</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Category Banners</a>
									<ul>
										<li>
											<a href="demo-shop-6-category-banner-boxed-slider.html">Boxed slider</a>
										</li>
										<li>
											<a href="demo-shop-6-category-banner-boxed-image.html">Boxed Image</a>
										</li>
										<li>
											<a href="demo-shop-6-category-banner-fullwidth.html">Fullwidth</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Product Details</a>
									<ul>
										<li>
											<a href="urun_detay.php">Product Details 1</a>
										</li>
										<li>
											<a href="demo-shop-6-product-details2.html">Product Details 2</a>
										</li>
										<li>
											<a href="demo-shop-6-product-details3.html">Product Details 3</a>
										</li>
										<li>
											<a href="demo-shop-6-product-details4.html">Product Details 4</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="demo-shop-6-cart.html">Shopping Cart</a>
								</li>
								<li>
									<a href="demo-shop-6-checkout.html">Checkout</a>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Login &amp; Register</a>
									<ul>
										<li>
											<a href="login.php">Login</a>
										</li>
										<li>
											<a href="kayit.php">Register</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Dashboard</a>
									<ul>
										<li>
											<a href="demo-shop-6-dashboard.html">Dashboard</a>
										</li>
										<li>
											<a href="hesabim.php">My Account</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="about-us.php">About Us</a>
						</li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Blog</a>
							<ul>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="demo-shop-6-blog-post.html">Blog Post</a></li>
							</ul>
						</li>
						<li>
							<a href="contact-us.php">Contact Us</a>
						</li>
						<li>
							<a href="#">Buy Porto!</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">
				
			<section class="form-section">
				<div class="container">
					<h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Hesap Oluşturun veya Giriş Yapın</h1>

					<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
						<div class="box-content">
							<form id="loginForm" method="post">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-content">
											<h3 class="heading-text-color font-weight-normal">Yeni Müşteriler</h3>
											<p>Mağazamızla bir hesap oluşturarak, ödeme işlemlerini daha hızlı gerçekleştirebilir, gönderim adresi ekleyebilir, siparişlerinizi hesabınızda görüntüleyebilir ve takip edebilirsiniz.</p>
										</div>

										<div class="form-action clearfix">
											<a href="kayit.php" class="btn btn-primary">Hesap Oluştur</a>
										</div>
									</div>
									<div class="col-sm-6">
                                        <div id="loginAlert"> </div>
										<div class="form-content">
											<h3 class="heading-text-color font-weight-normal">Kayıtlı Müşteriler</h3>
											<p>Bir bir hesabınız varsa, lütfen giriş yapın.</p>
											<div class="form-group">
												<label class="font-weight-normal">Kullanıcı Adı <span class="required">*</span></label>
												<input name="kisi_kadi" type="text" class="form-control" required>
											</div>

											<div class="form-group">
												<label class="font-weight-normal">Şifre <span class="required">*</span></label>
												<input name="kisi_sifre" type="password" class="form-control" required>
											</div>

											<p class="required">* Zorunlu Alanlar</p>
										</div>

										<div class="form-action clearfix">
											<!-- <a href="#" class="pull-left">Forgot Your Password?</a> -->

                                            <div id="login" class="btn btn-primary">Gönder</div>
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