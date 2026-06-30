<?php

include '../funtion/funtion.php';
$dataDokter = query("SELECT * FROM dokter");
$dokterPoliAnak = query("SELECT * FROM dokter WHERE poli = 'Poli Anak'");
$dokterPoliBedah = query("SELECT * FROM dokter WHERE poli = 'Poli Bedah'");
$dokterPoliSaraf = query("SELECT * FROM dokter WHERE poli = 'Poli Saraf'");
$dokterPoliTHT = query("SELECT * FROM dokter WHERE poli = 'Poli THT'");
$dokterPoliUmum = query("SELECT * FROM dokter WHERE poli = 'Poli Umum'");
$dokterPoliMata = query("SELECT * FROM dokter WHERE poli = 'Poli Mata'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
                            <li><a href="./home.php">Profil Rumah Sakit<i class="fa-solid fa-hospital"></i></a></li>
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
         <div class="aboutHostpital">
            <div class="deskripsi-about">
                <h1>Bali <span>Hospital</span></h1>
                <h3>“ Pelayanan Kesehatan Terbaik untuk Anda dan Keluarga. “</h3>
                <p>Kami berkomitmen memberikan layanan kesehatan yang profesional, cepat, dan terpercaya. Dengan dukungan dokter berpengalaman serta fasilitas modern, kami siap membantu menjaga kesehatan Anda setiap saat.</p>
            </div>
            <div class="img-about">
                <img src="img/hospital.jpg" alt="">
            </div>
         </div>
         <div class="visi-misi">
            <div class="visi-img">
                <img src="img/room.jpg" alt="" class="room1">
                <img src="img/room2.jpg" alt="" class="room2">
            </div>
            <div class="visi-misi-side">
                <div class="box visi">
                    <h3><i class="fa-solid fa-hospital-user"></i> Visi</h3>
                    <h5>"Menjadi rumah sakit terpercaya yang memberikan pelayanan kesehatan berkualitas, profesional, dan berorientasi pada keselamatan serta kepuasan pasien."</h5>
                    <p>Visi ini menunjukkan tekad rumah sakit untuk memberikan pelayanan kesehatan yang berkualitas dan terpercaya dengan mengutamakan keselamatan, kenyamanan, serta kepuasan pasien dalam setiap layanan yang diberikan.</p>
                </div>
                <div class="box misi">
                    <h3><i class="fa-solid fa-hospital"></i></i> Misi</h3>
                    <ol>
                        <li>Memberikan pelayanan kesehatan yang profesional dan berkualitas.</li>
                        <li>Menyediakan fasilitas kesehatan yang modern dan nyaman.</li>
                        <li>Mengutamakan keselamatan dan kepuasan pasien.</li>
                        <li>Mengembangkan sumber daya manusia yang kompeten dan berintegritas.</li>
                        <li>Memanfaatkan teknologi untuk mendukung pelayanan yang efektif dan efisien.</li>
                    </ol>
                </div>
            </div>
         </div>
         <div class="informasi-hospital">
            <div class="box-info dokter">
                <div class="gambar">
                    <img src="img/dokter.png" alt="" width="200px">
                </div>
                    <div class="data">
                    <h3>Dokter</h3>
                    <h4><?php if(mysqli_num_rows($dataDokter) > 0){ echo mysqli_num_rows($dataDokter); } else {echo '0';} ?></h4>
                    <div class="container-jenis">
                        <div class="jenis-jenis-dokter">
                            <h5>Dokter Umum</h5>
                            <h4><?php if(mysqli_num_rows($dokterPoliUmum) > 0){ echo mysqli_num_rows($dokterPoliUmum); } else {echo '0';} ?></h4>
                        </div>
                        <div class="jenis-jenis-dokter">
                            <h5>Dokter Saraf</h5>
                            <h4><?php if(mysqli_num_rows($dokterPoliSaraf) > 0){ echo mysqli_num_rows($dokterPoliSaraf); } else {echo '0';} ?></h4>
                        </div>
                        <div class="jenis-jenis-dokter">
                            <h5>Dokter Anak</h5>
                            <h4><?php if(mysqli_num_rows($dokterPoliAnak) > 0){ echo mysqli_num_rows($dokterPoliAnak); } else {echo '0';} ?></h4>
                        </div>
                        <div class="jenis-jenis-dokter">
                            <h5>Dokter Mata</h5>
                            <h4><?php if(mysqli_num_rows($dokterPoliMata) > 0){ echo mysqli_num_rows($dokterPoliMata); } else {echo '0';} ?></h4>
                        </div>
                        <div class="jenis-jenis-dokter">
                            <h5>Dokter Bedah</h5>
                            <h4><?php if(mysqli_num_rows($dokterPoliBedah) > 0){ echo mysqli_num_rows($dokterPoliBedah); } else {echo '0';} ?></h4>
                        </div>
                        <div class="jenis-jenis-dokter">
                            <h5>Dokter THT</h5>
                            <h4><?php if(mysqli_num_rows($dokterPoliTHT) > 0){ echo mysqli_num_rows($dokterPoliTHT); } else {echo '0';} ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-info perawat">
                <div class="gambar">
                    <img src="img/perawat.png" alt="" width="300px">
                </div>
                <div class="data">
                    <h3>Perawat</h3>
                    <h4>200</h4>
                    <div class="container-jenis">
                        <div class="gender">
                            <h4>Laki - laki</h4> 
                            <h3>100</h3>
                        </div>
                        <div class="gender">
                            <h4>Perempuan</h4>
                            <h3>100</h3>
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
    <!-- conten end -->
    </div>
</body>
</html>