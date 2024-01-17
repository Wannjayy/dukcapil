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

// Ambil data dari formulir login
$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk memeriksa keberadaan pengguna di database
$query = "SELECT * FROM Users WHERE email='$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Pengguna ditemukan, ambil hashedPassword dari database
    $row = $result->fetch_assoc();
    $hashedPasswordFromDatabase = $row['password'];

    // Verifikasi password
    if (password_verify($password, $hashedPasswordFromDatabase)) {
        // Password cocok, berikan akses
        echo "Login berhasil!";
    } else {
        // Password tidak cocok, berikan pesan kesalahan
        echo "Login gagal. Cek kembali email dan password Anda.";
    }
} else {
    // Pengguna tidak ditemukan, berikan pesan kesalahan
    echo "Login gagal. Cek kembali email dan password Anda.";
}
