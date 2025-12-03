<?php
include '../config/koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   $nama_menu = $_POST['nama_menu'];
   $harga = $_POST['harga'];
   $deskripsi = $_POST['deskripsi'];
   $stok = $_POST['stok'];
  mysqli_query($koneksi,"INSERT INTO menu(
    nama_menu, harga, deskripsi, stok
    ) VALUES ('$nama_menu', '$harga', '$deskripsi', '$stok')");
    header('location:index.php');
     exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Tambah Data Pemilik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .form-container {
      padding: 40px;
      max-width: 700px;
      margin: 60px auto;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
      color: rgb(30, 58, 138);
    }
  </style>
</head>
<body>
    <div class="form-container">
  <h2>Tambah Data Menu</h2>
  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Nama Menu</label>
      <input type="text" name="nama_menu" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Harga</label>
      <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <textarea name="deskripsi" class="form-control" rows="3"></textarea>
    </div>
     <div class="mb-3">
      <label class="form-label">Stok</label>
      <input type="number" name="stok" class="form-control" required>
    </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="index.php" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>
