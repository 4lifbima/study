<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="mt-4">
            <h1 align="center">STUDY GROUP PERTEMUAN 1 <br> KSL-UNG
            </h1>
            <table class="table table-bordered table-hover table-striped mt-3">
                <tr class="table-dark">
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
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
                    </tr>
                    <?php
                }
                ?>
                <script>
                    window.print();
                </script>
            </table>
        </div>
    </div>

</body>

</html>
