<?php

if(isset($_POST['submit'])){
    $id_dosen = $_POST['id_dosen'];
    $nama = $_POST['nama'];
    $jenis_kelas = $_POST['jenis_kelas'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];


    include "koneksi.php";

    $qry = "INSERT INTO dosen VALUES (
        '$id_dosen', '$nama', '$jenis_kelas', '$gender', '$alamat', '$no_hp', '$email', '$tanggal_lahir'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>alert('Data berhasil disimpan, Jika ada kesalahan data silahkan edit data anda'); window.location = 'latihan.php';</script>";
    }else{
        echo "Data gagal disimpan";
    }
}

?>
