<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Poli Klinik</title>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
     <!-- Navbar area -->
     <div class="mainContainer">
     <nav class="navbarContainer">
        <div class="top-side">

            <div class="logo">
                <h3>Admin Dashboard</h3>
            </div>
            <div class="navbar">
                <ul>
                    <li class="Btn-Master-Data btn-list">
                        <span>Master Data</span>
                        <ul class="master-data navList">
                            <li><a href="../pasien/index.php">Pasien<i class="fa-solid fa-bed"></i></a></li>
                            <li><a href="../poliKlinik/index.php">Poli Klinik<i class="fa-solid fa-house-medical"></i></a></li>
                            <li><a href="../dokter/index.php">Dokter<i class="fa-solid fa-user-doctor"></i></a></li>
                        </ul>
                    </li>
                    <li class="Btn-transaksi btn-list">
                        <span>Pendaftaran</span>
                        <ul class="transaksi navList">
                            <li><a href="../transaksi/index.php">Pendaftaran<i class="fa-solid fa-clipboard-list"></i></a></li>
                        </ul>
                    </li>
                    <li class="Btn-laporan btn-list">
                        <span>Laporan</span>
                        <ul class="laporan navList">
                            <li><a href="../laporan/index.php#pasien">Laporan Pasien<i class="fa-solid fa-file-lines"></i></a></li>
                            <li><a href="../laporan/index.php#pengunjung">Laporan Kunjungan<i class="fa-solid fa-id-card-clip"></i></a></li>
                        </ul>
                    </li>
                    <li class="Btn-pengaturan btn-list">
                        <span>Beranda</span>
                        <ul class="pengaturan navList">
                            <li><a href="../home/home.php">Profil Rumah Sakit<i class="fa-solid fa-hospital"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bottom-side">
            <div class="btn-sistem">
                <button><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
            <div class="profile-admin">
                <img src="" alt="">
                <span>Admin 3</span>
            </div>
        </div>
     </nav>
    <!-- navbar end -->
    <!-- content area -->
     <div class="contentContainer">
        <div class="about-poliKlinik">
            <div class="container-box about-1">
                <h2>Jumlah Poli Klinik</h2>
                <p>Halaman Poliklinik digunakan untuk mengelola seluruh data poli yang tersedia di rumah sakit, termasuk informasi dokter, jadwal praktik, jumlah pasien, dan status operasional setiap poli. Halaman ini membantu administrator dalam memantau dan mengatur layanan kesehatan secara lebih efektif dan terstruktur.</p>
                <h3>Jumlah Ruangan :</h3>
                <ul>
                    <li>poli Anak
                        <span>01-10</span>
                    </li>
                    <li>Poli Mata
                        <span>01-13</span>
                    </li>
                    <li>Poli Umum
                        <span>01-22</span>
                    </li>
                    <li>Poli THT
                        <span>01-20</span>
                    </li>
                    <li>Poli Bedah
                        <span>01-30</span>
                    </li>
                    <li>Poli Saraf
                        <span>01-100</span>
                    </li>
                </ul>
            </div>
            <div class="container-box about-2">
                <h3>Jumlah Dokter Perpoli :</h3>
                <ul>
                    <li>poli Anak
                        <span>10</span>
                    </li>
                    <li>Poli Mata
                        <span>10</span>
                    </li>
                    <li>Poli Umum
                        <span>10</span>
                    </li>
                    <li>Poli THT
                        <span>10</span>
                    </li>
                    <li>Poli Bedah
                        <span>10</span>
                    </li>
                    <li>Poli Saraf
                        <span>10</span>
                    </li>
                </ul>
                <h3>Jumlah Pasien Perpoli :</h3>
                <ul>
                    <li>poli Anak
                        <span>10</span>
                    </li>
                    <li>Poli Mata
                        <span>10</span>
                    </li>
                    <li>Poli Umum
                        <span>10</span>
                    </li>
                    <li>Poli THT
                        <span>10</span>
                    </li>
                    <li>Poli Bedah
                        <span>10</span>
                    </li>
                    <li>Poli Saraf
                        <span>10</span>
                    </li>
                </ul>
            </div>
            <div class="container-box about-3">

            </div>
        </div>
        <div class="dokter-poli">
            <div class="btn-navigasi">
                <div class="search">
                    <form action="">
                        <input type="text" name="search" placeholder="search list">
                        <button type="submit" name="find">Search</button>
                    </form>
                </div>
                <div class="filter">
                    <button>Semua</button>
                    <button>Poli Bedah</button>
                    <button>Poli Anak</button>
                    <button>Poli THT</button>
                    <button>Poli Mata</button>
                    <button>Poli Umum</button>
                    <button>Poli Saraf</button>
                </div>
            </div>
            <div class="tabel-list">
                <div class="list-data">
                    <ul>
                        <li>1</li>
                        <li>Nama</li>
                        <li>99280183</li>
                        <li>Spesialis</li>
                        <li>poli Klinik</li>
                        <li><button><a href="">selengkapnya</a></button></li>
                    </ul>
                </div>
            </div>
        </div>
     </div>
    <!-- content end -->
    </div>
</body>
</html>