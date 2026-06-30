<?php
include '../funtion/funtion.php';

$datapasien = query("SELECT *
FROM pasien
WHERE status_kunjungan = 'Rawat Jalan'
AND poli_pasien IS NOT NULL
AND ruangan_pasien IS NOT NULL
");

$belumTerdaftar = query("SELECT *
FROM pasien
WHERE status_kunjungan = 'Rawat Jalan'
AND (poli_pasien IS NULL OR poli_pasien = '')
AND (ruangan_pasien IS NULL OR ruangan_pasien = '')
");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
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
                            <li><a href="./index.php">Pendaftaran<i class="fa-solid fa-clipboard-list"></i></a></li>
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
        <div class="grid-container">
            <div class="anterian-container container">
                <h3>Antrian Pasien</h3>
                <div class="antrian-tabel">
                    <?php $i = 1 ?>
                    <?php foreach($datapasien as $data) :?>
                    <div class="list-data-antrian">
                        <ul>
                            <li><?= $i ?></li>
                            <li><?= $data['nama_panggilan_pasien'] ?></li>
                            <li><?= $data['nomor_id_pasien'] ?></li>
                            <li><?= $data['alamat'] ?></li>
                            <li>[R.<?= $data['ruangan_pasien'] ?>]</li>
                            <li><?= $data['poli_pasien'] ?></li>
                            <li>
                                <button><a href="">Hapus</a></button>
                                <button><a href="">Edit</a></button>
                                <button><a href="">Selengkapnya</a></button>
                            </li>
                        </ul>
                    </div>
                    <?php $i++ ?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="pendaftaran-container container">
                <h3>Pendaftaran Pasien</h3>
                <div class="pendaftaran-tabel">
                    <?php $i = 1 ?>
                    <?php foreach($belumTerdaftar as $data) :?>
                    <div class="list-data-pendaftran">
                        <ul>
                            <li><?= $i ?></li>
                            <li><?= $data['nama_panggilan_pasien'] ?></li>
                            <li><?php $tanggalLahir = $data['tanggal_lahir_pasien'];
                                $tanggal = date_create($tanggalLahir);
                                $tanggalSekarang = date_create('Today');
                                $umur = date_diff($tanggal , $tanggalSekarang);
                                echo $umur->y;
                            ?> th</li>
                            <li><?= $data['gender'] ?></li>
                            <li><?= $data['alamat'] ?></li>
                            <li><button><a href="tambahKeAntrian.php?id=<?= $data['id_pasien'] ?>">Masukan</a></button>
                                <button><a href="">Tolak</a></button>
                                <button><a href="detailData.php?id=<?=  $data['id_pasien']?>">Lihat Data</a></button>
                            </li>
                        </ul>
                    </div>
                    <?php $i++ ?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- content end -->
    </div>
</body>
</html>