<?php 
include 'koneksi.php';

$nidn = $_GET['id_dosen'];
$qry = "DELETE FROM dosen WHERE id_dosen='$id_dosen'";
$exec = mysqli_query($con, $qry);
 

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal dihapus";
}