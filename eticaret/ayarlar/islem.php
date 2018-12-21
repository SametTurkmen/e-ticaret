<?php
require_once 'baglanti.php';
require_once 'function.php';

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

    $ekle= $db ->prepare("INSERT INTO kisiler SET kisi_ad=?, kisi_soyad=?, kisi_tel=?, kisi_il=?, kisi_ilce=?, kisi_adres=?, kisi_mail=?, kisi_cinsiyet=?, kisi_kadi=?, kisi_sifre=?");
    $ekleme = $ekle->execute(array($kisi_ad,$kisi_soyad,$kisi_tel,$kisi_il,$kisi_ilce,$kisi_adres,$kisi_mail,$kisi_cinsiyet,$kisi_kadi,$kisi_sifre));

    if ($ekleme){
        echo "<div class='alert alert-success'>Kaydınız başarıyla alındı.</div>";
    }else{
        echo "<div class='alert alert-danger'>Kaydınız alınamadı!</div>";
    }
}