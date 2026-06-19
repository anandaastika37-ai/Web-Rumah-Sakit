<?php

include '../funtion/funtion.php' ;
$dataDokter = query('SELECT * FROM dokter');
if(isset($_POST['hapus'])){
    if(Hapus($_POST['hapus'])){
        echo "<script>
        alert('Data berhasil di dihapus');
        document.location.href = 'index.php'
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dokter</title>
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
                            <li><a href="./index.php">Dokter<i class="fa-solid fa-user-doctor"></i></a></li>
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
                            <li><a href="../transaksi/index.php#pasien">Laporan Pasien<i class="fa-solid fa-file-lines"></i></a></li>
                            <li><a href="../transaksi/index.php#pengunjung">Laporan Kunjungan<i class="fa-solid fa-id-card-clip"></i></a></li>
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
        <div class="analisa-data">
            <div class="container-data jmlh-dokter">
                <div class="icon">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <div class="ket-jmlh-dokter">
                    <h3>Jumlah Data Dokter :</h3>
                    <h4>Jumlah Semua Data Dokter :  35</h4>
                    <p>Rumah sakit memiliki 35 dokter yang terdiri dari dokter umum dan dokter spesialis yang siap memberikan pelayanan kesehatan kepada pasien. Jumlah ini menunjukkan kapasitas tenaga medis yang tersedia untuk mendukung pelayanan rawat jalan, rawat inap, maupun tindakan medis lainnya.</p>
                    <div class="icons">
                        <i class="fa-solid fa-briefcase-medical"></i>
                        <i class="fa-solid fa-hospital"></i>
                        <i class="fa-solid fa-syringe"></i>
                        <i class="fa-solid fa-stethoscope"></i>
                    </div>
                    <div class="btn-jmlh-dokter">
                        <button><a href="#profile-dokter">Data Dokter</a></button>
                        <button><a href="#kelola-jadwal-dokter">Liat Jadwal Dokter</a></button>

                    </div>
                </div>
            </div>
            <div class="container-data jmlh-dokter-jenis">
                    <div class="box-dok">
                        <ul>
                            <li>Dokter anak
                                <span>10</span>
                            </li>
                            <li>Dokter Mata
                                <span>10</span>
                            </li>
                            <li>Dokter Umum
                                <span>20</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Dokter THT
                            <span>15</span>
                            </li>
                            <li>
                                Dokter Bedah
                                <span>15</span>
                            </li>
                            <li>
                                Dokter Saraf
                                <span>15</span>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="container-data jumlah-dokter-gender">
                <div class="box-2">
                    <ul>
                        <li>
                            Laki-Laki
                            <span>23</span>
                        </li>
                        <li>
                            Perempuan
                            <span>15</span>
                        </li>
                    </ul>
                    <ul>
                        <li class="rata-umur">
                            <h4>Rata-rata Umur</h4>
                            <span>15 - 30</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-data status">
                <div class="box-3">
                    <ul>
                        <li>S1 Kedokteran
                            <span>20</span>
                        </li>
                        <li>Spesialis (Sp.)
                            <span>20</span>
                        </li>
                        <li>Subspesialis
                            <span>20</span>
                        </li>
                    </ul>
                    <ul>
                        <li>Tetap
                            <span>20</span>
                        </li>
                        <li>Magang
                            <span>20</span>
                        </li>
                        <li>Kontrak
                            <span>20</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-data grafik grafik-dokter-pertahun">

            </div>
            <div class="container-data grafik grafik-persentase">

            </div>
        </div>
        <div class="data-dokter-container">
            <div class="cr-data">
                <div class="search-dokter">
                    <form action="">
                        <input type="text" id="search" name="search" placeholder="search">
                        <button type="submit" name="find">Search</button>
                    </form>
                </div>
                <div class="btn-interaktif">
                    <button><a href="formTambahDokter.php">+Tambah</a></button>
                    <button><a href=""><i class="fa-solid fa-filter"></i>Filter</a></button>
                </div>
            </div>
            <div class="profile-dokter" id="profile-dokter" >
                <?php foreach($dataDokter as $data) :?>
                <div class="card-profile">
                    <div class="foto">
                        <img src="img/gambar-dokter.jpg" alt="">
                    </div>
                    <div class="data-singkat">
                        <h2>Dr.<?= $data['nama_panggilan_dokter'] ?></h2>
                        <span><?= $data['gender'] ?></span>
                        <h3><?php 
                        $tanggalLahir = $data['tanggal_lahir']; 
                        $tanggal = date_create($tanggalLahir);
                        $tanggalsekarang = date_create('Today');
                        $umur = date_diff($tanggal , $tanggalsekarang);
                        echo $umur->y;
                        ?>th</h3>
                        <h5>ID : <?= $data['nomor_dokter'] ?></h5>
                        <h5><?= $data['poli']?></h5>
                        <h4><?= $data['spesialis'] ?></h4>
                        <div class="btn-data">
                            <button class="selengkapnya"><a href="">Selengkapnya</a></button>
                            <button class="edit"><a href="formEditDokter.php?id=<?= $data['id_dokter'] ?>"><i class="fa-regular fa-pen-to-square"></i></a></button>
                        <form action="" method="post">
                            <button type="submit" name="hapus" value="<?= $data['id_dokter']; ?>" class="hapus"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="kelola-jadwal-dokter" id="kelola-jadwal-dokter">
            <div class="jadwal-container tabel-kelola-jadwal">
                <div class="header">
                    <h3>Kelola Jadwal Dokter</h3>
                </div>
                <div class="tabel-data">
                    <?php $i = 0; ?>
                    <?php foreach($dataDokter as $data) : ?>
                    <div class="list-data-dokter">
                        <h5><?= $i + 1 ?></h5>
                        <img src="img/gambar-dokter.jpg" alt="">
                        <h3>Dokter <?= $data['nama_panggilan_dokter'] ?></h3>
                        <h4>ID_<?= $data['nomor_dokter'] ?></h4>
                        <span>Ruangan <?= $data['ruangan_praktik'] ?></span>
                        <span><?= $data['jam_mulai_praktik'] ?> - <?= $data['jam_selesai_praktik'] ?></span>
                        <button><a href="kelolaJadwalDokter.php?id=<?= $data['id_dokter'] ?>"><i class="fa-solid fa-clock-rotate-left"></i>Atur Jadwal</a></button>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="jadwal-container data-dokter-aktif">
                <div class="box-4">
                    <h2>Data Status Dokter</h2>
                    <ul>
                        <li>
                            <h3>Aktif</h3>
                            <span>23</span>
                        </li>
                        <li>
                            <h3>Cuti</h3>
                            <span>23</span>
                        </li>
                        <li>
                            <h3>Pensiun</h3>
                            <span>23</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="jadwal-container data-ruangan-poli">
                <div class="box-5">
                    <ul>
                        <li>Poli Anak <span>15</span></li>
                        <li>Poli Mata <span>13</span></li>
                        <li>Poli Umum <span>12</span></li>

                    </ul>
                    <ul>
                        <li>Poli THT <span>10</span></li>
                        <li>Poli Bedah <span>25</span></li>
                        <li>Poli Saraf <span>14</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="jadwal-dokter">
            <div class="jadwal senin">
                <div class="ket-waktu">
                    <h4>Senin</h4>
                </div>
                <div class="tabel-jadwal">
                    <div class="list-jadwal">
                        <img src="img/gambar-dokter.jpg" alt="">
                        <h3>Nama Dokter</h3>
                        <h4>Id : 90920293</h4>
                        <h4>Ruangan 01</h4>
                        <h4>07:00 - 09:00</h4>
                    </div>
                    <div class="list-jadwal">
                        <img src="img/gambar-dokter.jpg" alt="">
                        <h3>Nama Dokter</h3>
                        <h4>Id : 90920293</h4>
                        <h4>Ruangan 01</h4>
                        <h4>07:00 - 09:00</h4>
                    </div>
                </div>
            </div>
            <div class="jadwal selasa">
                <div class="ket-waktu">
                    <h4>Selasa</h4>
                </div>
                <div class="tabel-jadwal">
                    
                </div>
            </div>
            <div class="jadwal rabu">
                <div class="ket-waktu">
                    <h4>Rabu</h4>
                </div>
                <div class="tabel-jadwal">
                    
                </div>
            </div>
            <div class="jadwal kamis">
                <div class="ket-waktu">
                    <h4>Kamis</h4>
                </div>
                <div class="tabel-jadwal">
                    
                </div>
            </div>
            <div class="jadwal jumat">
                <div class="ket-waktu">
                    <h4>Jumat</h4>
                </div>
                <div class="tabel-jadwal">
                    
                </div>
            </div>
            <div class="jadwal sabtu">
                <div class="ket-waktu">
                    <h4>Sabtu</h4>
                </div>
                <div class="tabel-jadwal">
                    
                </div>
            </div>
            <div class="jadwal minggu">
                <div class="ket-waktu">
                    <h4>Minggu</h4>
                </div>
                <div class="tabel-jadwal">
                    
                </div>
            </div>
        </div>
     </div>
    <!-- content end -->
    </div>
</body>
</html>