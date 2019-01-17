<?php
require_once 'baglanti.php';
require_once 'class.upload.php';
require_once 'function.php';

//KATEGORİ iŞLEMLERİ
if (g('islem')=='kategoriEkle'){
    $kategori_ust=p('kategori_ust');
    $kategori_title=p('kategori_title');
    $kategori_desc=p('kategori_desc');
    $kategori_keyw=p('kategori_keyw');
    $kategori_durum=p('kategori_durum');

    if (empty($kategori_ust)){
        echo "<div class='alert alert-warning'> Lütfen kategori modelini seçiniz.</div>";
    }elseif (empty($kategori_title)){
        echo "<div class='alert alert-warning'> Lütfen kategori adını giriniz.</div>";
    }elseif (empty($kategori_desc)){
        echo "<div class='alert alert-warning'> Lütfen kategori açıklamasını giriniz.</div>";
    }elseif (empty($kategori_keyw)){
        echo "<div class='alert alert-warning'> Lütfen kategoriniz için anahtar kelimeler giriniz.</div>";
    }elseif (empty($kategori_durum)){
        echo "<div class='alert alert-warning'> Lütfen kategori durumunu giriniz.</div>";
    }else{
        $key =rand(99,999);
        $key .=rand(99,999);
        $key .=rand(99,999);
        $key .=rand(99,999);
        $key .=rand(99,999);
        $key .=rand(99,999);

        //echo $key;
        $ekle= $db->prepare("INSERT INTO kategoriler SET kategori_key=?, kategori_title=?, kategori_desc=?, kategori_keyw=?, kategori_ust=?, kategori_durum=? ");
        $ekleme = $ekle->execute(array($key, $kategori_title, $kategori_desc, $kategori_keyw, $kategori_ust, $kategori_durum));

        // echo $kategori_desc."---".$ekleme."---".$kategori_title;
        // var_dump($ekle);

        if ($ekleme){
            echo "<div class='alert alert-success'>Kategori ekleme işleminiz başarıyla gerçekleşti.</div><meta http-equiv='refresh' content='1; url=kategoriler.php?ekle=ok'>";
        }else{
            echo "<div class='alert alert-danger'>Ekleme işlemi sırasında hata oluştu.</div>";
            print_r(error_get_last());
        }
    }
}

if (g('kategoriSil')=="ok")
{
  //  print_r(g('kategori_id')); exit();
    $sil= $db -> prepare("DELETE FROM kategoriler WHERE kategori_id=?");
    $silme= $sil -> execute(array(g('kategori_id')));
    if ($silme){
        git("../kategoriler.php?silme=ok");
    }else{
        git("../kategoriler.php?silme=no");
    }
}

if(g('islem') == 'kategoriGuncelle'){
    $kategori_ust=p('kategori_ust');
    $kategori_title=p('kategori_title');
    $kategori_desc=p('kategori_desc');
    $kategori_keyw=p('kategori_keyw');
    $kategori_durum=p('kategori_durum');
    $kategori_id= p('kategori_id');

    if (empty($kategori_ust)){
        echo "<div class='alert alert-warning'> Lütfen kategori modelini seçiniz.</div>";
    }elseif (empty($kategori_title)){
        echo "<div class='alert alert-warning'> Lütfen kategori adını giriniz.</div>";
    }elseif (empty($kategori_desc)){
        echo "<div class='alert alert-warning'> Lütfen kategori açıklamasını giriniz.</div>";
    }elseif (empty($kategori_keyw)){
        echo "<div class='alert alert-warning'> Lütfen kategoriniz için anahtar kelimeler giriniz.</div>";
    }elseif (empty($kategori_durum)){
        echo "<div class='alert alert-warning'> Lütfen kategori durumunu giriniz.</div>";
    }else{
        $guncelle = $db ->prepare("UPDATE kategoriler SET kategori_title=?, kategori_desc=?, kategori_keyw=?, kategori_ust=?, kategori_durum=? WHERE kategori_id='$kategori_id' ");
        $guncelleme = $guncelle -> execute(array($kategori_title, $kategori_desc, $kategori_keyw, $kategori_ust, $kategori_durum));

        if ($guncelleme){
            echo "<div class='alert alert-success'>Güncelleme işlemi başarılı, lütfen bekleyiniz.</div><meta http-equiv='refresh' content='1; url=kategoriler.php?guncelle=ok'>";
        }else{
            echo "<div class='alert alert-danger'>Güncelleme işlemi sırasında hata oluştu.</div>";
        }
    }
}

