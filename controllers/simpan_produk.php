<?php
require "../model/functions.php";

$kode_produk = $_POST["kode_produk"];
$nama_produk = $_POST["nama_produk"];
$jenis_produk = $_POST["jenis_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];

$hari_ini = date("Y-m-d H:i:s");

$simpan = mysqli_query(
  koneksi(),
  "INSERT INTO produk VALUES(null,
  '$kode_produk',
  '$nama_produk',
  '$jenis_produk',
  '$harga',
  '$stok',
  '$hari_ini','$hari_ini')"
);
if ($simpan) {
  echo "berhasil";
} else {
  echo "gagal";
}
