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
