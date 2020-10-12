<?php
$host   = "sql206.epizy.com";
$user   = "epiz_26782438";
$psw    = "hT6H1AMH9z4";
$db_name = "epiz_26782438_Database2";
$koneksi = mysqli_connect($host, $user, $psw, $db_name);

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()) {
    echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
