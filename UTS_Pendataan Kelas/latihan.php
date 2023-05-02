<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <fieldset>
            <legend>Form Pendataan Kelas</legend>
            <h2>Lengkapi Data Dengan Benar</h2>
            <table>
                <tr>
                    <td>ID Siswa</td>
                    <td>:</td>
                    <td><input type="number" name="id_siswa"></td>
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
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
    <h2>Data Kelas</h2>
    <table style="width: 100%; border: 1px solid black;">
        <tr>
            <td>ID Siswa</td>
            <td>Nama Siswa</td>
            <td>ID Kelas</td>
            <td>Act</td>
        </tr>
        <?php
            include "koneksi.php"; 
            $qry = "SELECT * FROM pendataan";
            $exec = mysqli_query($con, $qry);

            while ($data = mysqli_fetch_assoc($exec)){
        ?>
        <tr>
                <td><?= $data['id_siswa'] ?></td>
                <td><?= $data['nama_siswa'] ?></td>
                <td><?= $data['id_kelas'] ?></td>
                <td>
                    <a href="edit.php?id_siswa=<?= $data['id_siswa'] ?>"><button>Edit</button></a>
                    <a href="delete.php?id_siswa=<?= $data['id_siswa'] ?>"><button>Delete</button></a>
                </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
    