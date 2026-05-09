<?php
include "koneksi.php";
$id = $_GET['id'];

// Ambil data lama
$query_ambil = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$data = mysqli_fetch_array($query_ambil);

// Logika Update: Jika tombol 'update' ditekan
if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $tugas  = $_POST['tugas'];
    $uts    = $_POST['uts'];
    $uas    = $_POST['uas'];

    $query_update = mysqli_query($koneksi, "UPDATE siswa SET 
                      nama_siswa = '$nama', nilai_tugas = '$tugas', 
                      nilai_uts = '$uts', nilai_uas = '$uas' WHERE id = '$id'");

    if ($query_update) {
        echo "<script>alert('Data Berhasil Diperbarui! ✨'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #fff5f7;">
    <div class="container mt-5">
        <div class="card p-4 shadow-sm border-0" style="border-radius: 20px;">
            <h3 style="color: #ff69b4;" class="text-center">Edit Nilai Siswa 📝</h3>
            <form action="" method="POST">
                <div class="mb-3"><label>Nama Siswa</label><input type="text" name="nama" class="form-control" value="<?= $data['nama_siswa'] ?>"></div>
                <div class="row">
                    <div class="col-4"><label>Tugas</label><input type="number" name="tugas" class="form-control" value="<?= $data['nilai_tugas'] ?>"></div>
                    <div class="col-4"><label>UTS</label><input type="number" name="uts" class="form-control" value="<?= $data['nilai_uts'] ?>"></div>
                    <div class="col-4"><label>UAS</label><input type="number" name="uas" class="form-control" value="<?= $data['nilai_uas'] ?>"></div>
                </div>
                <button type="submit" name="update" class="btn w-100 mt-4" style="background-color: #ff69b4; color: white;">Update Data</button>
                <a href="index.php" class="btn btn-light w-100 mt-2">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>