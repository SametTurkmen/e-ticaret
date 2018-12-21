<?
require_once '../ayarlar/baglanti.php';
?>
<aside class="col-md-3 col-md-pull-9">
    <div class="home-side-menu-container">
        <h2 class="side-menu-title">KATEGORİLER</h2>
        <ul class="home-side-menu">
            <?
            $veri= $db ->prepare("SELECT * FROM kategoriler WHERE kategori_durum='1 '");
            $veri -> execute(array());
            $v= $veri->fetchAll(PDO::FETCH_ASSOC);
            foreach ($v as $kategoriler) {

            ?>
            <li><a href="#"><? echo $kategoriler['kategori_title'];?></a></li>
            <? } ?>
            <!--<li>
                <a href="contact-us.php">Bize Ulaşın &nbsp;<span class="fa fa-phone"></span>
                </a>
            </li> -->
        </ul>
    </div>
</aside>