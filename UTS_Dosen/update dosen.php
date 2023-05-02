<?php

$id_dosen = $_POST ['id_dosen'];
$nama = $_POST ['nama'];
$jenis_kelas = $_POST ['jenis_kelas'];
$gender = $_POST ['gender'];
$alamat = $_POST ['alamat'];
$no_hp = $_POST ['no_hp'];
$email = $_POST ['email'];
$tanggal_lahir = $_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal_lahir'];

include "koneksi.php";

   $qry = "UPDATE dosen SET
    nama = '$nama',
    jenis_kelas = '$jenis_kelas',
    gender = '$gender',
    alamat = '$alamat',
    no_hp = '$no_hp',
    email = '$email',
    tanggal_lahir = '$tanggal_lahir'
    WHERE id_dosen = '$id_dosen'
    ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal disimpan";
}

