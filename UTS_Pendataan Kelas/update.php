<?php

$id_siswa = $_POST ['id_siswa'];
$nama_siswa = $_POST ['nama_siswa'];
$id_kelas = $_POST ['id_kelas'];

include "koneksi.php";

    $qry = "UPDATE pendataan SET
            nama_siswa = '$nama_siswa',
            id_kelas = '$id_kelas'
            WHERE id_siswa = '$id_siswa'
            ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal disimpan";
}

