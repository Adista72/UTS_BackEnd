<?php

$kode_matkul = $_POST ['kode_matkul'];
$nama_matkul = $_POST ['nama_matkul'];
$time_matkul = $_POST ['time_matkul'];
$metode = $_POST ['metode'];
$nama_dsn = $_POST ['nama_dsn'];

include "koneksi.php";

   $qry =   "UPDATE matkul SET
            nama_matkul = '$nama_matkul',
            time_matkul = '$time_matkul',
            metode = '$metode',
            nama_dsn = '$nama_dsn'
            WHERE kode_matkul = '$kode_matkul'
            ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location ='index.phy';</script>";
}else{
    echo "Data gagal diupdate";
}

