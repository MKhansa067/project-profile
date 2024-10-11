<?php
// Sertakan file koneksi database
include 'includes/db_connect.php';

// Cek apakah form sudah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Siapkan pernyataan SQL untuk memasukkan data ke tabel contacts
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    // Eksekusi pernyataan SQL dan cek jika berhasil
    if ($conn->query($sql) === TRUE) {
        // Setelah sukses, arahkan kembali ke contact.php dengan query string success=true
        header("Location: contact.php?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "Invalid request method.";
}
