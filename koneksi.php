<?php
// Konfigurasi untuk koneksi ke database
$servername = "localhost";  // Biasanya localhost untuk server lokal
$username = "root";         // Nama pengguna untuk database (default: root)
$password = "";             // Password untuk database (defaultnya kosong jika belum diubah)
$dbname = "dprdproject";     // Nama database yang Anda buat (misalnya dprproject)

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika berhasil, maka akan muncul pesan ini
// echo "Koneksi berhasil";

// Menutup koneksi setelah digunakan (boleh digunakan di bagian lain dari aplikasi)
?>
