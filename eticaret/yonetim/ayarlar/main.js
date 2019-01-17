$("#kategoriEkleBtn").on("click",function () {
    var datakategori = $("#kategoriEkleForm").serialize();//içerisindeki bütün değerleri almak için
   // console.log(datakategori);
    $.ajax({ //sayfa yenilenmeden işlem yapmak için
        url: "ayarlar/islem.php?islem=kategoriEkle",
        type:"POST",
        data:datakategori,
        success : function (cevap) {
            $("#kategoriEkleAlert").html(cevap).hide().fadeIn(700);
        }
        });
});

$("#kategoriGuncelleBtn").on("click",function () {
    var datakategori = $("#kategoriGuncelleForm").serialize();//içerisindeki bütün değerleri almak için
    // console.log(datakategori);
    $.ajax({ //sayfa yenilenmeden işlem yapmak için
        url: "ayarlar/islem.php?islem=kategoriGuncelle",
        type:"POST",
        data:datakategori,
        success : function (cevap) {
            $("#kategoriGuncelleAlert").html(cevap).hide().fadeIn(700);
        }
    });
});

$("#yGiris").on("click",function () {
    var datakategori = $("#yGirisForm").serialize();//içerisindeki bütün değerleri almak için
   // console.log(datakategori);
    $.ajax({ //sayfa yenilenmeden işlem yapmak için
        url: "ayarlar/islem.php?islem=yGiris",
        type:"POST",
        data:datakategori,
        success : function (cevap) {
            $("#yGirisAlert").html(cevap).hide().fadeIn(700);
        }
    });
});

$(document).keypress(function(e){ // 'Enter' ile giriş işlemi için
    if (e.which == 13){
        $("#yGiris").click();
    }
});


function ParaFormat(Num) {
    Num += '';
    Num = Num.replace('.', ''); Num = Num.replace('.', ''); Num = Num.replace('.', '');
    Num = Num.replace('.', ''); Num = Num.replace('.', ''); Num = Num.replace('.', '');
    x = Num.split(',');
    x1 = x[0];
    x2 = x.length > 1 ? ',' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    return x1 + x2;
}

$("#urunEkleBtn").on("click",function () {
    var data = new FormData($('#urunEkleForm')[0]);
    $.ajax({
        url: "ayarlar/islem.php?islem=urunEkle",
        type :"POST",
        data :data,
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (cevap) {
            $("#urunEkleAlert").html(cevap).hide().fadeIn(700);
        }
    });
});

$("#urunGuncelleBtn").on("click",function () {
    var data = new FormData($('#urunGuncelleForm')[0]);
    $.ajax({
        url: "ayarlar/islem.php?islem=urunGuncelle",
        type :"POST",
        data :data,
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (cevap) {
            $("#urunGuncelleAlert").html(cevap).hide().fadeIn(700);
        }
    });
});