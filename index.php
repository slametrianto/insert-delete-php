<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil dr tabel mahasiswa / query
//mengambil data semua mahasiswa select
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fecth) mahasiswa dari object result
//mysqli_fecth_row() mengembalikkan array numerik
//mysqli_fecth_assoc() mengembalikkan nilai associative
//mysqli_fecth_array() mengembalikkan nilai assoc dan row 

// while ($mhs = mysqli_fetch_assoc($result)) {

//     var_dump($mhs["nama"]);
// }

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

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <br>

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
            <?php while ($row =  mysqli_fetch_assoc($result)) : ?>

                <td><?php echo $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"];  ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"];  ?>" width="50"></td>
                <td><?php echo $row["nrp"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>

    <?php endwhile; ?>

    </table>
</body>

</html>