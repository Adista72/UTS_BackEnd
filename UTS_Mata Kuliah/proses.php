<?php

$kode_matkul = $_POST ['kode_matkul'];
$nama_matkul = $_POST ['nama_matkul'];
$time_matkul = $_POST ['time_matkul'];
$metode = $_POST ['metode'];
$nama_dsn = $_POST ['nama_dsn'];

include "koneksi.php";

   $qry = "INSERT INTO matkul VALUES (
    '$kode_matkul', '$nama_matkul', '$time_matkul', '$metode', '$nama_dsn'
   )";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location ='index.php';</script>";
}else{
    echo "Data gagal disimpan";
}

