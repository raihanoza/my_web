<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web_lanjut_c1";
  return mysqli_connect($server, $username, $password, $database);
}

function produk()
{
  return mysqli_query(koneksi(), "SELECT * FROM produk");
}
