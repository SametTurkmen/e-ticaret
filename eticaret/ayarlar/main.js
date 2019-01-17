$("#kisiEkleBtn").on("click",function () {
    var data = $("#kisiEkleForm").serialize();//içerisindeki bütün değerleri almak için
    //console.log(data);
    $.ajax({ //sayfa yenilenmeden işlem yapmak için
        url: "../ayarlar/islem.php?islem=kisiEkle",
        type:"POST",
        data:data,
        success : function (cevap) {
            $("#kisiEkleAlert").html(cevap).hide().fadeIn(700);
        }
    });
});

$("#login").on("click",function () {
    var data = $("#loginForm").serialize();
    $.ajax({ //sayfa yenilenmeden işlem yapmak için
        url: "../ayarlar/islem.php?islem=login",
        type:"POST",
        data:data,
        success : function (cevap) {
            $("#loginAlert").html(cevap).hide().fadeIn(700);
        }
    });
});


$("#kisiGuncelle").on("click",function () {
    var data = $("#kisiGuncelleForm").serialize();
    $.ajax({ //sayfa yenilenmeden işlem yapmak için
        url: "../ayarlar/islem.php?islem=kisiGuncelle",
        type:"POST",
        data:data,
        success : function (cevap) {
            $("#kisiGuncelleAlert").html(cevap).hide().fadeIn(700);
        }
    });
});

$("#sepeteEkle").on("click",function () {
    var data = $("#sepeteEkleForm").serialize();
    $.ajax({ //sayfa yenilenmeden işlem yapmak için
        url: "../ayarlar/islem.php?islem=sepeteEkle",
        type:"POST",
        data:data,
        success : function (cevap) {
            $("#sepeteEkleAlert").html(cevap).hide().fadeIn(700);
        }
    });
});
