<?php
// Kode untuk menghubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dukcapil";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir signup
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['signup-email'];
$password = $_POST['signup-password'];

// Hash kata sandi sebelum disimpan ke dalam database
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Query untuk memeriksa apakah email sudah digunakan sebelumnya
$emailCheckQuery = "SELECT * FROM Users WHERE email='$email'";
$emailCheckResult = $conn->query($emailCheckQuery);

if ($emailCheckResult->num_rows > 0) {
    // Email sudah terdaftar, berikan pesan kesalahan
    echo "Email sudah digunakan. Silakan gunakan email lain.";
} else {
    // Email belum terdaftar, lanjutkan proses pendaftaran
    $insertQuery = "INSERT INTO Users (nik, nama, email, password) VALUES ('$nik', '$nama', '$email', '$hashedPassword')";

    if ($conn->query($insertQuery) === TRUE) {
        // Pendaftaran berhasil
        header("Location: home.php?signup=success");
        exit();
    } else {
        // Terjadi kesalahan saat memasukkan data ke database
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>
