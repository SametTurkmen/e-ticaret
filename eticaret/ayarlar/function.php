<?php
function temiz ($text) {
    $text =strip_tags($text);
    $text = preg_replace('/<a\s+.*?href="([^"]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)',$text );
    $text = preg_replace( '/<!--.+?-->/', '', $text );
    $text = preg_replace( '/{.+?}/', '', $text );
    $text = preg_replace( '/&nbsp;/', ' ', $text );
    $text = preg_replace( '/&amp;/', ' ', $text );
    $text = preg_replace( '/&quot;/', ' ', $text );
    $text = htmlspecialchars($text);
    $text = addslashes($text);
    return $text;
}
function g($par){
    $par = temiz($_GET[$par]);
    return $par;
}
function p($par){
    $par = htmlspecialchars(trim($_POST[$par]));
    return $par;
}
function git($par){
    header("Location:{$par}");
}

function uyekontrol(){
    if(!isLogin){
        header("Location:login.php");
    }
}

function kisigetir($par){
    global $db;
    $veri = $db->prepare("SELECT * FROM kisiler WHERE kisi_id=$par");
    $veri->execute();
    $v = $veri->fetch(PDO::FETCH_ASSOC);
    return $v;
}

function urungetir($par){
    global $db;
    $veri = $db->prepare("SELECT * FROM urunler INNER JOIN kategoriler ON kategoriler.kategori_id= urunler.urun_kategori WHERE urun_id=$par limit 0,1");
    $veri->execute();
    $v = $veri->fetch(PDO::FETCH_ASSOC);
    return $v;
}
/*
function urunresimgetir($id){
    global $db;
    $veri = $db->prepare("SELECT urun_resim FROM urunler WHERE urun_id='$id'");
    $veri->execute(array());
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $ur);
    return $ur['urun_resim'];
}*/
function parayaz($para){
    $para = number_format($para, 2, ',', '.')." ₺";
    return $para;
}
function parayaz2($para){
    $para = number_format($para, 2, ',', '.');
    return $para;
}

function keywrite($key){
    $key = str_replace(",","&nbsp; - &nbsp;",$key);
    return $key;
}