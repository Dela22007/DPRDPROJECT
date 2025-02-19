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
       /* Content Area Styles */
/* 1. Ubah .content untuk mengatur tinggi penuh */
.content {
    padding: 2rem;
    display: flex;
    gap: 2rem;
    height: calc(100vh - 80px); /* Tambahkan ini */
}

/* 2. Ubah .job-detail untuk layout flex */
.job-detail {
    flex: 2;
    display: flex;
    flex-direction: column;
    height: 100%;
    background: whitesmoke;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

/* 3. Pastikan header tetap */
.card-header {
    padding: 1.5rem;
    border-bottom: 1px solid #eee;
    flex-shrink: 0;
    background: whitesmoke;
    border-radius: 12px 12px 0 0;
    z-index: 10;
}

/* 4. Pastikan tabs tetap */
.tabs {
    border-bottom: 1px solid #eee;
    display: flex;
    gap: 1.5rem;
    padding: 1.25rem;
    margin-bottom: 0; /* Ubah ini */
    flex-shrink: 0;   /* Tambahkan ini */
    background: whitesmoke;
    z-index: 10;
}

/* 5. Buat tab-content bisa scroll */
.tab-content {
    flex: 1;           /* Tambahkan ini */
    overflow-y: auto;  /* Tambahkan ini */
    padding: 1.5rem;
}

/* 6. Styling scrollbar */
.tab-content::-webkit-scrollbar {
    width: 8px;
}

.tab-content::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.tab-content::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.tab-content::-webkit-scrollbar-thumb:hover {
    background: #555;
}

.job-list {
    flex: 1;
    max-width: 500px;
}

.job-detail {
    flex: 2;
}

.card-header {
  padding: 1.5rem;
    border-bottom: 1px solid #eee;
    flex-shrink: 0; /* Mencegah header menyusut */
    background: whitesmoke;
    border-radius: 12px 12px 0 0;
    z-index: 10;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.search-box {
    position: relative;
    margin: 1rem 0;
}

.search-box i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
}

.search-input {
    width: 100%;
    padding: 0.75rem 0.75rem 0.75rem 2.5rem;
    border: 1px solid #ddd;
    border-radius: 6px;
}

.job-item {
    max-height: 500px; /* Atur tinggi maksimal sesuai kebutuhan */
    overflow-y: auto;  /* Mengaktifkan scroll vertikal */
}

.job-item:hover {
    background-color:rgb(248, 249, 250);
}

/* Button Styles */
.btn {
    padding: 0.5rem 0.875rem;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    transition: all 0.2s;
}

.btn-primary {
    background-color: #2563eb;
    color: white;
}

.btn-primary:hover {
    background-color: #1d4ed8;
}

.btn-outline {
    border: 1px solid #ddd;
    background-color: white;
}

.btn-outline:hover {
    background-color: #f8f9fa;
}

.btn-success {
    background-color: #22c55e;
    color: white;
}

.btn-success:hover {
    background-color: #16a34a;
}

.badge {
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 500;
    margin: 0 0.25rem;
}

.badge-blue {
    background-color: #dbeafe;
    color: #1e40af;
}

.badge-green {
    background-color: #dcfce7;
    color: #166534;
}

.badge-red {
    background-color: #fee2e2;
    color: #991b1b;
}

.tabs {
    border-bottom: 1px solid #eee;
    display: flex;
    gap: 1.5rem;
    padding: 1.25rem;
    margin-bottom: 1rem;
}

.tab {
    padding: 0.5rem 0.75rem;
    cursor: pointer;
    border-bottom: 2px solid transparent;
    transition: all 0.2s;
}

.tab.active {
    border-bottom-color: #2563eb;
    color: #2563eb;
}

.tab-content {
    padding: 0rem;
    display: none;
}

.tab-content.active {
    display: block;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.75rem;
    font-weight: 500;
    color: #374151;
}

.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 6px;
    transition: border-color 0.2s;
}

.form-control:focus {
    border-color: #2563eb;
    outline: none;
}

