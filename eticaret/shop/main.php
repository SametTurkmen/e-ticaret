<?php
session_start();
define('isLogin', isset($_SESSION['id'])?true:false);

require_once '../ayarlar/baglanti.php';
require_once '../ayarlar/function.php';