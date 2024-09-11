<?php 

include "koneksi.php";

$nim = $_GET['nim'];

$query = "DELETE FROM mhs WHERE nim='$nim'";
$hasil= mysqli_query($conn, $query);


if (!$query){
    die ("Query Gagal dijalankan: ".mysqli_errno($conn));
} else {
    header("location: index.php");
}
