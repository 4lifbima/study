<?php 
$conn = new mysqli("localhost", "root", "", "sg1");

if (!$conn){
    echo "<script>alert('Database Gagal terhubung');</script>";
}
