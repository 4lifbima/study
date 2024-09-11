<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mb-5 mt-5">
            <h2>Tambah data</h2>
        </div>
        <form action="proses_tambah.php" method="POST" class="form-group">
            <div class="mb-3">
                <label  class="form-label">NIM</label>
                <input type="number" name="nim" class="form-control" placeholder="Masukan Nim" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jk" class="form-control">
                    <option value="l">Laki-laki</option>
                    <option value="p">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea type="text" name="alamat" class="form-control"></textarea>
            </div>

            <div class="container" align="right">
                <button name="simpan" type="submit" class="btn btn-primary">Iyo</button>
                <a href="index.php" class="btn btn-danger">Kambali Jho</a>
            </div>
        </form>
    </div>
</body>

</html>