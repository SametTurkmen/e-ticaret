<?php
include 'baglanti.php';
include 'function.php';

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
        $ekleme=$ekle->execute(array($key, $kategori_title, $kategori_desc, $kategori_keyw, $kategori_ust, $kategori_durum));

        // echo $kategori_desc."---".$ekleme."---".$kategori_title;
        // var_dump($ekle);

        if ($ekleme){
            echo "<div class='alert alert-success'>Kategori ekleme işleminiz başarıyla gerçekleşti.</div><meta http-equiv='refresh' content='2; url=kategoriler.php?ekle=ok'>";
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
            echo "<div class='alert alert-success'>Güncelleme işlemi başarılı, lütfen bekleyiniz.</div><meta http-equiv='refresh' content='2; url=kategoriler.php?guncelle=ok'>";
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
    // print_r($_FILES);
    if ($_FILES['urun_resim']['size'] > 1024*1024){
        echo "Resim boyutu çok büyük";
    }else{
        $uploads_dir='../../resimler';
        @$tmp_name = $_FILES['urun_resim']['tmp_name'];
        @$name = $_FILES['urun_resim']['name'];
        $rn = rand(1000, 9999);
        $rn .= rand(1000, 9999);
        $rn .= rand(1000, 9999);
        $rn .= rand(1000, 9999);
        $rn .= rand(1000, 9999);
        $resimyol= substr($uploads_dir,6)."/".$rn.$name;
        $yukle= @move_uploaded_file($tmp_name, "$uploads_dir/$rn$name");

    }

    $urun_kategori = p('urun_kategori');
    $urun_title = p('urun_title');
    $urun_desc = p('urun_desc');
    $urun_meta_title = p('urun_meta_title');
    $urun_meta_desc = p('urun_meta_desc');
    $urun_meta_keyw = p('urun_meta_keyw');
    $urun_fiyat = p('urun_fiyat');
    $urun_sira = p('urun_sira');
}

