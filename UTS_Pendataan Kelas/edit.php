<?php
    $id_siswa = $_GET['id_siswa'];
    include "koneksi.php";

    $qry = "SELECT * FROM pendataan WHERE id_siswa = '$id_siswa' ";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

?>

<form action="update.php" method="post">
        <fieldset>
            <legend>Form input Mata Kuliah</legend>
            <h2>Input Mata Kuliah</h2>
            <table>
                <tr>
                    <td>ID Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="id_siswa"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_siswa"></td>
                </tr>
                <tr>
                    <td>ID Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="id_kelas"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>