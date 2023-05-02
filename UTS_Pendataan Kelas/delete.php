<?php 
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$qry = "DELETE FROM pendataan WHERE id_siswa='$id_siswa'";
$exec = mysqli_query($con, $qry);
 

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal dihapus";
}