 <?php
include '../config/koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id']; 
    $query = mysqli_query($koneksi, "DELETE FROM menu WHERE id = $id");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Gagal menghapus data. Silakan coba lagi.</div>";
    }
} else {
    echo "<div class='alert alert-danger'>ID tidak ditemukan atau tidak valid.</div>";
}
?>