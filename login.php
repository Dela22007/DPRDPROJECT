<?php
session_start(); // Mulai sesi

// Termasuk file koneksi ke database
include('koneksi.php');

// Inisialisasi variabel error message
$error_message = "";

// Menangani saat form login dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pastikan input ada di $_POST sebelum mengaksesnya
    if (isset($_POST['nip']) && isset($_POST['password'])) {
        $nip = mysqli_real_escape_string($conn, $_POST['nip']); // NIP yang dimasukkan
        $enteredPassword = mysqli_real_escape_string($conn, $_POST['password']); // Password yang dimasukkan

        // Query untuk mengambil data pengguna berdasarkan NIP
        $sql = "SELECT * FROM users WHERE nip = '$nip'";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc(); // Mengambil data pengguna

            // Memverifikasi password yang dimasukkan dengan hash yang ada di database
            if (password_verify($enteredPassword, $user['password'])) {
                // Jika password cocok, simpan data pengguna di sesi
                $_SESSION['user_id'] = $user['id']; // Simpan id pengguna
                $_SESSION['nama'] = $user['nama'];  // Simpan nama pengguna
                $_SESSION['nip'] = $user['nip'];    // Simpan nip pengguna
                $_SESSION['peran'] = $user['peran'];  // Simpan peran pengguna (admin/user)

                // Mengarahkan pengguna ke halaman yang sesuai berdasarkan perannya
                if ($user['peran'] == 'admin') {
                    header("Location: index.php"); // Halaman untuk admin
                } else {
                    header("Location: menuuser.php");  // Halaman untuk user
                }
                exit();
            } else {
                // Jika password tidak cocok
                $error_message = "NIP atau password salah!";
            }
        } else {
            // Jika pengguna tidak ditemukan
            $error_message = "NIP atau password salah!";
        }
    } else {
        $error_message = "Harap isi semua form!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekretariat Dewan Perwakilan Rakyat Daerah Provinsi Sulawesi Tenggara</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="img/logosultra.png"
      type="image/x-icon"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #e6f2ff 0%,rgb(11, 122, 232) 100%);
        }

        .page-container {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 90px;
            height: 90px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .logo img {
            max-width: 50px;
            max-height: 50px;
        }

        .header-text {
            color: white;
            font-weight: 600;
            text-align: left;
        }

        .header-text h3 {
            font-size: 2rem;
            margin-bottom: 3px;
        }

        .header-text p {
            font-size: 1rem;
            opacity: 0.8;
        }

        .wrapper {
            width: 350px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease;
        }

        .wrapper:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 2rem;
            letter-spacing: 0.8px;
        }

        .input-field {
            position: relative;
            margin: 20px 0;
        }

        .input-field input {
            width: 100%;
            height: 45px;
            border: 2px solid #3498db;
            border-radius: 8px;
            padding: 0 12px;
            font-size: 15px;
            color: #2c3e50;
            transition: all 0.3s ease;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            color: #7f8c8d;
            transition: all 0.3s ease;
            pointer-events: none;
            background: white;
            padding: 0 4px;
        }

        .input-field input:focus {
            outline: none;
            border-color: #2980b9;
        }

        .input-field input:focus ~ label,
        .input-field input:not(:placeholder-shown) ~ label {
            top: -8px;
            left: 8px;
            font-size: 11px;
            color: #2980b9;
            background: white;
            padding: 0 4px;
        }

        .input-field input:not(:placeholder-shown) {
            border-color: #3498db;
        }

        button {
            width: 100%;
            height: 45px;
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 16px;
        }

        button:hover {
            transform: scale(1.04);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .error-message {
            color: #e74c3c;
            background-color: #fadbd8;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .forget {
            display: flex;
            justify-content: space-between;
            margin: 16px 0;
            color: #2c3e50;
            font-size: 13px;
        }

        .forget a {
            color: #3498db;
            text-decoration: none;
        }

        .forget a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="page-container">
        <div class="header">
            <div class="logo-container">
                <div class="logo">
                    <img src="img/logosultra.png" alt="Logo Sulawesi Tenggara">
                </div>
                <div class="header-text">
                    <h3>Sekretariat Daerah</h3>
                    <p>Provinsi Sulawesi Tenggara</p>
                </div>
            </div>
        </div>
        
        <div class="wrapper">
            <form action="login.php" method="POST">
                <h2>Login</h2>

                <!-- Menampilkan pesan error jika ada -->
                <?php if (!empty($error_message)) { ?>
                    <div class="error-message"><?php echo $error_message; ?></div>
                <?php } ?>

                <div class="input-field">
                    <input type="text" id="nip" name="nip" required placeholder=" ">
                    <label>Enter Username (NIP)</label>
                </div>
                <div class="input-field">
                    <input type="password" id="password" name="password" required placeholder=" ">
                    <label>Enter Password</label>
                </div>
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>