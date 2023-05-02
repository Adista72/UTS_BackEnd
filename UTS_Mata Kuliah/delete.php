<?php
    $kode_matkul = $_GET['kode_matkul'];
    include "koneksi.php";

    $qry = "DELETE FROM matkul WHERE kode_matkul = '$kode_matkul' ";
    $exes =mysqli_query($con, $qry);

    if($exes){
        echo "<script>alert('Data berhasil dihapus'); window.location = 'index.php'</script>";
    } else {
        echo "Data gagal dihapus";
    }
