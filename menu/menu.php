<!DOCTYPE html>
<html>
<head>
  <title>Menu Cafetaria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   body {
      background: url('../gambar/mbl.jpg');
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      background: white;
      padding: 40px;
      margin-top: 40px;
    }

    h2 {
      font-weight: bold;
      color:rgb(30,58,138);
      text-align: center;
    }
    
    table th, table td {
      text-align: center;
      vertical-align: middle;
    }

</style>
<body>
<?php include '../config/koneksi.php'; ?>


<div class="container">
  <h2 class="mb-4">Menu Cafetaria</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Menu</a>
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>nama menu</th>
        <th>harga</th>
        <th>deskripsi</th>
        <th>stok</th>
        <th>action</th>      
      </tr>
    </thead>
    <tbody>
    <?php
     $result = mysqli_query($koneksi, "SELECT * FROM menu");
     $no = 1; while($row = mysqli_fetch_assoc($result)): ?>
       <tr>
         <td><?php echo $no++; ?></td>
         <td><?php echo $row['nama_menu']; ?></td>
         <td><?php echo $row['harga']; ?></td>
         <td><?php echo $row['deskripsi']; ?></td>
         <td><?php echo $row['stok']; ?></td>
         <td>
           <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
           <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
         </td>
       </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>
