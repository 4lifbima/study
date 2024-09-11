<?php 

include "koneksi.php";

if(isset($_POST['simpan'])){

    $simpan = mysqli_query($conn, "INSERT INTO mhs (nim, nama, jk, alamat)
    VALUES ('$_POST[nim]',
            '$_POST[nama]',
            '$_POST[jk]',
            '$_POST[alamat]')");
}
if ($simpan){
    header("location: index.php");
}else{
    echo    "<script>alert('Data gagal');</script>";
}