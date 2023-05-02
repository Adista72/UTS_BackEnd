<?php
    $kode_matkul = $_GET['kode_matkul'];
    include "koneksi.php";

    $qry = "SELECT * FROM matkul WHERE kode_matkul = '$kode_matkul' ";
    $exes =mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exes);

?>

<form action="update.php" method="post">
        <fieldset>
            <legend>Form input Mata Kuliah</legend>
            <h2>Input Mata Kuliah</h2>
            <table>
                <tr>
                    <td>Kode Mata Kuliah</td>
                    <td>:</td>
                    <td><input type="text" name="kode_matkul"></td>
                </tr>
                <tr>
                    <td>Nama Mata Kuliah</td>
                    <td>:</td>
                    <td><input type="text" name="nama_matkul"></td>
                </tr>
                <tr>
                    <td>Durasi Pembelajaran</td>
                    <td>:</td>
                    <td><select name="time_matkul">
                            <option value="001">Extra Time</option>
                            <option value="002">1 Jam Pembelajaran</option>
                            <option value="004">2 Jam Pembelajaran</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Metode Pembelajaran</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="metode" value="1"> Online
                        <input type="radio" name="metode" value="0"> Offline
                    </td>
                </tr>
                <tr>
                    <td>Dosen Pembimbing</td>
                    <td>:</td>
                    <td><input type="text" name="nama_dsn"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>