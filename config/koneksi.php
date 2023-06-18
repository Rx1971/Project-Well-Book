<?php
// Informasi koneksi ke database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_well_book";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika koneksi berhasil
echo "Koneksi ke database berhasil";

// Menutup koneksi
mysqli_close($conn);
?>
