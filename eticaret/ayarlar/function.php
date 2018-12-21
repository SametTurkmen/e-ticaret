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