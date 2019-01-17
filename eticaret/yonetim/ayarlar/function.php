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
    $par = temiz(@$_GET[$par]);
    return $par;
}
function p($par){
    $par = htmlspecialchars(trim(@$_POST[$par]));
    return $par;
}
function git($par){
    header("Location:{$par}");
}
function s($par){ // Giriş Session işlemi için
    $par = $_SESSION[$par];
    return $par;
}
function yoneticikontrol(){
    if(!$_SESSION || !$_SESSION['yetki']  == '1'){
        header("Location:giris.php");
    }
}
function rasgeleharf($kackarakter)
{
    $s = "";
    $char="ABCDEFGHIJKLMNOPRSTUVWYZQX";
    for ($k=1;$k<=$kackarakter;$k++)
    {
        $h=substr($char,mt_rand(0,strlen($char)-1),1);
        $s.=$h;
    }
    return $s;
}
function uzanti($dosya) {
    $uzanti = pathinfo($dosya);
    $uzanti = $uzanti["extension"];
    return $uzanti;
}
function resimadi(){
    $rn = rand(1000,9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000,9999);
    $rn .= rasgeleharf(1);
    return $rn;
}
function resimyukle($postisim,$yeniisim,$yol){
    // VEROT RESİM YÜKLEME
    $foo = new Upload($_FILES[$postisim]);
    if($foo->uploaded){
        $foo->allowed = array('image/*');
        $foo->file_new_name_body = $yeniisim;
        $foo->image_resize = true;
        $foo->image_x = 500;
        $foo->image_ratio_y = true;
        $foo->Process($yol);
        if($foo->processed){
            $foo -> Clean();
            return true;
        }else{
            return false;
        }
    }
    // VEROT RESİM YÜKLEME

}
function parayaz($para){
    $para = number_format($para, 2, ',', '.')." ₺";
    return $para;
}
function parayaz2($para){
    $para = number_format($para, 2, ',', '.');
    return $para;
}
function noktasil($s) {
    $tr = array('.',',');
    $eng = array('','.');
    $s = str_replace($tr,$eng,$s);
    return $s;
}
function urungetir($par){
    global $db;
    $veri = $db->prepare("SELECT * FROM urunler WHERE urun_id=$par");
    $veri->execute(array());
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    return $v;
}
function urunresimgetir($id){
    global $db;
    $veri = $db->prepare("SELECT urun_resim FROM urunler WHERE urun_id='$id'");
    $veri->execute(array());
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $ur);
    return $ur['urun_resim'];
}
