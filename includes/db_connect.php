<?php
$servername = "localhost";  // Server database (biasanya localhost)
$username = "root";         // Username MySQL (default root di XAMPP)
$password = "";             // Password MySQL (default kosong di XAMPP)
$dbname = "contact_db";     // Nama database yang baru saja dibuat

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
