<?php
include "koneksi.php";


$nim = $_GET['nim'];

$query = "SELECT * FROM mhs WHERE nim='$nim'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Ubah Data</h2>
        <form action="proses_ubah.php" method="POST" class="form-group">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" name="nim" class="form-control" value="<?= $row['nim']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" class="form-control">
                    <option value="l" <?= $row['jk'] == "l" ? "selected" : ""; ?>>Laki-laki</option>
                    <option value="p" <?= $row['jk'] == "p" ? "selected" : ""; ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required><?= $row['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-secondary">Malas !</a>
        </form>
    </div>
</body>
</html>
