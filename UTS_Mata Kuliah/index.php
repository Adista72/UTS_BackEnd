<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS</title>
</head>

<body>
    <form action="proses.php" method="post">
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
    
    <table style="width: 100%; border: 1px solid black;" >
        <tr>
            <td>Kode Mata Kuliah</td>
            <td>Nama Mata Kuliah</td>
            <td>Durasi Pembelajaran</td>
            <td>Metode Pembelajaran</td>
            <td>Dosen Pembimbing</td>
            <td>Act</td>
        </tr>
        <?php
            include "koneksi.php"; 
            $qry = "SELECT * FROM matkul";
            $exes = mysqli_query($con, $qry);

            while ($data = mysqli_fetch_assoc($exes)){
        ?>
        <tr>
                <td><?= $data['kode_matkul'] ?></td>
                <td><?= $data['nama_matkul'] ?></td>
                <td><?= $data['time_matkul'] ?></td>
                <td><?= $data['metode'] == 1? "Online" : "Offline"  ?></td>
                <td><?= $data['nama_dsn'] ?></td>
                <td>
                    <a href="edit.php?kode_matkul=<?= $data['kode_matkul'] ?>"><button>Edit</button></a>
                    <a href="delete.php?kode_matkul=<?= $data['kode_matkul'] ?>"><button>Delete</button></a>
                </td>

        </tr>
        <?php } ?>
    </table>
    
</body>

</html>