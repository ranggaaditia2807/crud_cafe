<?php
$koneksi = new mysqli("localhost", "root", "", "crud_cafe");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>