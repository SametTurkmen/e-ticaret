<?
require_once 'main.php';
require_once '../inc/header.php';

$urun_id = g('urun_id');
$urun = urungetir($urun_id);

?>
			<div role="main" class="main">

			<section class="page-header mb-lg">

				<div class="container">
					<ul class="breadcrumb">
						<li><a class="fa fa-home fa-lg"></a></li>
						<li><a><? echo $urun['kategori_title']; ?></a></li>
						<li class="active"><? echo $urun['urun_title']; ?></li>
					</ul>
				</div>
			</section>
			
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="product-view">
							<div class="product-essential">
								<div class="row">
									<div class="product-img-box col-sm-5">
										<div class="product-img-box-wrapper">
	                                        <div class="product-img-wrapper">
	                                        	<img id="product-zoom" src="../<? echo $urun['urun_resim']; ?>" alt="Product main image">
	                                        </div>

										</div>

									</div>

									<div class="product-details-box col-sm-7">
										<h1 class="product-name">
											<? echo $urun['urun_title']; ?>
										</h1>


                                        <div class="product-short-desc">
											<p><? echo $urun['urun_meta_desc']?></p>
										</div>

										<div class="product-detail-info">
											<div class="product-price-box">
												<span class="product-price"><? echo parayaz($urun['urun_fiyat'])?></span>
											</div>
										</div>
                                        <form id="sepeteEkleForm">
                                            <div class="product-actions">
                                                <label class="label label-lg label-default">Ürün Adeti</label>
                                                <div class="product-detail-qty">
                                                    <input type="text" value="1" class="vertical-spinner" id="product-vqty" name="adet">
                                                </div>

                                                <input type="hidden" name="urun_fiyat" value="<? echo $urun_id; ?>">
                                                <input type="hidden" name="urun_fiyat" value="<? echo $urun['urun_fiyat']; ?>">

                                                <a id="sepeteEkle" href="#" class="addtocart" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Sepete Ekle</span>
                                                </a>
                                                <div id="sepeteEkleAlert"></div>
                                            </div>
                                        </form>

										<div class="product-share-box">
											<div class="addthis_inline_share_toolbox"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="tabs product-tabs">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#product-desc" data-toggle="tab">Açıklama</a>
									</li>
									<li>
										<a href="#product-add" data-toggle="tab">Tag</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="product-desc" class="tab-pane active">
										<div class="product-desc-area">
											<p><? echo $urun['urun_desc']; ?></p>
										</div>
									</div>
									<div id="product-add" class="tab-pane">
										<table class="product-table">
											<tbody>
                                            <label class="label label-lg label-success"><? echo keywrite($urun['urun_meta_keyw']); ?></label>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<h2 class="slider-title">
                            <span class="inline-title">İLGİLİ ÜRÜNLER</span>
                            <span class="line"></span>
                        </h2>

                        <?
                        $veri = $db->prepare("SELECT * FROM urunler");
                        $veri->execute(array());
                        $v = $veri->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($v as $urunler);
                        {
                        ?>

                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':4, 'margin':20, 'nav':true, 'dots': false, 'loop': false}">
							<div class="product">
								<figure class="product-image-area">
									<a href="#" title="Product Name" class="product-image">
										<img src="../<? echo $urunler['urun_resim']; ?>" alt="Product Name">
<!--										<img src="../img/demos/shop/products/product1-2.jpg" alt="Product Name" class="product-hover-image">-->
									</a>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="#" title="Product Name"><? echo $urunler['urun_title']; ?></a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:100%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="product-price"><? echo parayaz($urunler['urun_fiyat']); ?></span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Sepete Ekle</span>
										</a>
									</div>
								</div>
							</div>

                           <? } ?>


						</div>
					</div>
					<aside class="col-md-3 sidebar product-sidebar">
						<div class="feature-box feature-box-style-3">
							<div class="feature-box-icon">
								<i class="fa fa-truck"></i>
							</div>
							<div class="feature-box-info">
								<h4>ÜCRETSİZ KARGO VE İADE</h4>
								<p class="mb-none">Tüm siparişlerde ücretsiz kargo</p>
							</div>
						</div>

						<div class="feature-box feature-box-style-3">
							<div class="feature-box-icon">
								<i class="fa fa-turkish-lira"></i>
							</div>
							<div class="feature-box-info">
								<h4>PARA İADE GARANTİSİ</h4>
								<p class="mb-none">% 100 para iade garantisi.</p>
							</div>
						</div>

						<div class="feature-box feature-box-style-3">
							<div class="feature-box-icon">
								<i class="fa fa-support"></i>
							</div>
							<div class="feature-box-info">
								<h4>ONLİNE DESTEK</h4>
								<p class="mb-none">7/24 online destek.</p>
							</div>
						</div>

						<hr class="mt-xlg">

						<div class="owl-carousel owl-theme" data-plugin-options="{'items':1, 'margin': 5}">
							<a href="#">
								<img class="img-responsive" src="../img/demos/shop/banners/banner1.jpg" alt="Banner">
							</a>
							<a href="#">
								<img class="img-responsive" src="../img/demos/shop/banners/banner2.jpg" alt="Banner">
							</a>
						</div>

						<hr>
					</aside>
				</div>
			</div>

			</div>

			<? require_once '../inc/footer.php'; ?>