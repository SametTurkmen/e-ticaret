<?php
require_once '../shop/main.php';

//ÜYE EKLEME
if (g('islem') =="kisiEkle"){
    $kisi_ad= p('ad');
    $kisi_soyad= p('soyad');
    $kisi_tel= p('telefon');
    $kisi_il= p('il');
    $kisi_ilce= p('ilce');
    $kisi_adres= p('adres');
    $kisi_mail= p('email');
    $kisi_cinsiyet= p('cinsiyet');
    $kisi_kadi= p('k_ad');
    $kisi_sifre= p('sifre');
    $sifre_onay= p('sifre_onay');

    if (empty($kisi_ad)){
        echo "<div class='alert alert-warning'>Lütfen adınızı giriniz</div>";
    }elseif (empty($kisi_soyad)){
        echo "<div class='alert alert-warning'>Lütfen soyadınızı giriniz</div>";
    }elseif (empty($kisi_tel)){
        echo "<div class='alert alert-warning'>Lütfen telefon numaranızı giriniz</div>";
    }elseif (empty($kisi_il)){
        echo "<div class='alert alert-warning'>Lütfen ilinizi giriniz</div>";
    }elseif (empty($kisi_ilce)){
        echo "<div class='alert alert-warning'>Lütfen ilçenizi giriniz</div>";
    }elseif (empty($kisi_adres)){
        echo "<div class='alert alert-warning'>Lütfen adresinizi giriniz</div>";
    }elseif (empty($kisi_mail)){
        echo "<div class='alert alert-warning'>Lütfen mail adresinizi giriniz</div>";
    }elseif (empty($kisi_cinsiyet)){
        echo "<div class='alert alert-warning'>Lütfen cinsiyetinizi giriniz</div>";
    }elseif (empty($kisi_kadi)){
        echo "<div class='alert alert-warning'>Lütfen kullanıcı adınızı giriniz</div>";
    }elseif (empty($kisi_sifre)){
        echo "<div class='alert alert-warning'>Lütfen şifrenizi giriniz</div>";
    }else {
        if($kisi_sifre != $sifre_onay){
            echo "<div class='alert alert-warning'>Şifre ile şifre onayınızın aynı olması gerekmektedir.</div>";
        }else {

            $ekle = $db->prepare("INSERT INTO kisiler SET kisi_ad=?, kisi_soyad=?, kisi_tel=?, kisi_il=?, kisi_ilce=?, kisi_adres=?, kisi_mail=?, kisi_cinsiyet=?, kisi_kadi=?, kisi_sifre=?");
            $ekleme = $ekle->execute(array($kisi_ad, $kisi_soyad, $kisi_tel, $kisi_il, $kisi_ilce, $kisi_adres, $kisi_mail, $kisi_cinsiyet, $kisi_kadi, $kisi_sifre));

            if ($ekleme) {
                echo "<div class='alert alert-success'>Kaydınız başarıyla alındı.</div>";
            } else {
                echo "<div class='alert alert-danger'>Kaydınız alınamadı!</div>";
            }
        }
    }
}

// GİRİŞ İŞLEMLERİ

if (g('islem')== 'login'){
    $kisi_kadi=p('kisi_kadi');
    $kisi_sifre= p('kisi_sifre');

    if (empty($kisi_kadi)){
        echo "<div class='alert alert-warning'>Lütfen kullanıcı adınızı giriniz.</div>";
    }elseif (empty($kisi_sifre)){
        echo "<div class='alert alert-warning'>Lütfen şifrenizi giriniz.</div>";
    }

    $veri= $db->prepare("SELECT * FROM kisiler WHERE kisi_kadi=? AND kisi_sifre=? LIMIT 0,1");
    $veri ->execute(array($kisi_kadi, $kisi_sifre));
    $v = $veri->fetch(PDO::FETCH_ASSOC);

    if ($v)
    {
        $_SESSION['id'] = $v['kisi_id'];
       // $_SESSION['kadi'] = $v['kisi_kadi'];
       // $_SESSION['sifre'] = $v['kisi_sifre'];
        echo "<div class='alert alert-success'>Giriş başarılı</div><meta http-equiv='refresh' content='2; url=index.php'>";
    }
    else
    {
        echo "<div class='alert alert-danger'>Kullanıcı adınızı ve şifrenizi kontrol ediniz.</div>";
    }
}

