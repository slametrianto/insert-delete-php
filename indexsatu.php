<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nrp</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <tr>
            <?php foreach ($mahasiswa as $row) : ?>


                <td><?php echo $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/naruto.jpg" width="50"></td>
                <td><?php echo $row["nrp"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>

    <?php endforeach; ?>

    </table>
</body>

</html>