//SESSION iŞLEMLERİ
if (g('islem') == 'yGiris'){
    $eposta = p('yeposta');
    $sifre = p('ysifre');
    $toplam = p('toplam');
    $dkodu = p('dkodu');

    if (empty($eposta))
    {
        echo "<div class='alert alert-warning'>Lütfen e-posta adresinizi giriniz. </div>";
    }elseif (filter_var($eposta, FILTER_VALIDATE_EMAIL)!= true) {
        echo "<div class='alert alert-warning'>Lütfen geçerli bir e-posta adresi giriniz. </div>";
    }elseif (empty($sifre))
    {
        echo "<div class='alert alert-warning'>Lütfen şifrenizi giriniz. </div>";
    }elseif (empty($dkodu))
    {
        echo "<div class='alert alert-warning'>Lütfen doğrulama kodunu giriniz. </div>";
    }elseif ($toplam != md5($dkodu)){
        echo "<div class='alert alert-warning'>Doğrulama kodunuz hatalı. </div>";
    }else{
        $veri = $db -> prepare("SELECT * FROM yonetim WHERE yonetim_eposta=? AND yonetim_sifre=? ");
        $veri ->execute(array($eposta, md5($sifre)));
        $v = $veri->fetchAll(PDO::FETCH_ASSOC);
        $say = $veri -> rowCount();
        foreach ($v as $yonetim);
        if ($say){
            if ($yonetim['yonetim_yetki'] != '1'){
                echo "<div class='alert alert-warning'>Giriş yetkiniz bulunmamaktadır. </div>";
            }else{
                $_SESSION['id'] = $yonetim ['yonetim_id'];
                $_SESSION['isim'] = $yonetim ['yonetim_isim'];
                $_SESSION['soyisim'] = $yonetim ['yonetim_soyisim'];
                $_SESSION['eposta'] = $yonetim ['yonetim_eposta'];
                $_SESSION['yetki'] = $yonetim ['yonetim_yetki'];
                echo "<div class='alert alert-success'>Giriş başarılı lütfen bekleyiniz... </div><meta http-equiv='refresh' content='2; url=index.php'>";
            }

        }else{
            echo "<div class='alert alert-warning'>Böyle bir yönetici bulunmamaktadır. </div>";
        }
    }
}

if (g('islem')=='cikis'){
    session_destroy();
    header("Location:../giris.php");
}

// ÜRÜN iŞLEMLERİ
if (g('islem') =='urunEkle'){

    $urun_kategori = p('urun_kategori');
    $urun_title = p('urun_title');
    $urun_desc = p('urun_desc');
    $urun_meta_desc = p('urun_meta_desc');
    $urun_meta_title = p('urun_meta_title');
    $urun_meta_keyw = p('urun_meta_keyw');
    $urun_fiyat = p('urun_fiyat');
    $urun_sira = p('urun_sira');

    if (empty($urun_kategori)){
        echo "<div class='alert alert-warning'>Lütfen ürün kategorisini giriniz</div>";
    }elseif (empty($urun_title)){
        echo "<div class='alert alert-warning'>Lütfen ürün başlığını giriniz</div>";
    }elseif (empty($urun_desc)){
        echo "<div class='alert alert-warning'>Lütfen ürün açıklamasını giriniz</div>";
    }elseif (empty($urun_meta_title)){
        echo "<div class='alert alert-warning'>Lütfen ürün meta başlığını giriniz</div>";
    }elseif (empty($urun_meta_desc)){
        echo "<div class='alert alert-warning'>Lütfen ürün meta açıklamasını giriniz</div>";
    }elseif (empty($urun_meta_keyw)){
        echo "<div class='alert alert-warning'>Lütfen ürün anahtar meta kelimeleri giriniz</div>";
    }elseif (empty($urun_fiyat)){
        echo "<div class='alert alert-warning'>Lütfen ürün fiyatını giriniz</div>";
    }elseif (empty($urun_sira)){
        echo "<div class='alert alert-warning'>Lütfen ürün sırasını giriniz</div>";
    }else{
        // print_r($_FILES);
        @$name = $_FILES['urun_resim']['name'];
        $yol='../../resimler';
        $rn= resimadi();
        $uzanti=uzanti($name);
        $vtyol ="resimler/$rn.$uzanti";

        if ($_FILES['urun_resim']['size'] > 1024*1024*2){
            echo "Maximum resim boyutu 2 MB olmalı";
        }else{
            $resimyukleme=resimyukle('urun_resim', $rn,$yol);
            if ($resimyukleme){

                $ekle=$db->prepare("INSERT INTO urunler SET urun_resim=?, urun_title=?, urun_desc=?, urun_meta_desc=?, urun_meta_title=?, urun_meta_keyw=?, urun_fiyat=?, urun_kategori=?, urun_sira=? ");
                $ekleme=$ekle->execute(array($vtyol,$urun_title, $urun_desc, $urun_meta_desc,$urun_meta_title,$urun_meta_keyw,noktasil($urun_fiyat),$urun_kategori,$urun_sira));
                if ($ekleme){
                    echo "<div class='alert alert-success'>Ürün ekleme işlemi başarıyla gerçekleşti</div><meta http-equiv='refresh' content='1; url=urunler.php?ekle=ok'>";
                }else{
                    echo "<div class='alert alert-danger'>Ürün ekleme işlemi sırasında hata meydana geldi</div>";
                }

            }else{
                echo "<div class='alert alert-danger'>Ürün resmi yüklenirken bir hata oluştu.</div>";
            }
        }
    }

}