if (g('islem')=='kisiGuncelle'){
    $kisi_id= p('kisi_id');
    $kisi_ad= p('ad');
    $kisi_soyad= p('soyad');
    $kisi_tel= p('telefon');
    $kisi_il= p('il');
    $kisi_ilce= p('ilce');
    $kisi_adres= p('adres');
    $kisi_mail= p('email');
    $kisi_cinsiyet= p('cinsiyet');
    $kisi_sifre= p('sifre');
    $kisi_sifreonay= p('sifre_onay');

    if (empty($kisi_ad)){
        echo "<div class='alert alert-warning'>Lütfen adınızı giriniz</div>";
    }elseif (empty($kisi_soyad)){
        echo "<div class='alert alert-warning'>Lütfen soyadınızı giriniz</div>";
    }elseif (empty($kisi_tel)){
        echo "<div class='alert alert-warning'>Lütfen telefon numaranızı giriniz</div>";
    }elseif (empty($kisi_il)){
        echo "<div class='alert alert-warning'>Lütfen ilinizi giriniz</div>";
    }elseif (empty($kisi_ilce)){
        echo "<div class='alert alert-warning'>Lütfen ilçenizi giriniz</div>";
    }elseif (empty($kisi_adres)){
        echo "<div class='alert alert-warning'>Lütfen adresinizi giriniz</div>";
    }elseif (empty($kisi_mail)){
        echo "<div class='alert alert-warning'>Lütfen mail adresinizi giriniz</div>";
    }elseif (empty($kisi_cinsiyet)){
        echo "<div class='alert alert-warning'>Lütfen cinsiyetinizi giriniz</div>";
    }elseif (empty($kisi_sifre)){
        echo "<div class='alert alert-warning'>Lütfen şifrenizi giriniz</div>";
    }elseif (empty($kisi_sifreonay)) {
        echo "<div class='alert alert-warning'>Lütfen onaylama alanına şifrenizi giriniz</div>";
    }else {
        if($kisi_sifre != $kisi_sifreonay){
            echo "<div class='alert alert-warning'>Şifre ile şifre onayınızın aynı olması gerekmektedir.</div>";
        }
        else {
            $guncelle = $db->prepare("UPDATE kisiler SET kisi_ad=?, kisi_soyad=?, kisi_tel=?, kisi_il=?, kisi_ilce=?, kisi_adres=?, kisi_mail=?, kisi_cinsiyet=?, kisi_sifre=? WHERE kisi_id='$kisi_id'");
            $guncelleme = $guncelle->execute(array($kisi_ad, $kisi_soyad, $kisi_tel, $kisi_il, $kisi_ilce, $kisi_adres, $kisi_mail, $kisi_cinsiyet, $kisi_sifre));
            if ($guncelleme) {
                echo "<div class='alert alert-success'>Kişi bilgileriniz başarıyla gerçekleşti</div>";
            } else {
                echo "<div class='alert alert-danger'>Kişi bilgileriniz güncellenirken bir hata meydana geldi</div>";
            }
        }
    }
}

if (g('islem')=='sepeteEkle'){
    $urun_adet= p('adet');
    $kisiid= p('kisiid');
    $tutar= p('tutar');

    if (empty($urun_adet)){
        echo "<div class='alert alert-warning'>Lütfen ürün adetini giriniz</div>";
    }

    $ekle = $db->prepare("INSERT INTO sepettekiler SET sepet_kisiid=?, tutar=?,");
    $ekleme = $ekle->execute(array());
    if ($ekleme) {
        echo "<div class='alert alert-success'>başarıyla gerçekleşti</div>";
    } else {
        echo "<div class='alert alert-danger'>bir hata meydana geldi</div>";
    }
}

