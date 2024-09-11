<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD STUDY GROUP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-4">
            <h1 align="center">STUDY GROUP PERTEMUAN 1 <br> <span><</span> KSL-UNG <span>></span> 
            </h1>
            <a href="tambah.php" class="btn btn-primary mt-3">Tambah</a>
            <a href="cetak.php" class="btn btn-success mt-3">cetak</a>
            <table class="table table-bordered table-hover table-striped mt-3">
                <tr class="table-dark">
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>


                <?php
                $query = "SELECT * FROM mhs";
                $result = mysqli_query($conn, $query);
                $no = 0;
                while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <?php $no++ ?>
                        <td><?= $no ?></td>
                        <td><?= $r['nim']; ?></td>
                        <td><?= $r['nama']; ?></td>
                        <td><?= $r['jk'] == "l" ? "Laki-laki" : "Perempuan"; ?></td>
                        <td><?= $r['alamat']; ?></td>
                        <td align="center">
                            <a href="ubah.php?nim=<?= $r['nim']?>" class="btn btn-warning">ubah</a>
                            <a href="hapus.php?nim=<?= $r['nim'] ?>" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
   
</body>

</html>
