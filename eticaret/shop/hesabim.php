<?
require_once 'main.php';
uyekontrol();

$kisi_id= $_SESSION['id'];
$kisi= kisigetir($kisi_id);

require_once '../inc/header.php';
?>


			<div role="main" class="main">
			

			<section class="page-header mb-lg">

				<div class="container">
					<ul class="breadcrumb">
						<li><a href="#">Anasayfa</a></li>

						<li class="active">Hesabım</li>
					</ul>
				</div>
			</section>
				
				<div class="container">
					<div class="row">
						<div class="col-md-12  my-account form-section">
							<h1 class="h2 heading-primary font-weight-normal">Hesap Bilgilerimi Düzenle</h1>
							
							<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
								<div class="box-content">
                                    <div id="kisiGuncelleAlert"></div>
									<form id="kisiGuncelleForm">

										<h4 class="heading-primary text-uppercase mb-lg">HESAP BİLGİLERİ</h4>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="font-weight-normal">Adı <span class="required">*</span></label>
													<input type="text" class="form-control" name="ad" value="<?=$kisi['kisi_ad'];?>">
												</div>
											</div>
                                            <div class="col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label class="font-weight-normal">Soyadı <span class="required">*</span></label>
                                                    <input type="text" class="form-control" name="soyad" value="<? echo $kisi['kisi_soyad']; ?>">
                                                </div>
                                            </div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="font-weight-normal">Telefon <span class="required">*</span></label>
													<input type="tel" class="form-control" name="telefon"  value="<? echo $kisi['kisi_tel']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="font-weight-normal">İl <span class="required">*</span></label>
													<input type="text" class="form-control" name="il" value="<? echo $kisi['kisi_il']; ?>">
												</div>
											</div>

											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="font-weight-normal">İlçe <span class="required">*</span></label>
													<input type="text" class="form-control" name="ilce" value="<? echo $kisi['kisi_ilce']; ?>">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="font-weight-normal">Adres <span class="required">*</span></label>
													<input type="text" class="form-control" name="adres" value="<? echo $kisi['kisi_adres']; ?>">
												</div>
											</div>

											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="font-weight-normal">E-mail Adresi <span class="required">*</span></label>
													<input type="email" class="form-control" name="email" value="<? echo $kisi['kisi_mail']; ?>">
												</div>
											</div>

											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="font-weight-normal">Cinsiyet <span class="required">*</span></label>
													<input type="text" class="form-control" name="cinsiyet" value="<? echo $kisi['kisi_cinsiyet']; ?>">
												</div>
											</div>
										</div>

										<div class="checkbox mb-xs">
											<label>
												<input type="checkbox" value="1" id="change-pass-checkbox">
												Şifre Değiştir
											</label>
										</div>

										<div id="account-chage-pass">
											<h4 class="heading-primary text-uppercase mb-lg">ŞİFRE DEĞİŞTİR</h4>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="font-weight-normal">Şifre <span class="required">*</span></label>
														<input id="password" type="password" class="form-control" name="sifre"  value="<? echo $kisi['kisi_sifre']; ?>">
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<label class="font-weight-normal">Şifre Onayla <span class="required">*</span></label>
														<input id="passwordconfirm" type="password" class="form-control" name="sifre_onay" value="<? echo $kisi['kisi_sifre']; ?>">
													</div>
												</div>
											</div>
										</div>
                                        <input type="hidden" name="kisi_id" value="<? echo $kisi_id; ?>">

										<div class="row">
											<div class="col-xs-12">
												<p class="required mt-lg mb-none">* Zorunlu Alanlar</p>

												<div class="form-action clearfix mt-none">
                                                    <?
                                                    if (isLogin){
                                                        echo '';
                                                    }else{
                                                        echo '<a href="login.php" class="pull-left"><i class="fa fa-angle-double-left"></i> Geri</a>';
                                                    }
                                                    ?>


                                                    <div id="kisiGuncelle" class="btn btn-primary">Kaydet</div>

												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>


					</div>
				</div>

			</div>

			<? require_once '../inc/footer.php'; ?>