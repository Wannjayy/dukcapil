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
$query = "SELECT * FROM Users WHERE email=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Pengguna ditemukan, ambil hashedPassword dan NIK dari database
    $row = $result->fetch_assoc();
    $hashedPasswordFromDatabase = $row['password'];
    $nik = $row['nik'];
    $nama = $row['nama'];

    // Verifikasi password
    if (password_verify($password, $hashedPasswordFromDatabase)) {
        // Password cocok, berikan akses
        session_start();
        $_SESSION['login_success'] = true; // Gunakan session untuk menyimpan status login
        $_SESSION['nik'] = $nik; // Simpan NIK dalam session
        $_SESSION['nama'] = $nama; 
        header("Location: home.php?login=success");
        exit();
    } else {
        // Password tidak cocok, berikan pesan kesalahan
        header("Location: index.php?login=failed");
        exit();
    }
} else {
    // Pengguna tidak ditemukan, berikan pesan kesalahan
    header("Location: index.php?login=failed");
    exit();
}

// Tutup koneksi database
$conn->close();
?>
