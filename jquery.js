$("#isi_halaman").load("views/beranda.php")

$(".halaman").click(function(){
    var halaman = $(this).attr("halaman")
    if (halaman == "beranda") {
        $("#isi_halaman").load("views/beranda.php")
    }else if (halaman == "produk") {
        $("#isi_halaman").load("views/produk.php")
    }else if (halaman == "jenis_produk") {
        $("#isi_halaman").load("views/jenis_produk.php")
    }
})