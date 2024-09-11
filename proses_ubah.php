<?php 

include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$almat = $_POST['alamat'];

$query = "UPDATE mhs SET nama='$nama', jk='$jk', alamat='$almat'";
$query .= "WHERE nim = '$nim'";
$result = mysqli_query($conn, $query);

if (!$result){
    die ("Query Gagal dijalankan: ".mysqli_errno($conn));
} else {
    header("location: index.php");
}