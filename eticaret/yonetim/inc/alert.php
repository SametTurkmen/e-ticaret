<?php
if (g('silme')=='ok'){
    echo "<div class='alert alert-success'>Silme işlemi gerçekleşti, yönetime devam edebilirsiniz.</div>";
}elseif (g('silme')=='no'){
    echo "<div class='alert alert-danger'>Silme işlemi sırasında hata meydana geldi.</div>";
}elseif (g('ekle')=='ok'){
    echo "<div class='alert alert-success'>Ekleme işlemi gerçekleşti, yönetime devam edebilirsiniz.</div>";
}elseif (g('ekle')=='no') {
    echo "<div class='alert alert-danger'>Ekleme işlemi sırasında hata meydana geldi.</div>";
}
