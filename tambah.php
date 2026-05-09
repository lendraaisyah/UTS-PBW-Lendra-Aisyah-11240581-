<?php
include "koneksi.php";

// Logika Simpan: Jika tombol 'simpan' ditekan
if (isset($_POST['simpan'])) {
    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $tugas  = $_POST['tugas'];
    $uts    = $_POST['uts'];
    $uas    = $_POST['uas'];

    $query = mysqli_query($koneksi, "INSERT INTO siswa (nis, nama_siswa, nilai_tugas, nilai_uts, nilai_uas) 
              VALUES ('$nis', '$nama', '$tugas', '$uts', '$uas')");

    if ($query) {
        echo "<script>alert('Data Berhasil Disimpan! 🌸'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data - Pink Aesthetic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #fff5f7;">
    <div class="container mt-5">
        <div class="card p-4 shadow-sm border-0" style="border-radius: 20px;">
            <h3 style="color: #ff69b4;" class="mb-4 text-center">Tambah Nilai Siswa 🎀</h3>
            <form action="" method="POST">
                <div class="mb-3"><label>NIS</label><input type="text" name="nis" class="form-control" required></div>
                <div class="mb-3"><label>Nama Siswa</label><input type="text" name="nama" class="form-control" required></div>
                <div class="row">
                    <div class="col-4"><label>Tugas</label><input type="number" name="tugas" class="form-control"></div>
                    <div class="col-4"><label>UTS</label><input type="number" name="uts" class="form-control"></div>
                    <div class="col-4"><label>UAS</label><input type="number" name="uas" class="form-control"></div>
                </div>
                <button type="submit" name="simpan" class="btn w-100 mt-4" style="background-color: #ff69b4; color: white;">Simpan Data ✨</button>
                <a href="index.php" class="btn btn-light w-100 mt-2">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>