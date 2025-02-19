<?php
// Sertakan file koneksi database
include('koneksi.php');

// Periksa apakah parameter ID ada
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redirect dengan pesan error jika ID tidak ada
    header('Location: manajemenpengguna.php?error=ID tidak valid');
    exit();
}

// Ambil ID pengguna dari parameter URL
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Periksa apakah ID ada di database
$check_query = "SELECT id FROM users WHERE id = ?";
$check_stmt = $conn->prepare($check_query);
$check_stmt->bind_param("i", $id);
$check_stmt->execute();
$result = $check_stmt->get_result();

if ($result->num_rows === 0) {
    // Redirect dengan pesan error jika ID tidak ditemukan
    header('Location: manajemenpengguna.php?error=Pengguna tidak ditemukan');
    exit();
}

// Siapkan query DELETE dengan prepared statement
$delete_query = "DELETE FROM users WHERE id = ?";
$delete_stmt = $conn->prepare($delete_query);
$delete_stmt->bind_param("i", $id);

// Eksekusi query
if ($delete_stmt->execute()) {
    // Redirect dengan pesan sukses
    header('Location: manajemenpengguna.php?success=Pengguna berhasil dihapus');
} else {
    // Redirect dengan pesan error jika gagal
    header('Location: manajemenpengguna.php?error=Gagal menghapus pengguna: ' . $conn->error);
}

// Tutup prepared statements
$check_stmt->close();
$delete_stmt->close();

// Tutup koneksi database
$conn->close();
?>