.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    margin: 1.5rem 0;
}
/* Styling untuk elemen utama */
.job-item-header {
    background-color: #f8f9fa;
    padding: 0.3rem 1.25rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.job-item-body {
    display: none;
    padding: 0.2rem 1.25rem;
    border-top: 1px solid #ddd;
    background-color: rgb(249, 249, 249);
    border-radius: 8px;
}

.sub-item {
    padding-left: 0rem;
    margin-top: 0rem;
}

.sub-item-header {
    display: flex;
    align-items: center;
    padding: 0.3rem 1rem;
    background-color: #f0f0f0;
    border-radius: 6px;
    margin-bottom: 10px;
    /* Adding transition for smooth hover effect */
    transition: all 0.3s ease;
}

/* Add hover effect for sub-item-header */
.sub-item-header:hover {
    background-color: #e0e0e0;
    cursor: pointer;
    transform: translateX(5px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.sub-item-header .content-wrapper {
    display: flex;
    align-items: center;
    gap: 10px;
    flex: 1;
}

.sub-item-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #f1f1f1;
    padding: 10px;
    border-radius: 5px;
}

.content-wrapper {
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

/* Add hover effect for icon wrapper */
.sub-item-header:hover .icon-wrapper {
    background-color: rgb(49, 56, 119);
    transform: scale(1.1);
}

.icon-wrapper-square {
    border-radius: 3px;
}

.icon-wrapper-circle {
    border-radius: 50%;
}

.sub-item-header p {
    font-size: 1rem;
    margin: 0;
    line-height: 1.5rem;
    /* Adding transition for smooth hover effect */
    transition: all 0.3s ease;
}

/* Add hover effect for text */
.sub-item-header:hover p {
    color: rgb(39, 45, 99);
    font-weight: 500;
}

.sub-item-body {
    display: flex;
    align-items: center;
    padding: 0.5rem 1.25rem;
    margin-top: 0.5rem;
    background-color:rgb(202, 204, 207);
    border-radius: 6px;
}

.sub-item-body i {
    font-size: 1.5rem;
    margin-right: 10px;
}

.sub-item-body p {
    font-size: 1rem;
    margin: 0;
}

.job-item-header, .sub-item-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.3rem 1rem;
    background-color: #f0f0f0;
    border-radius: 6px;
    margin-bottom: 10px;
    cursor: pointer;
}

.sub-item-body {
    padding-left: 1rem;
}

.sub-item-header i {
    transition: transform 0.3s ease;
}

.job-item-body.open, .sub-item-body.open {
    display: block;
}
.unor-container {
    padding: 20px;
    font-family: Arial, sans-serif;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
}

.button-group {
    display: flex;
    gap: 10px;
}

.btn {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    background-color: #1e3a8a; /* Warna biru tua */
    color: white;
    transition: background-color 0.2s ease;
}

.btn:hover {
    background-color: #1e40af; /* Sedikit lebih terang saat hover */
}

.id-section {
    margin-top: 20px;
}

.id-label {
    font-size: 14px;
    color: #666;
    margin-bottom: 5px;
}

.id-value {
    font-family: monospace;
    color: #333;
}

.checkbox-container {
    margin-top: 15px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

input[type="checkbox"] {
    width: 16px;
    height: 16px;
}
.form-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }
        .form-group {
            flex: 1;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 14px;
        }
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            box-sizing: border-box;
        }
        .form-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }
        .form-group {
            flex: 1;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 14px;
        }
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            box-sizing: border-box;
        }
        .checkbox-group {
            margin-bottom: 15px;
        }
        .checkbox-group label {
            display: inline-block;
            margin-right: 20px;
            color: #000;
        }
        .reset-button {
            background-color: #ff4444;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }
        .location-container {
            display: flex;
            align-items: start;
            gap: 10px;
        }
        .required::after {
            content: " *";
            color: red;
        }
        .button-container {
            text-align: right;
            margin-bottom: 10px;
        }
        .download-button {
            background-color: #304254;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f5f5f5;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .button {
            background-color: #fff;
            color: #2c3e50;
            padding: 5px 10px;
            border: 1px solid #2c3e50;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
        .button:hover {
            background-color:rgb(7, 46, 131);
            color: #fff;
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
              <li class="nav-item">
                <a href="manajemenpengguna.php">
                  <i class="fas fa-user"></i>
                  <p>Manajemen Pengguna</p>
                </a>
              </li>
              <li class="nav-item active">
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
              <i class="fas fa-user-circle fa-2x"></i> <!-- Ikon pengguna -->
            </div>
          </div>
        </a>
        <!-- Dropdown menu untuk profile -->
<ul class="dropdown-menu dropdown-user animated fadeIn">
  <div class="dropdown-user-scroll scrollbar-outer">
    <!-- Informasi Akun: Nama dan NIK -->
    <li class="dropdown-item">
      <div class="account-info">
        <p class="account-name fw-bold">ANDRIANSYAH WICAKSONO</p>
      </div>
    </li>
    <!-- Tombol Logout -->
    <li><a class="dropdown-item" href="#">Logout</a></li>
  </div>
</ul>

      </li>
    </ul>
  </div>
</nav>
<div class="content">
                <!-- Job List -->
                <div class="job-list">
                    <div class="card-header">
                        <div class="card-title">
                            <span>Daftar Jabatan</span>
                        </div>
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" class="search-input" placeholder="Cari jabatan...">
                        </div>
                    </div>
                    <!-- Job Items -->
                    <div class="job-items">
    <!-- Bagian Utama -->
    <div class="job-item">
        <div class="job-item-header" onclick="toggleCollapse(this)">
        <i class="fas fa-chevron-down"></i>
            <p>Bagian Umum dan Keuangan</p>
            <div class="button">Aksi</div>
        </div>
        <div class="job-item-body">
            <!-- Sub Bagian -->
            <div class="sub-item">
                <div class="sub-item-header" onclick="toggleSubCollapse(this)">
                <i class="fas fa-chevron-right"></i>
                 <div class="content-wrapper">
                        <p>Kepala Sub Bagian Umum</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-body">
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p> Analis Sumber Daya Manusia Aparatur</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Penelaah Kebijakan Pengadaan Barang dan Jasa</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Penyusun Naskah Rapat Pimpinan</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Analis Tata Usaha</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Penyusun Kesekretariatan Fraksi</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Penyusun Rencana Kebutuhan Rumah Tangga dan Perlengkapan</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Pengelola Rumah Tangga</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Pengelola Kepegawaian</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Pengelola Surat</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p> Pengelola Data</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Pengelola Perjalanan Dinas</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p> Pengelola Instalasi Air dan Listrik</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Teknisi Peralatan, Listrik dan Elektronika</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Notulis Rapat</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Pengadministrasi Rapat</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Pengadministrasi Umum</p>
        </div>
        <div class="button">Aksi</div>
    </div>
    <div class="sub-item-header">
        <div class="content-wrapper">
            <p>Pengemudi</p>
        </div>
        <div class="button">Aksi</div>
    </div>
</div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Perencana <strong>(Ahli Muda)</strong></p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Analis Perencanaan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Analis Laporan Akuntabilitas Kinerja</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Analis Laporan Keuangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Penata Laporan Keuangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Penyusun Rencana Kegiatan dan Anggaran</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Bendahara</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Penyusun Laporan Keuangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengelola Bahan Perencanaan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Verifikator Keuangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengelola Gaji</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengolah Data Laporan Pertanggung jawaban Bendahara</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Pengolah Data Sistem Informasi Perbendaharaan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
<div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengadministrasi Keuangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header" onclick="toggleSubCollapse(this)">
                <i class="fas fa-chevron-right"></i>
                 <div class="content-wrapper">
                        <p>Kepala Bagian Persidangan dan Perundang-Undangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Perisalah Legislatif Ahli Muda <b>Ahli Muda</b></p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Analis Protokol</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Penyusun Risalah</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Analis Produk Hukum</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Penyusun Rancangan Perundang- Undangan </p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Analis Peraturan Perundang-Undangan dan Rancangan Peraturan Perundang-Undangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Penelaah Jaringan Dokumentasi dan Informasi Hukum</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengelola Persidangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengelola Dokumentasi</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Petugas Protokol</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Notulis Rapat</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengelola Data</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengadministrasi Rapat</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengadministrasi Data Peraturan Perundang - Undangan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
            <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengadministrasi Risalah</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header" onclick="toggleSubCollapse(this)">
                <i class="fas fa-chevron-right"></i>
                 <div class="content-wrapper">
                        <p>Kepala Bagian Fasilitasi Penganggaran dan Pengawasan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Analis Kebijakan <b>Ahli Madya</b></p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Analis Keuangan Pusat dan Daerah</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Analis Hasil Pengawasan dan Pengaduan Masyarakat </p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Penyusun Rencana Tindak Lanjut dan Hasil Pengawasan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Analis Laporan Hasil Pengawasan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengelola Pelaporan dan Evaluasi Pelaksanaan Kegiatan APBD</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Analis Pelaksanaan Anggaran</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Analis Penganggaran</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Notulis Rapat</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengelola Data</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Pengadministrasi Rapat</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p>Penyusun Naskah Rapat Pimpinan</p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
                <div class="sub-item-header">
                    <div class="content-wrapper">
                        <p> Pengelola Surat </p>
                    </div>
                    <div class="button">Aksi</div>
                </div>
        </div>
    </div>
</div>




                </div>

                <!-- Job Detail -->
                <div class="job-detail">
                    <div class="card-header">
                        <div class="card-title">
                            <span>Detail Analisis Jabatan</span>
                            <div>
                                <button class="btn btn-outline">
                                    <i class="fas fa-print"></i>
                                    Cetak
                                </button>
                                <button class="btn btn-outline">
                                    <i class="fas fa-download"></i>
                                    Export PDF
                                </button>
                                <button class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tabs">
    <div class="tab active" data-tab="peta-jabatan">Peta Jabatan</div>
    <div class="tab" data-tab="data-unor">Data Unor</div>
    <div class="tab" data-tab="info-jabatan">Info Jabatan</div>
    <div class="tab" data-tab="data-pegawai">Data Pegawai ASN</div>
    <div class="tab" data-tab="resume">Resume</div>
</div>


<div id="peta-jabatan" class="tab-content active">
   
    <div class="pdf-container">
        <object data="peta-jabatan.pdf" type="application/pdf" width="100%" height="600px">
            <p>Browser anda tidak mendukung PDF viewer. 
               <a href="path/to/your/peta-jabatan.pdf">Download PDF</a>
            </p>
        </object>
    </div>
</div>

<div id="data-unor" class="tab-content">
<div class="header">
        <div class="title">Data Unor</div>
        <div class="button-group">
            <button class="btn btn-draft">CETAK DRAFT</button>
            <button class="btn btn-edit">EDIT</button>
        </div>
    </div>

    <div class="id-section">
        <div class="id-label">Id Jabatan:</div>
        <div class="id-value">8ae483a66119463301611ba31b621339</div>
    </div>

    <div class="checkbox-container">
        <label class="checkbox-label">
            <input type="checkbox">
            <span>Skip Info Jabatan</span>
        </label>
    </div>
    <div class="form-container">
        <div class="form-row">
            <div class="form-group">
                <label for="namaUnorHR">Nama Unor HR</label>
                <input type="text" id="namaUnorHR" class="form-control" value="-">
            </div>
            <div class="form-group">
                <label for="namaUnorMappingBKN">Nama Unor Mapping BKN</label>
                <input type="text" id="namaUnorMappingBKN" class="form-control" value="-">
            </div>
            <div class="form-group">
                <label for="namaUnorMappingInstansi">Nama Unor Mapping Instansi</label>
                <input type="text" id="namaUnorMappingInstansi" class="form-control" value="-">
            </div>
        </div>

        <div class="form-group">
            <label for="namaPembina">Nama Pembina</label>
            <input type="text" id="namaPembina" class="form-control">
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="namaUnor">Nama Unor</label>
                <input type="text" id="namaUnor" class="form-control" value="-">
            </div>
            <div class="form-group">
                <label for="namaJabatan">Nama Jabatan</label>
                <input type="text" id="namaJabatan" class="form-control" value="-">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="jenisUnor">Jenis Unor</label>
                <select id="jenisUnor" class="form-control">
                    <option value="PR-SEKRETARIAT DPRD">PR-SEKRETARIAT DPRD</option>
                    <option value="PR-SEKRETARIAT DPRD">PR-SEKRETARIAT DPRD</option>
                    <option value="PR-SEKRETARIAT DPRD">PR-SEKRETARIAT DPRD</option>
                    <option value="PR-SEKRETARIAT DPRD">PR-SEKRETARIAT DPRD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenjangJabatan">Jenjang Jabatan</label>
                <select id="jenjangJabatan" class="form-control">
                    <option value="IIa">IIa - JABATAN PIMPINAN TINGGI PRATAMA</option>
                    <option value="IIa">IIa - JABATAN PIMPINAN TINGGI PRATAMA</option>
                    <option value="IIa">IIa - JABATAN PIMPINAN TINGGI PRATAMA</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="unorAtasanStruktural">Nama Unor Atasan Struktural</label>
                <select id="unorAtasanStruktural" class="form-control">
                    <option value="sekretariat">Sekretariat Daerah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="unorInduk">Unor Induk</label>
                <select id="unorInduk" class="form-control">
                    <option value="sultra">Pemerintah Sulawesi Tenggara</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="kodeCepat">Kode Cepat</label>
                <input type="text" id="kodeCepat" class="form-control" value="010Q000000">
            </div>
            <div class="form-group">
                <label for="bup">BUP</label>
                <input type="text" id="bup" class="form-control" value="60">
            </div>
        </div>
    </div>
    <div class="form-group">
            <label>Jabatan Prioritas</label>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="prioritas" value="nasional"> J.Prioritas Nasional
                </label>
                <label>
                    <input type="checkbox" name="prioritas" value="instansi" checked> J.Prioritas Instansi
                </label>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="levelStruktur">Level Struktur</label>
                <select id="levelStruktur" class="form-control">
                    <option value="0">0</option>
                </select>
            </div>
            <div class="form-group">
                <div class="location-container">
                    <div style="flex: 1;">
                        <label for="lokasiUnor">Lokasi Unor</label>
                        <select id="lokasiUnor" class="form-control">
                            <option value="MANDONGA">MANDONGA</option>
                        </select>
                    </div>
                    <button class="reset-button">RESET LOKASI</button>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" id="latitude" class="form-control" value="0">
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" id="longitude" class="form-control" value="0">
            </div>
        </div>

        <div class="form-group">
            <label for="rumpunJabatan" class="required">Rumpun Jabatan</label>
            <input type="text" id="rumpunJabatan" class="form-control" value="-">
        </div>
    </div>
    <div id="info-jabatan" class="tab-content">
        <!-- FORM DATA JABATAN -->
        <div class="card-header">
                                    </div> <br>
                                    <div class="form-group">
                                        <label for="nama_jabatan">Nama Jabatan:</label>
                                        <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Masukan nama jabatan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_jabatan">Kode Jabatan:</label>
                                        <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" placeholder="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="unit_kerja1">Unit Kerja:</label>
                                        <input type="text" class="form-control" id="unit_kerja1" name="unit_kerja1" value="Sekretariat Dewan Perwakilan Rakyat Daerah" required readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="unit_kerja">Unit Kerja:</label>
                                        <select class="form-control" id="unit_kerja" name="unit_kerja" required onchange="toggleInput()">
                                            <option value="">Pilih Unit Kerja</option>
                                            <option value="JPT Madya">JPT Madya</option>
                                            <option value="JPT Pratama">JPT Pratama</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Pengawas">Pengawas</option>
                                            <option value="Jabatan">Jabatan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ikhtisar_jabatan">Ikhtisar Jabatan:</label>
                                        <textarea class="form-control" id="ikhtisar_jabatan" name="ikhtisar_jabatan" rows="3" placeholder="Masukan teks"></textarea>
                                    </div>
                                    <!-- FORM DATA JABATAN END -->
                                     <!-- SYARAT JABATAN -->
                                    <div class="card-header">
                                        <h4>Syarat Jabatan</h4>
                                    </div> <br>
                                    <div class="form-group">
                                        <label for="pangkat">Pangkat/Gol. Ruang:</label>
                                        <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Minimal Pembina Tk. I, Gol. IV/b" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan Formal:</label>
                                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Minimal S-1 bidang yang relevan" required>
                                    </div>
                                    <div class="form-group">
                                        <strong><label>Diklat:</label></strong> <br>
                                        <label for="jenjang">Penjenjangan:</label>
                                        <select class="form-control" id="jenjang" name="jenjang" required>
                                            <option value="">Pilih Jenjang</option>
                                            <option value="Diklatpim Tingkat II">Diklatpim Tingkat II</option>
                                            <option value="Diklatpim Tingkat III">Diklatpim Tingkat III</option>
                                            <option value="Diklatpim Tingkat IV">Diklatpim Tingkat IV</option>
                                        </select> <br>
                                        <label for="teknis">Teknis:</label>
                                        <select class="form-control" id="teknis" name="teknis" required>
                                            <option value="">Pilih Teknis</option>
                                            <option value="Diklat Teknis Administrasi Keuangan">Diklat Teknis Administrasi Keuangan</option>
                                            <option value="Diklat Teknis Kepemimpinan Organisasi">Diklat Teknis Kepemimpinan Organisasi</option>
                                            <option value="Diklat pengadaan barang dan jasa">Diklat pengadaan barang dan jasa</option>
                                            <option value="Diklat Teknis Bidang Umum Atau Administrasi Dan Manajemen">Diklat Teknis Bidang Umum Atau Administrasi Dan Manajemen</option>
                                        </select> <br>
                                        <label for="fungsional">Fungsional:</label>
                                        <input type="text" class="form-control" id="fungsional" name="fungsional" placeholder="Masukan fungsional" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pengalaman_kerja">Pengalaman Kerja:</label>
                                        <textarea class="form-control" id="pengalaman_kerja" name="pengalaman_kerja" rows="3" placeholder="Masukan pengalaman kerja"></textarea>
                                        <small><strong>*Catatan:</strong></small> <br>
                                        <small>1. Minimal berpengalaman dalam 2 Jabatan Administrator atau telah 5 tahun dalam satu Jabatan Administrator.</small> <br>
                                        <small>2. Sedang menduduki Jabatan Administrator atau Jabatan Fungsional jenjang Ahli Madya paling singkat 2 tahun.</small>
                                    </div>
                                    <!-- SYARAT JABATAN END -->
                                     <!-- TUGAS POKOK -->
                                    <div class="card-header">
                                        <h4>Tugas Pokok</h4>
                                    </div> <br>
                                    <div class="form-group">
                                        <label for="uraian_tugas">Uraian Tugas:</label>
                                        <textarea class="form-control" id="uraian_tugas" name="uraian_tugas[]" rows="3" placeholder="Masukan uraian tugas"></textarea>
                                    </div>
                                    <div id="form-container1">
                                        <div class="form-group">
                                            <label for="hasil_krj">Hasil Kerja:</label>
                                            <select class="form-control" id="hasil_krj" name="hasil_krj[]" required onchange="toggleInput()">
                                                <option value="">Pilih Hasil Kerja</option>
                                                <option value="Dokumen">Dokumen</option>
                                                <option value="Kegiatan">Kegiatan</option>
                                            </select>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="jumlah_beban">Jumlah beban kerja 1 tahun:</label>
                                                <input type="number" class="form-control" id="jumlah_beban" name="jumlah_beban[]" placeholder="Masukan jumlah beban kerja 1 tahun" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="waktu_penyelesaian">Waktu penyelesaian:</label>
                                                <input type="number" class="form-control" id="waktu_penyelesaian" name="waktu_penyelesaian[]" placeholder="Masukan waktu penyelesaian" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="waktu_efektif">Waktu efektif penyelesaian:</label>
                                                <input type="number" class="form-control" id="waktu_efektif" name="waktu_efektif[]" placeholder="Masukan waktu efektif penyelesaian" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kebutuhan_pegawai">Kebutuhan pegawai:</label>
                                                <input type="number" class="form-control" id="kebutuhan_pegawai" name="kebutuhan_pegawai[]" placeholder="Masukan kebutuhan pegawai" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add-form-btn1">Tambah</button>
                                    <br> <br>

                                    <script>
                                        document.getElementById('add-form-btn1').addEventListener('click', function() {
                                            var formContainer = document.getElementById('form-container1');

                                            // Create a new form section
                                            var newForm = document.createElement('div');
                                            newForm.classList.add('form-group');
                                            newForm.innerHTML = `
                                                            <div class="form-group">
                                                                <label for="uraian_tugas">Uraian Tugas:</label>
                                                                <textarea class="form-control" id="uraian_tugas" name="uraian_tugas[]" rows="3" placeholder="Masukan uraian tugas"></textarea>
                                                            <div>
                                                            <div class="form-group">
                                                                <label for="hasil_krj">Hasil Kerja:</label>
                                                                <select class="form-control" id="hasil_krj" name="hasil_krj[]" required onchange="toggleInput()">
                                                                    <option value="">Pilih Hasil Kerja</option>
                                                                    <option value="Dokumen">Dokumen</option>
                                                                    <option value="Kegiatan">Kegiatan</option>
                                                                </select>
                                                            </div>
                                                
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="jumlah_beban">Jumlah beban kerja 1 tahun:</label>
                                                                    <input type="number" class="form-control" id="jumlah_beban" name="jumlah_beban[]" placeholder="Masukan jumlah beban kerja 1 tahun" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="waktu_penyelesaian">Waktu penyelesaian:</label>
                                                                    <input type="number" class="form-control" id="waktu_penyelesaian" name="waktu_penyelesaian[]" placeholder="Masukan waktu penyelesaian" required>
                                                                </div>
                                                            </div>
                                                
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="waktu_efektif">Waktu efektif penyelesaian:</label>
                                                                    <input type="number" class="form-control" id="waktu_efektif" name="waktu_efektif[]" placeholder="Masukan waktu efektif penyelesaian" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="kebutuhan_pegawai">Kebutuhan pegawai:</label>
                                                                    <input type="number" class="form-control" id="kebutuhan_pegawai" name="kebutuhan_pegawai[]" placeholder="Masukan kebutuhan pegawai" required>
                                                                </div>
                                                            </div>
                                                        `;

                                            // Append the new form section to the container
                                            formContainer.appendChild(newForm);
                                        });

                                        function toggleInput() {
                                            // Optional: Logic to handle the select dropdown onchange
                                            console.log('Hasil Kerja selected');
                                        }
                                    </script>
                                    <!-- TUGAS POKOK END -->
                                     <!-- HASIL KERJA -->
                                    <div class="card-header">
                                        <h4>Hasil Kerja</h4>
                                    </div> <br>
                                    <div>
                                        <div id="form-container2">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label for="hasil_kerja">Hasil Kerja:</label>
                                                    <textarea class="form-control" name="hasil_kerja[]" rows="3" placeholder="Masukkan hasil kerja"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="add-form-btn2">Tambah</button> <br> <br>
                                    </div>

                                    <script>
                                        document.getElementById('add-form-btn2').addEventListener('click', function() {
                                            var formContainer = document.getElementById('form-container2');

                                            // Buat elemen form baru
                                            var newForm = document.createElement('div');
                                            newForm.classList.add('form-group', 'row');
                                            newForm.innerHTML = `
                                                <div class="col-md-12">
                                                    <label for="hasil_kerja">Hasil Kerja:</label>
                                                    <textarea class="form-control" name="hasil_kerja[]" rows="3" placeholder="Masukkan hasil kerja"></textarea>
                                                </div>
                                            `;

                                            // Tambahkan elemen baru ke dalam form-container
                                            formContainer.appendChild(newForm);
                                        });
                                    </script>
                                    <!-- HASIL KERJA END -->
                                      <!-- BAHAN KERJA -->
                                    <div class="card-header">
                                        <h4>Bahan Kerja</h4>
                                    </div> <br>
                                    <div>
                                        <div id="form-container3">
                                            <div class="form-group row"> <!-- Gunakan class row -->
                                                <div class="col-md-6 px-3">
                                                    <div class="form-group">
                                                        <label for="bahan_kerja">Bahan Kerja:</label>
                                                        <textarea class="form-control" name="bahan_kerja[]" rows="3" placeholder="Masukan bahan kerja"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-3">
                                                    <div class="form-group">
                                                        <label for="penggunaan_tugas1">Penggunaan dalam Tugas:</label>
                                                        <textarea class="form-control" name="penggunaan_tugas1[]" rows="3" placeholder="Masukan penggunaan dalam tugas"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="add-form-btn3">Tambah</button> <br> <br>
                                    </div>

                                    <script>
                                        document.getElementById('add-form-btn3').addEventListener('click', function() {
                                            var formContainer = document.getElementById('form-container3');

                                            // Buat elemen form baru
                                            var newForm = document.createElement('div');
                                            newForm.classList.add('row', 'mt-3'); // Tambahkan row dan margin top untuk jarak

                                            newForm.innerHTML = `
                                                <div class="col-md-6 px-3"> 
                                                    <div class="form-group">
                                                        <label>Bahan Kerja:</label>
                                                        <textarea class="form-control" name="bahan_kerja[]" rows="3" placeholder="Masukan bahan kerja"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-3"> 
                                                    <div class="form-group">
                                                        <label>Penggunaan dalam Tugas:</label>
                                                        <textarea class="form-control" name="penggunaan_tugas1[]" rows="3" placeholder="Masukan penggunaan dalam tugas"></textarea>
                                                    </div>
                                                </div>
                                            `;

                                            // Tambahkan form baru ke dalam container
                                            formContainer.appendChild(newForm);
                                        });
                                    </script>
                                    <!-- BAHAN KERJA END -->
                                     <!-- TEMPERAMEN KERJA -->
                                    <div>
                                        <div id="form-container9">
                                            <div class="form-row">
                                                <label for="temperamen_kerja">Temperamen Kerja:</label>
                                                <select class="form-control" id="temperamen_kerja" name="temperamen_kerja" required>
                                                    <option value="">Pilih Temperamen Kerja</option>
                                                    <option value="DCP">Directing Control Planning (DCP) </option>
                                                    <option value="FIF">Feeling- Idea- Fact (FIF) </option>
                                                    <option value="INFLU">Influencing (INFLU) </option>
                                                    <option value="SJC">Sensory & Judgmental Creteria (SJC) </option>
                                                    <option value="MVC">Measurable and Verifiable Creteria (MVC) </option>
                                                    <option value="DEPL">Dealing with People (DEPL) </option>
                                                    <option value="REPCON">Repetitive and Continuous (REPCON) </option>
                                                    <option value="PUS">Performing Under Stress (PUS) </option>
                                                    <option value="STS">Set of Limits, Tolerance and Other Standart (STS) </option>
                                                    <option value="VARCH">Variety and Changing Conditions (VARCH)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <!-- TEMPERAMEN KERJA END-->
                                      <!-- MINAT KERJA -->
                                    <div>
                                        <div id="form-container9">
                                            <div class="form-row">
                                                <label for="minat_kerja">Minat Kerja:</label>
                                                <select class="form-control" id="minat_kerja" name="minat_kerja" required>
                                                    <option value="">Pilih Minat Kerja</option>
                                                    <option value="realistik">Realistik </option>
                                                    <option value="investigatif">Investigatif </option>
                                                    <option value="artistik">Artistik </option>
                                                    <option value="sosial">Sosial </option>
                                                    <option value="kewirausahaan">Kewirausahaan</option>
                                                    <option value="konvensional">Konvensional </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <!-- MINAT KERJA END -->
                                     <!-- UPAYA FISIK -->
                                    <div>
                                        <div id="form-container9">
                                            <div class="form-group">
                                                <label for="aktivitas">Upaya Fisik:</label><br>
                                                <div id="aktivitas" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                                                    <label><input type="checkbox" name="aktivitas[]" value="Berdiri"> Berdiri</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Berjalan"> Berjalan</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Duduk"> Duduk</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Mengangkat"> Mengangkat</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Membawa"> Membawa</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Mendorong"> Mendorong</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Menarik"> Menarik</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Memanjat"> Memanjat</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Menyimpan imbangan"> Menyimpan imbangan</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Menunduk"> Menunduk</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Berlutut"> Berlutut</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Membungkuk"> Membungkuk</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Merangkak"> Merangkak</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Menjangkau"> Menjangkau</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Memegang"> Memegang</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Bekerja dengan jari"> Bekerja dengan jari</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Meraba"> Meraba</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Berbicara"> Berbicara</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Mendengar"> Mendengar</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Melihat"> Melihat</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Ketajaman jarak jauh"> Ketajaman jarak jauh</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Ketajaman jarak dekat"> Ketajaman jarak dekat</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Pengamatan secara mendalam"> Pengamatan secara mendalam</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Penyesuaian lensa mata"> Penyesuaian lensa mata</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Melihat berbagai warna"> Melihat berbagai warna</label>
                                                    <label><input type="checkbox" name="aktivitas[]" value="Luas"> Luas</label>
                                                </div>
                                            </div>

                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    let checkboxes = document.querySelectorAll('input[name="aktivitas[]"]');

                                                    checkboxes.forEach(function(checkbox) {
                                                        checkbox.addEventListener("change", function() {
                                                            let checkedBoxes = document.querySelectorAll('input[name="aktivitas[]"]:checked');
                                                            if (checkedBoxes.length > 3) {
                                                                alert("Maksimal hanya bisa memilih 3 aktivitas!");
                                                                this.checked = false;
                                                            }
                                                        });
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div><br>
                                    <!-- UPAYA FISIK END -->
                                     <!-- KONDISI FISIK -->
                                    <div>
                                        <div id="form-container9">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required onchange="toggleInput()">
                                                        <option value="">Pilih jenis kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                        <option value="Laki-laki/Perempuan">Laki-laki/Perempuan</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="umur_maksimal">Umur Maksimal:</label>
                                                    <input type="number" id="umur_maksimal" name="umur_maksimal" class="form-control" placeholder="Masukkan umur maksimal">
                                                </div>

                                                <div class="form-group">
                                                    <label for="tinggi_badan">Tinggi Badan (cm):</label>
                                                    <input type="number" id="tinggi_badan" name="tinggi_badan" class="form-control" placeholder="Masukkan tinggi badan">
                                                </div>

                                                <div class="form-group">
                                                    <label for="berat_badan">Berat Badan (kg):</label>
                                                    <input type="number" id="berat_badan" name="berat_badan" class="form-control" placeholder="Masukkan berat badan">
                                                </div>

                                                <div class="form-group">
                                                    <label for="postur_badan">Postur Badan:</label>
                                                    <input type="text" id="postur_badan" name="postur_badan" class="form-control" placeholder="Masukkan postur badan">
                                                </div>

                                                <div class="form-group">
                                                    <label for="penampilan">Penampilan:</label>
                                                    <input type="text" id="penampilan" name="penampilan" class="form-control" placeholder="Masukkan penampilan">
                                                </div>

                                                <div class="form-group">
                                                    <label for="keadaan_fisik">Keadaan Fisik:</label>
                                                    <input type="text" id="keadaan_fisik" name="keadaan_fisik" class="form-control" placeholder="Masukkan keadaan fisik">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- KONDISI FISIK END -->
                                     <!-- FUNGSI PEKERJAAN -->
                                    <div>
                                        <div id="form-container9">
                                            <div class="form-group">
                                                <label for="berhubungan_data">Fungsi Pekerjaan yang berhubungan dengan Data:</label>
                                                <select class="form-control" id="berhubungan_data" name="berhubungan_data" required>
                                                    <option value="">Pilih pekerjaan</option>
                                                    <option value="Memasang mesin">Memasang mesin</option>
                                                    <option value="Mengerjakan persisi">Mengerjakan persisi</option>
                                                    <option value="Menjalankan mengontrol mesin">Menjalankan mengontrol mesin</option>
                                                    <option value="Mengemudikan/menjalankan mesin">Mengemudikan/menjalankan mesin</option>
                                                    <option value="Mengerjakan benda dengan tangan atau perkakas">Mengerjakan benda dengan tangan atau perkakas</option>
                                                    <option value="Melayani mesin">Melayani mesin</option>
                                                    <option value="Memasukkan, mengeluarkan barang ke/dari mesin">Memasukkan, mengeluarkan barang ke/dari mesin</option>
                                                    <option value="Memegang">Memegang</option>
                                                    <option value="Memadukan data">Memadukan data</option>
                                                    <option value="Mengkoordinasi data">Mengkoordinasi data</option>
                                                    <option value="Menganalisis data">Menganalisis data</option>
                                                    <option value="Menyusun data">Menyusun data</option>
                                                    <option value="Menghitung data">Menghitung data</option>
                                                    <option value="Menyalin data">Menyalin data</option>
                                                    <option value="Membandingkan data">Membandingkan data</option>
                                                    <option value="Menasehati">Menasehati</option>
                                                    <option value="Berunding">Berunding</option>
                                                    <option value="Mengajar">Mengajar</option>
                                                    <option value="Menyelia">Menyelia</option>
                                                    <option value="Menghibur">Menghibur</option>
                                                    <option value="Mempengaruhi">Mempengaruhi</option>
                                                    <option value="Berbicara memberi tanda">Berbicara memberi tanda</option>
                                                    <option value="Melayani orang">Melayani orang</option>
                                                    <option value="Menerima instruksi">Menerima instruksi</option>
                                                </select> <br>
                                                <label for="berhubungan_orang">Fungsi Pekerjaan yang berhubungan dengan Orang:</label>
                                                <select class="form-control" id="berhubungan_orang" name="berhubungan_orang" required>
                                                    <option value="">Pilih pekerjaan</option>
                                                    <option value="Memasang mesin">Memasang mesin</option>
                                                    <option value="Mengerjakan persisi">Mengerjakan persisi</option>
                                                    <option value="Menjalankan mengontrol mesin">Menjalankan mengontrol mesin</option>
                                                    <option value="Mengemudikan/menjalankan mesin">Mengemudikan/menjalankan mesin</option>
                                                    <option value="Mengerjakan benda dengan tangan atau perkakas">Mengerjakan benda dengan tangan atau perkakas</option>
                                                    <option value="Melayani mesin">Melayani mesin</option>
                                                    <option value="Memasukkan, mengeluarkan barang ke/dari mesin">Memasukkan, mengeluarkan barang ke/dari mesin</option>
                                                    <option value="Memegang">Memegang</option>
                                                    <option value="Memadukan data">Memadukan data</option>
                                                    <option value="Mengkoordinasi data">Mengkoordinasi data</option>
                                                    <option value="Menganalisis data">Menganalisis data</option>
                                                    <option value="Menyusun data">Menyusun data</option>
                                                    <option value="Menghitung data">Menghitung data</option>
                                                    <option value="Menyalin data">Menyalin data</option>
                                                    <option value="Membandingkan data">Membandingkan data</option>
                                                    <option value="Menasehati">Menasehati</option>
                                                    <option value="Berunding">Berunding</option>
                                                    <option value="Mengajar">Mengajar</option>
                                                    <option value="Menyelia">Menyelia</option>
                                                    <option value="Menghibur">Menghibur</option>
                                                    <option value="Mempengaruhi">Mempengaruhi</option>
                                                    <option value="Berbicara memberi tanda">Berbicara memberi tanda</option>
                                                    <option value="Melayani orang">Melayani orang</option>
                                                    <option value="Menerima instruksi">Menerima instruksi</option>
                                                </select> <br>
                                                <label for="berhubungan_benda">Fungsi Pekerjaan yang berhubungan dengan Benda:</label>
                                                <select class="form-control" id="berhubungan_benda" name="berhubungan_benda" required>
                                                    <option value="">Pilih pekerjaan</option>
                                                    <option value="Memasang mesin">Memasang mesin</option>
                                                    <option value="Mengerjakan persisi">Mengerjakan persisi</option>
                                                    <option value="Menjalankan mengontrol mesin">Menjalankan mengontrol mesin</option>
                                                    <option value="Mengemudikan/menjalankan mesin">Mengemudikan/menjalankan mesin</option>
                                                    <option value="Mengerjakan benda dengan tangan atau perkakas">Mengerjakan benda dengan tangan atau perkakas</option>
                                                    <option value="Melayani mesin">Melayani mesin</option>
                                                    <option value="Memasukkan, mengeluarkan barang ke/dari mesin">Memasukkan, mengeluarkan barang ke/dari mesin</option>
                                                    <option value="Memegang">Memegang</option>
                                                    <option value="Memadukan data">Memadukan data</option>
                                                    <option value="Mengkoordinasi data">Mengkoordinasi data</option>
                                                    <option value="Menganalisis data">Menganalisis data</option>
                                                    <option value="Menyusun data">Menyusun data</option>
                                                    <option value="Menghitung data">Menghitung data</option>
                                                    <option value="Menyalin data">Menyalin data</option>
                                                    <option value="Membandingkan data">Membandingkan data</option>
                                                    <option value="Menasehati">Menasehati</option>
                                                    <option value="Berunding">Berunding</option>
                                                    <option value="Mengajar">Mengajar</option>
                                                    <option value="Menyelia">Menyelia</option>
                                                    <option value="Menghibur">Menghibur</option>
                                                    <option value="Mempengaruhi">Mempengaruhi</option>
                                                    <option value="Berbicara memberi tanda">Berbicara memberi tanda</option>
                                                    <option value="Melayani orang">Melayani orang</option>
                                                    <option value="Menerima instruksi">Menerima instruksi</option>
                                                </select> <br>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FUNGSI PEKERJAAN END -->
                                     <!-- PRESTASI YANG DIHARAPKAN -->
                                    <div class="card-header">
                                        <h4>Prestasi yang Diharapkan</h4>
                                    </div> <br>
                                    <div>
                                        <div id="form-container9">
                                            <div class="form-row"> <!-- Gunakan form-row untuk mendefinisikan baris -->
                                                <div class="col-md-12 px-3">
                                                    <div class="form-group row">
                                                        <label for="prestasi">Prestasi yang diharapkan:</label>
                                                        <textarea class="form-control" id="prestasi" name="prestasi" rows="3" placeholder="Masukkan prestasi yang diharapkan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <!-- PRESTASI YANG DIHARAPKAN END -->
                                      <!-- KELAS JABATAN -->
                                    <div class="card-header">
                                        <h4>Kelas Jabatan</h4>
                                    </div> <br>
                                    <div>
                                        <div id="form-container9">
                                            <div class="form-row"> <!-- Gunakan form-row untuk mendefinisikan baris -->
                                                <div class="col-md-12 px-3">
                                                    <div class="form-row">
                                                        <label for="kelas_jabatan">Kelas jabatan:</label>
                                                        <textarea class="form-control" id="kelas_jabatan" name="kelas_jabatan" rows="3" placeholder="Masukkan kelas jabatan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <!-- KELAS JABATAN END -->
                                    <?php
                                    if (isset($_GET['edit'])) {
                                        echo "<button type='submit' class='btn btn-primary form-control' name='btnProses' value='edit'>Edit Data</button>";
                                    } else {
                                        echo "<button type='submit' class='btn btn-primary form-control' name='btnProses' value='simpan'>Simpan Data</button>";
                                    }
                                    ?>
        </div>
        <div id="data-pegawai" class="tab-content">
        <div class="button-container">
        <button class="download-button">UNDUH DATA PEGAWAI</button>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>NIP Lama</th>
            <th>NIP Baru</th>
            <th>Nama</th>
            <th>Kedudukan Hukum</th>
            <th>Golongan</th>
            <th>Jabatan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>010234873</td>
            <td>196412221990121001</td>
            <td>LA ODE MUSTARI</td>
            <td>Aktif</td>
            <td>IV/d</td>
            <td>Sekretaris DPRD</td>
        </tr>
        <tr>
            <td>2</td>
            <td>59002367</td>
            <td>196905012007011039</td>
            <td>SUTEJO</td>
            <td>Aktif</td>
            <td>III/d</td>
            <td>PENGELOLA DATA</td>
        </tr>
        <tr>
            <td>3</td>
            <td>59002874</td>
            <td>198212312008011011</td>
            <td>MUHAMMAD CHAIDIR</td>
            <td>Aktif</td>
            <td>III/a</td>
            <td>PENGADMINISTRASI RAPAT</td>
        </tr>
    </table>
</div>
</div>                    
                </div>
            </div>
          <!-- End Navbar -->
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
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab contents
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => content.classList.remove('active'));
            
            // Show the selected tab content
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
});
</script>
    <script>
        // Tab switching functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });

        // Job item selection
        document.querySelectorAll('.job-item').forEach(item => {
            item.addEventListener('click', () => {
                document.querySelectorAll('.job-item').forEach(i => i.classList.remove('selected'));
                item.classList.add('selected');
            });
        });
    </script>
    <script>
      // Fungsi untuk toggle bagian utama
function toggleCollapse(header) {
    const body = header.nextElementSibling;
    const icon = header.querySelector('i');

    // Toggle visibility bagian utama
    if (body.style.display === 'block') {
        body.style.display = 'none';
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    } else {
        body.style.display = 'block';
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    }

    // Menyembunyikan sub bagian setelah bagian utama ditutup
    const subItems = body.querySelectorAll('.sub-item-body');
    subItems.forEach(subItem => {
        subItem.style.display = 'none';
        const subIcon = subItem.previousElementSibling.querySelector('i');
        subIcon.classList.remove('fa-chevron-down');
        subIcon.classList.add('fa-chevron-right');
    });
}

// Fungsi untuk toggle sub bagian
function toggleSubCollapse(subHeader) {
    const subBody = subHeader.nextElementSibling;
    const subIcon = subHeader.querySelector('i');

    // Toggle visibility sub bagian
    if (subBody.style.display === 'block') {
        subBody.style.display = 'none';
        subIcon.classList.remove('fa-chevron-down');
        subIcon.classList.add('fa-chevron-right');
    } else {
        subBody.style.display = 'block';
        subIcon.classList.remove('fa-chevron-right');
        subIcon.classList.add('fa-chevron-down');
    }
}
    </script>

    
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
