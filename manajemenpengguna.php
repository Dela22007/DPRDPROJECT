<?php
// Termasuk file koneksi ke database
include('koneksi.php');

// Menangani pencarian dan filter jika ada
$searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$roleFilter = isset($_GET['role']) ? $_GET['role'] : 'all';
$statusFilter = isset($_GET['status']) ? $_GET['status'] : 'all';

// Membuat query untuk mengambil data pengguna sesuai filter
$sql = "SELECT * FROM users WHERE nama LIKE '%$searchTerm%'";

// Menambah filter berdasarkan role
if ($roleFilter != 'all') {
    $sql .= " AND role = '$roleFilter'";
}

// Menambah filter berdasarkan status
if ($statusFilter != 'all') {
    $sql .= " AND status = '$statusFilter'";
}

// Menjalankan query dan menyimpan hasilnya dalam variabel $result
$result = $conn->query($sql);

// Pastikan Anda memeriksa apakah query berhasil
if (!$result) {
    die('Query Error: ' . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <style>
        .page-title {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.table-container {
    max-height: 400px;
    overflow-y: auto;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.table {
    font-size: 1rem;
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 0;
}

.table th, .table td {
    padding: 15px;
    text-align: left;
    border: 1px solid #ddd;
}

.table th {
    position: sticky;
    top: 0;
    background-color: #f8f9fa;
    z-index: 1;
    font-weight: 600;
}

.table-bordered {
    border: 1px solid #ddd;
}

.table-striped tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.table-hover tbody tr:hover {
    background-color: #e9ecef;
}

.btn {
    margin: 1px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: white;
    padding: 6px 12px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
    color: white;
    padding: 6px 12px;
    cursor: pointer;
}

.btn-danger:hover {
    background-color: #c82333;
}

.btn-success {
    background-color: #28a745;
    border: none;
    color: white;
    padding: 10px 20px;
}

.btn-success:hover {
    background-color: #218838;
}

.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

/* Custom scrollbar styling */
.table-container::-webkit-scrollbar {
    width: 8px;
}

.table-container::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.table-container::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.table-container::-webkit-scrollbar-thumb:hover {
    background: #555;
}

@media (max-width: 768px) {
    .table thead {
        display: none;
    }

    .table, .table tbody, .table tr, .table td {
        display: block;
        width: 100%;
    }

    .table td {
        text-align: right;
        position: relative;
        padding-left: 50%;
        border-bottom: 1px solid #ddd;
    }

    .table td:before {
        content: attr(data-label);
        position: absolute;
        left: 6px;
        font-weight: bold;
    }

    .table-container {
        max-height: none;
        overflow-y: visible;
    }
}
    </style>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img
                src="img/logosultra.png"
                alt="navbar brand"
                class="navbar-brand"
                height="50"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
            <li class="nav-item">
              <a href="index.php">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            </a>
              </li>
              
              <li class="nav-item active">
                <a href="manajemenpengguna.php">
                  <i class="fas fa-user"></i>
                  <p>Manajemen Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="analisisjabatan.php">
                  <i class="fas fa-tasks"></i>
                  <p>Analisis Jabatan</p>
                </a>
              </li>
             
              
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.php" class="logo">
                <img
                  src="img/logosultra.png"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
           
          <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
  <div class="container-fluid">
    <!-- Logo dan Teks -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="img/logosultra.png" alt="SIASN Logo" class="d-inline-block me-2" style="height: 50px; max-height: 50px;">
      <span style="font-weight: 1000; color:rgb(3, 36, 71);">SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH PROVINSI SULAWESI TENGGARA</span>
    </a>

    <!-- Navbar Item -->
    <ul class="navbar-nav ms-md-auto align-items-center">
      <!-- Tombol Pencarian (untuk tampilan mobile) -->
      <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
          <i class="fa fa-search"></i>
        </a>
        <ul class="dropdown-menu dropdown-search animated fadeIn">
          <form class="navbar-left navbar-form nav-search">
            <div class="input-group">
              <input type="text" placeholder="Search ..." class="form-control" />
            </div>
          </form>
        </ul>
      </li>
      
      <!-- Profile User Dropdown -->
      <li class="nav-item topbar-user dropdown hidden-caret">
        <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
          <!-- Flexbox untuk menempatkan ikon avatar dan nama pengguna -->
          <div class="d-flex align-items-center">
            <div class="avatar-sm me-2">
              <i class="fas fa-user-circle fa-3x"></i> <!-- Ikon pengguna -->
            </div>
          </div>
        </a>
        <!-- Dropdown menu untuk profile -->
        <ul class="dropdown-menu dropdown-user animated fadeIn">
  <div class="dropdown-user-scroll scrollbar-outer">
    <!-- Informasi Akun: Nama dan NIP -->
    <li class="dropdown-item">
      <div class="account-info">
        <p class="account-name fw-bold">
          <?php 
          if(isset($_SESSION['nama'])) {
            echo $_SESSION['nama']; // Menampilkan nama pengguna
          } else {
            echo "User";
          }
          ?>
        </p>
      </div>
    </li>
    <!-- Tombol Logout -->
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </div>
</ul>
      </li>
    </ul>
  </div>
</nav>

          <!-- End Navbar -->
           <br>
           <div class="container mt-1">
        <h1 class="page-title text-center mb-3" style="font-weight: 1000; color:rgb(3, 36, 71);">DAFTAR PENGGUNA</h1>

        <!-- Form Pencarian dan Filter -->
        <div class="d-flex justify-content-start mt-3">
            <!-- Button Tambah Pengguna -->
            <button class="btn btn-success btn-sm me-2" onclick="window.location.href='tambahpengguna.php'">Tambah Pengguna</button>

        </div>

        <br>

        <!-- Tabel Pengguna -->
        <div class="table-container">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Nip</th>
                        <th>Jabatan</th>
                        <th>Peran</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Menampilkan data pengguna dari database
                    if ($result->num_rows > 0) {
                        $no = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                                    <th scope="row">' . $no . '</th>
                                    <td>' . htmlspecialchars($row['nama']) . '</td>
                                    <td>' . htmlspecialchars($row['nip']) . '</td>
                                    <td>' . htmlspecialchars($row['jabatan']) . '</td>
                                    <td><span class="badge bg-' . ($row['peran'] == 'admin' ? 'success' : ($row['peran'] == 'manager' ? 'warning' : 'primary')) . '">' . htmlspecialchars($row['peran']) . '</span></td>
                                    <td>' . htmlspecialchars($row['password']) . '</td>
                                    <td>
                                        <a href="edit_pengguna.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="hapus_pengguna.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus pengguna ini?\')">Hapus</a>
                                    </td>
                                </tr>';
                            $no++;
                        }
                    } else {
                        echo '<tr><td colspan="7" class="text-center">Tidak ada data pengguna yang ditemukan.</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    
  <script>// Show the Add User form (Modal)
function showAddUserForm() {
    document.getElementById("addUserFormModal").style.display = "block";
}

// Hide the Add User form (Modal)
function hideAddUserForm() {
    document.getElementById("addUserFormModal").style.display = "none";
}</script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
<?php
// Menutup koneksi database
$conn->close();
?>