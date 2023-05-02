<?php

    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $id_kelas = $_POST['id_kelas'];

    include "koneksi.php";

        $qry = "INSERT INTO pendataan VALUES ('$id_siswa', '$nama_siswa', '$id_kelas')";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location ='index.php';</script>";
}else{
    echo "Data gagal disimpan";
}
