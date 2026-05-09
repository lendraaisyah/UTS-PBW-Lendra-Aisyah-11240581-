<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])) { header("Location: login.php"); }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fff5f7; font-family: 'Poppins', sans-serif; }
        .navbar { background-color: #ffb6c1 !important; }
        .card { border-radius: 15px; border: none; }
        .btn-pink { background-color: #ff69b4; color: white; border-radius: 20px; }
        .btn-pink:hover { background-color: #ff1493; color: white; }
        .table-aesthetic { background-color: white; border-radius: 15px; overflow: hidden; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm px-4">
    <a class="navbar-brand fw-bold" href="#">🌸 SiswaPinky Admin</a>
    <div class="ms-auto">
        <a href="logout.php" class="btn btn-sm btn-light text-pink" style="color: #ff69b4;">Logout</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: #ff69b4;">Data Nilai Siswa ✨</h2>
        <a href="tambah.php" class="btn btn-pink px-4">+ Tambah Data</a>
    </div>

    <div class="table-responsive shadow-sm table-aesthetic">
        <table class="table table-hover mb-0">
            <thead style="background-color: #ffb6c1; color: white;">
                <tr>
                    <th>NIS</th><th>Nama Siswa</th><th>Tugas</th><th>UTS</th><th>UAS</th><th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM siswa");
                while($d = mysqli_fetch_array($sql)){
                    echo "<tr>
                        <td>{$d['nis']}</td>
                        <td>{$d['nama_siswa']}</td>
                        <td>{$d['nilai_tugas']}</td>
                        <td>{$d['nilai_uts']}</td>
                        <td>{$d['nilai_uas']}</td>
                        <td>
                            <a href='edit.php?id={$d['id']}' class='btn btn-sm btn-outline-warning'>Edit</a>
                            <a href='hapus.php?id={$d['id']}' class='btn btn-sm btn-outline-danger' onclick='return confirm(\"Yakin ingin hapus data ini?\")'>Hapus</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>