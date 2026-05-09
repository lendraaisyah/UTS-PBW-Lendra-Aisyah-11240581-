<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])) { header("Location: login.php"); }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar { background-color: #ffc0cb !important; }
        .table-pink { --bs-table-bg: #fff0f5; }
        .btn-pink { background-color: #ff69b4; color: white; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light px-4">
    <a class="navbar-brand text-white fw-bold" href="#">🌸 Pinky Academy</a>
    <div class="ms-auto">
        <span class="me-3">Hello, <?php echo $_SESSION['username']; ?>!</span>
        <a href="logout.php" class="btn btn-sm btn-outline-danger">Logout</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="card p-4 shadow-sm border-0">
        <h4 style="color: #ff69b4;">Tambah Nilai Siswa</h4>
        <form action="proses_simpan.php" method="POST" class="row g-3">
            <div class="col-md-3"><input type="text" name="nis" class="form-control" placeholder="NIS" required></div>
            <div class="col-md-3"><input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required></div>
            <div class="col-md-2"><input type="number" name="tugas" class="form-control" placeholder="Tugas" required></div>
            <div class="col-md-2"><input type="number" name="uts" class="form-control" placeholder="UTS" required></div>
            <div class="col-md-2"><button type="submit" class="btn btn-pink w-100">Simpan 💖</button></div>
        </form>
    </div>

    <div class="mt-4">
        <table class="table table-hover table-pink rounded overflow-hidden">
            <thead class="table-dark" style="background-color: #ff69b4; border: none;">
                <tr>
                    <th>NIS</th><th>Nama</th><th>Tugas</th><th>UTS</th><th>Aksi</th>
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
                        <td>
                            <a href='edit.php?id={$d['id']}' class='btn btn-sm btn-warning'>Edit</a>
                            <a href='hapus.php?id={$d['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Hapus?\")'>Hapus</a>
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