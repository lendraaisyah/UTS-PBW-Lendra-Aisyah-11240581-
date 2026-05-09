<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");
echo "<script>alert('Data Terhapus 🗑️'); window.location='index.php';</script>";
?>