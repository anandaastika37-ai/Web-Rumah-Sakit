<?php

include '../funtion/funtion.php';

$dataPasien = query("SELECT
        p.*,
        rm.diagnosa_dokter,
        rm.dokter_menangani,
        rm.tanggal_diperiksa
    FROM pasien p
    LEFT JOIN `riwayat_medis_pasien` rm
        ON p.id_pasien = rm.id_pasien
");
if(isset($_POST['hapus'])){
    if(hapusDataPasien($_POST['hapus'])){
         echo "<script>
        alert('Data berhasil di dihapus');
        document.location.href = 'index.php'
        </script>";
    }
}

if(isset($_POST['find'])){
    $dataPasien = searchPasien($_POST['search']);
}

$jumlahPasien = query("SELECT * FROM pasien");
$lakilaki = query("SELECT * FROM pasien WHERE gender = 'Laki-laki'");
$perempuan = query("SELECT * FROM pasien WHERE gender = 'Perempuan'");

$golonganDarah = ['O' , 'A' , 'B' , 'AB' , 'tidak diketahui'];

$O = query("SELECT * FROM pasien WHERE golongan_darah = '$golonganDarah[0]'");
$A = query("SELECT * FROM pasien WHERE golongan_darah = '$golonganDarah[1]'");
$B = query("SELECT * FROM pasien WHERE golongan_darah = '$golonganDarah[2]'");
$AB = query("SELECT * FROM pasien WHERE golongan_darah = '$golonganDarah[3]'");
$tidakTahu = query("SELECT * FROM pasien WHERE golongan_darah = '$golonganDarah[4]'");

$pekerjaan = ['PNS' , 'Wirausaha' , 'Kariawan Swasta' , 'Mahasiswa' , 'Pelajar' , 'Lainnya'];

$pns = query("SELECT * FROM pasien WHERE pekerjaan = '$pekerjaan[0]'");
$wirausaha = query("SELECT * FROM pasien WHERE pekerjaan = '$pekerjaan[1]'");
$karyawan = query("SELECT * FROM pasien WHERE pekerjaan = '$pekerjaan[2]'");
$mahasiswa = query("SELECT * FROM pasien WHERE pekerjaan = '$pekerjaan[3]'");
$pelajar = query("SELECT * FROM pasien WHERE pekerjaan = '$pekerjaan[4]'");
$lainnya = query("SELECT * FROM pasien WHERE pekerjaan = '$pekerjaan[5]'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pasien</title>
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
                            <li><a href="./index.php">Pasien<i class="fa-solid fa-bed"></i></a></li>
                            <li><a href="../poliKlinik/index.php">Poli Klinik<i class="fa-solid fa-house-medical"></i></a></li>
                            <li><a href="../dokter/index.php">Dokter<i class="fa-solid fa-user-doctor"></i></a></li>
                        </ul>
                    </li>
                    <li class="Btn-transaksi btn-list">
                        <span>Transaksi</span>
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
        <div class="analisa-data-container">
            <div class="data-container analisa-1">
                <div class="deskripsi">
                    <h3>Jumlah Data Pasien Saat Ini</h3>
                    <span><?php if(mysqli_num_rows($jumlahPasien) > 0){ echo mysqli_num_rows($jumlahPasien); } else { echo '0'; }?> Pasien</span>
                    <p>Informasi jumlah pasien memberikan gambaran mengenai total pasien yang terdaftar dan aktif dalam sistem. Data ini membantu pihak rumah sakit dalam menganalisis tingkat kunjungan, merencanakan kebutuhan sumber daya medis, serta meningkatkan kualitas pelayanan kesehatan.</p>
                </div>
            </div>
            <div class="data-container analisa-2">
                <h3>Pasien Sesuai umur</h3>
                <span>Rata-rata Umur Pasien :</span>
                <span>30th</span>
            </div>
            <div class="data-container analisa-3">
                <h3>Pasien Sesuai Jenis Kelamin</h3>
                <ul>
                    <li>Laki-laki :
                        <span>
                            <?php if(mysqli_num_rows($lakilaki) > 0){ echo mysqli_num_rows($lakilaki); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Perempuan :
                        <span>
                            <?php if(mysqli_num_rows($perempuan) > 0){ echo mysqli_num_rows($perempuan); } else { echo '0'; }?>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="data-container analisa-4">
                <h3>Jumlah Data Pasien Perhari</h3>
            </div>
            <div class="data-container analisa-5">
                <h3>Pasien Sesuai Gologan Darah</h3>
                <ul>
                    <li>Golongan Darah A :
                        <span>
                            <?php if(mysqli_num_rows($A) > 0){ echo mysqli_num_rows($A); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Golongan Darah B :
                        <span>
                            <?php if(mysqli_num_rows($B) > 0){ echo mysqli_num_rows($B); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Golongan Darah AB :
                        <span>
                            <?php if(mysqli_num_rows($AB) > 0){ echo mysqli_num_rows($AB); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Golongan Darah O :
                        <span>
                            <?php if(mysqli_num_rows($O) > 0){ echo mysqli_num_rows($O); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Tidak Diketahui :
                        <span>
                            <?php if(mysqli_num_rows($tidakTahu) > 0){ echo mysqli_num_rows($tidakTahu); } else { echo '0'; }?>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="data-container analisa-6">
                <h3>Pasien Sesuai Pekerjaan</h3>
                <ul>
                    <li>PNS :
                        <span>
                            <?php if(mysqli_num_rows($pns) > 0){ echo mysqli_num_rows($pns); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Wirausaha :
                        <span>
                            <?php if(mysqli_num_rows($wirausaha) > 0){ echo mysqli_num_rows($wirausaha); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Kariawan Swasta :
                        <span>
                            <?php if(mysqli_num_rows($karyawan) > 0){ echo mysqli_num_rows($karyawan); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Mahasiswa :
                        <span>
                            <?php if(mysqli_num_rows($mahasiswa) > 0){ echo mysqli_num_rows($mahasiswa); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Pelajar :
                        <span>
                            <?php if(mysqli_num_rows($pelajar) > 0){ echo mysqli_num_rows($pelajar); } else { echo '0'; }?>
                        </span>
                    </li>
                    <li>Lainnya :
                        <span>
                            <?php if(mysqli_num_rows($lainnya) > 0){ echo mysqli_num_rows($lainnya); } else { echo '0'; }?>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="data-container analisa-7">
                <h3>Pasien Sesuai penyakit</h3>
            </div>
        </div>
        <div class="data-pasien-container">
            <div class="btn-crud">
                <div class="search">
                    <form action="" method="post">
                        <input type="text" id="search" name="search" placeholder="search">
                        <button type="submit" name="find">Search</button>
                    </form>
                </div>
                <div class="create">
                    <button><a href="tambah.php">+Tambah</a></button>
                </div>
            </div>
            <div class="container-data">
                <?php foreach($dataPasien as $data) : ?>
                <div class="card">
                    <div class="profile-pasien">
                        <img src="img/pasien.jpg" alt="">
                    </div>
                    <div class="data-singkat-pasien">
                        <ul>
                            <li><?= $data['nama_panggilan_pasien'] ?></li>
                            <li>ID <?= $data['nomor_id_pasien'] ?></li>
                            <li>
                            <?php $tanggalLahir = $data['tanggal_lahir_pasien'];
                                $tanggal = date_create($tanggalLahir);
                                $tanggalSekarang = date_create('Today');
                                $umur = date_diff($tanggal , $tanggalSekarang);
                                echo $umur->y;
                            ?> th</li>
                            <li><?= $data['tempat_lahir_pasien'] ?></li>
                            <li><?= $data['pekerjaan'] ?></li>
                        </ul>
                        <div class="btn-profil">
                            <button><a href="detailData.php?id=<?= $data['id_pasien'] ?>">Selengkapnya</a></button>
                            <button><a href="editDataPasien.php?id=<?= $data['id_pasien'] ?>"><i class="fa-regular fa-pen-to-square"></i></a></button>
                            <form action="" method="post">
                                <button name="hapus" type="submit" value="<?= $data['id_pasien'] ?>"><a href=""><i class="fa-regular fa-trash-can"></i></a></button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="rekam-medis-container">
            <h2>Kelola Rekam Medis Pasien</h2>
            <div class="tabel-data-container">
                <?php $i = 0;?>
                <?php foreach($dataPasien as $data) :?>
                <div class="list-data-pasien">
                    <ul>
                        <li><?= $i + 1?></li>
                        <li><?= $data['nama_panggilan_pasien'] ?></li>
                        <li><?= $data['nomor_id_pasien'] ?></li>
                        <li><?= !empty($data['diagnosa_dokter'])? $data['diagnosa_dokter']: 'Belum Ada Rekam Medis'?></li>
                        <li><?= !empty($data['dokter_menangani'])? 'dr. '.$data['dokter_menangani']: 'Belum Ditangani' ?></li>
                        <li><?= !empty($data['tanggal_diperiksa'])? $data['tanggal_diperiksa']: 'Available'?></li>
                        <li>
                            <button><a href="tambahRM.php?id=<?= $data['id_pasien'] ?>">Tambah</a></button>
                            <button <?= empty($data['diagnosa_dokter'])? 'hidden' : '' ?> ><a href="detailRM.php?id=<?= $data['id_pasien'] ?>">Lihat</a></button>
                            <button <?= empty($data['diagnosa_dokter'])? 'hidden' : '' ?> ><a href="editRM.php?id=<?= $data['id_pasien'] ?>">Edit</a></button>

                        </li>
                    </ul>
                </div>
                <?php $i++;?>
                <?php endforeach; ?>
            </div>
        </div>
     </div>
    <!-- content end -->
    </div>
</body>
</html>