if (g('urunSil')=="ok")
{
    //  print_r(g('kategori_id')); exit();

    $u=urungetir(g('urun_id'));
    foreach ($u as $urun);
    $eskiresim='../../'.$urun['urun_resim'];

    $sil= $db -> prepare("DELETE FROM urunler WHERE urun_id=?");
    $silme= $sil -> execute(array(g('urun_id')));
    if ($silme){
        unlink($eskiresim);
        git("../urunler.php?silme=ok");
    }else{
        git("../urunler.php?silme=no");
    }
}

if (g('islem') == 'urunGuncelle'){
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>"; */

   $urun_id =p('urun_id');
   $urun_kategori =p('urun_kategori');
   $urun_title =p('urun_title');
   $urun_desc =p('urun_desc');
   $urun_meta_title =p('urun_meta_title');
   $urun_meta_desc =p('urun_meta_desc');
   $urun_meta_keyw =p('urun_meta_keyw');
   $urun_fiyat =noktasil(p('urun_fiyat'));
   $urun_sira =p('urun_sira');

    $urunEskiResim = urunresimgetir($urun_id);

    if (empty($urun_kategori)){
        echo "<div class='alert alert-warning'>Lütfen ürün kategorisini giriniz</div>";
    }elseif (empty($urun_title)){
        echo "<div class='alert alert-warning'>Lütfen ürün başlığını giriniz</div>";
    }elseif (empty($urun_desc)){
        echo "<div class='alert alert-warning'>Lütfen ürün açıklamasını giriniz</div>";
    }elseif (empty($urun_meta_title)){
        echo "<div class='alert alert-warning'>Lütfen ürün meta başlığını giriniz</div>";
    }elseif (empty($urun_meta_desc)){
        echo "<div class='alert alert-warning'>Lütfen ürün meta açıklamasını giriniz</div>";
    }elseif (empty($urun_meta_keyw)){
        echo "<div class='alert alert-warning'>Lütfen ürün anahtar meta kelimeleri giriniz</div>";
    }elseif (empty($urun_fiyat)){
        echo "<div class='alert alert-warning'>Lütfen ürün fiyatını giriniz</div>";
    }elseif (empty($urun_sira)){
        echo "<div class='alert alert-warning'>Lütfen ürün sırasını giriniz</div>";
    }else{
        if ($_FILES['urun_resim']['size'] <= 0){
            $guncelle=$db->prepare("UPDATE urunler SET urun_resim=?, urun_title=?, urun_desc=?, urun_meta_desc=?, urun_meta_title=?, urun_meta_keyw=?, urun_fiyat=?, urun_kategori=?, urun_sira=? WHERE urun_id='$urun_id'");
            $guncelleme=$guncelle->execute(array($urunEskiResim,$urun_title, $urun_desc, $urun_meta_desc,$urun_meta_title,$urun_meta_keyw,$urun_fiyat,$urun_kategori,$urun_sira));

            if ($guncelleme){
                echo "<div class='alert alert-success'>Ürün güncelleme işlemi başarıyla gerçekleşti.</div><meta http-equiv='refresh' content='1; url=urunler.php?guncelle=ok'>";
            }else{
                echo "<div class='alert alert-danger'>Ürün güncelleme sırasında bir hata meydana geldi.</div>";
            }

        }elseif ($_FILES['urun_resim']['size'] > 1024*1024*2){
            echo "Maximum resim boyutu 2 MB olmalı.";
        }else {
            @$name = $_FILES['urun_resim']['name'];
            $yol='../../resimler';
            $rn= resimadi();
            $uzanti=uzanti($name);
            $vtyol ="resimler/$rn.$uzanti";
            $resimyukleme= resimyukle('urun_resim', $rn,$yol);
            if ($resimyukleme){
                $guncelle=$db->prepare("UPDATE urunler SET urun_resim=?, urun_title=?, urun_desc=?, urun_meta_desc=?, urun_meta_title=?, urun_meta_keyw=?, urun_fiyat=?, urun_kategori=?, urun_sira=? WHERE urun_id='$urun_id'");
                $guncelleme=$guncelle->execute(array($vtyol,$urun_title, $urun_desc, $urun_meta_desc,$urun_meta_title,$urun_meta_keyw,$urun_fiyat,$urun_kategori,$urun_sira));

                if ($guncelleme){
                    echo "<div class='alert alert-success'>Ürün güncelleme işlemi başarıyla gerçekleşti.</div><meta http-equiv='refresh' content='1; url=urunler.php?guncelle=ok'>";
                    unlink("../../$urunEskiResim");
                }else{
                    echo "<div class='alert alert-danger'>Ürün güncelleme sırasında bir hata meydana geldi.</div>";
                }
            }
        }
    }
}

// ÜYE İŞLEMLERİ

if (g('kisiSil')=='ok'){
    $sil = $db-> prepare("DELETE FROM kisiler WHERE kisi_id=?");
    $silme= $sil -> execute(array(g('kisi_id')));
    if ($silme){
        git("../kisiler.php?silme=ok");
    }else{
        git("../kisiler.php?silme=no");
    }
}
