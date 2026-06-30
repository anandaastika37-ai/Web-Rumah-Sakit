<?php

include '../funtion/funtion.php' ;
$dataDokter = query('SELECT * FROM dokter');
if(isset($_POST['hapus'])){
    if(Hapus($_POST['hapus'])){
        echo "<script>
        alert('Data berhasil di hapus');
        document.location.href = 'index.php'
        </script>";
    }
}

if(isset($_POST['find'])){
    $dataDokter = searchDokter($_POST['search']);
}

$hari = ['senin' , 'selasa' , 'rabu' , 'kamis' , 'jumat' , 'sabtu' , 'minggu'];

$jadwalSenin = query("SELECT * FROM dokter WHERE hari_praktik = '$hari[0]'");
$jadwalSelasa = query("SELECT * FROM dokter WHERE hari_praktik = '$hari[1]'");
$jadwalRabu = query("SELECT * FROM dokter WHERE hari_praktik = '$hari[2]'");
$jadwalKamis = query("SELECT * FROM dokter WHERE hari_praktik = '$hari[3]'");
$jadwalJumat = query("SELECT * FROM dokter WHERE hari_praktik = '$hari[4]'");
$jadwalSabtu = query("SELECT * FROM dokter WHERE hari_praktik = '$hari[5]'");
$jadwalMinggu = query("SELECT * FROM dokter WHERE hari_praktik = '$hari[6]'");

$spesialis = ['Umum' , 'Bedah' , 'Mata' , 'Anak' , 'THT' , 'Saraf'] ;

$umum = query("SELECT * FROM dokter WHERE spesialis = '$spesialis[0]'");
$bedah = query("SELECT * FROM dokter WHERE spesialis = '$spesialis[1]'");
$mata = query("SELECT * FROM dokter WHERE spesialis = '$spesialis[2]'");
$anak = query("SELECT * FROM dokter WHERE spesialis = '$spesialis[3]'");
$tht = query("SELECT * FROM dokter WHERE spesialis = '$spesialis[4]'");
$saraf = query("SELECT * FROM dokter WHERE spesialis = '$spesialis[5]'");

$lakiLaki = query("SELECT * FROM dokter WHERE gender = 'laki-laki'");
$perempuan = query("SELECT * FROM dokter WHERE gender = 'Perempuan'");

$lulusan= ['S1 Kedokteran' , 'Spesialis (Sp.)' , 'Subspesialis'] ;

$S1 = query("SELECT * FROM dokter WHERE lulusan = '$lulusan[0]'");
$SP = query("SELECT * FROM dokter WHERE lulusan = '$lulusan[1]'");
$subSp = query("SELECT * FROM dokter WHERE lulusan = '$lulusan[2]'");

$kepegawaian = ['Tetap' , 'Kontrak' , 'Magang'] ;
$tetap = query("SELECT * FROM dokter WHERE kepegawaian = '$kepegawaian[0]'");
$kontrak = query("SELECT * FROM dokter WHERE kepegawaian = '$kepegawaian[1]'");
$magang = query("SELECT * FROM dokter WHERE kepegawaian = '$kepegawaian[2]'");

$status = ['Aktif' , 'Cuti' , 'Pensiun'] ;
$aktif = query("SELECT * FROM dokter WHERE status_aktif = '$status[0]'");
$cuti = query("SELECT * FROM dokter WHERE status_aktif = '$status[1]'");
$pensiun = query("SELECT * FROM dokter WHERE status_aktif = '$status[2]'");

$poli = ['Poli Umum' , 'Poli Mata' , 'Poli Anak' , 'Poli THT' , 'Poli Saraf' , 'Poli Bedah'] ;

$poliUmum = query("SELECT * FROM dokter WHERE poli = '$poli[0]'");
$poliMata = query("SELECT * FROM dokter WHERE poli = '$poli[1]'");
$poliAnak = query("SELECT * FROM dokter WHERE poli = '$poli[2]'");
$poliTht = query("SELECT * FROM dokter WHERE poli = '$poli[3]'");
$poliSaraf = query("SELECT * FROM dokter WHERE poli = '$poli[4]'");
$poliBedah = query("SELECT * FROM dokter WHERE poli = '$poli[5]'");

$digramSpesialis = query("SELECT spesialis , COUNT(*) AS jumlah FROM dokter GROUP BY spesialis");

$label = [];
$data = [];

foreach($digramSpesialis as $row){
    $label[] = $row['spesialis'];
    $data[] = $row['jumlah'];
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
        <div class="analisa-data">
            <div class="container-data jmlh-dokter">
                <div class="icon">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <div class="ket-jmlh-dokter">
                    <h3>Jumlah Data Dokter :</h3>
                    <h4>Jumlah Semua Data Dokter :  <?= mysqli_num_rows($dataDokter) ?></h4>
                    <p>Rumah sakit memiliki <?= mysqli_num_rows($dataDokter) ?> dokter yang terdiri dari dokter umum dan dokter spesialis yang siap memberikan pelayanan kesehatan kepada pasien. Jumlah ini menunjukkan kapasitas tenaga medis yang tersedia untuk mendukung pelayanan rawat jalan, rawat inap, maupun tindakan medis lainnya.</p>
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
                                <span>
                                    <?php if(mysqli_num_rows($anak) > 0) { echo mysqli_num_rows($anak);} else{echo '0' ;} ?> 
                                </span>
                            </li>
                            <li>Dokter Mata
                                <span>
                                    <?php if(mysqli_num_rows($mata) > 0) { echo mysqli_num_rows($mata);} else{echo '0' ;} ?> 
                                </span>
                            </li>
                            <li>Dokter Umum
                                <span>
                                    <?php if(mysqli_num_rows($umum) > 0) { echo mysqli_num_rows($umum);} else{echo '0' ;} ?> 
                                </span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Dokter THT
                            <span>
                                <?php if(mysqli_num_rows($tht) > 0) { echo mysqli_num_rows($tht);} else{echo '0' ;} ?> 
                            </span>
                            </li>
                            <li>
                                Dokter Bedah
                                <span>
                                    <?php if(mysqli_num_rows($bedah) > 0) { echo mysqli_num_rows($bedah);} else{echo '0' ;} ?> 
                                </span>
                            </li>
                            <li>
                                Dokter Saraf
                                <span>
                                    <?php if(mysqli_num_rows($saraf) > 0) { echo mysqli_num_rows($saraf);} else{echo '0' ;} ?> 
                                </span>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="container-data jumlah-dokter-gender">
                <div class="box-2">
                    <ul>
                        <li>
                            Laki-Laki
                            <span><?php if(mysqli_num_rows($lakiLaki) > 0) { echo mysqli_num_rows($lakiLaki);} else{echo '0' ;} ?> </span>
                        </li>
                        <li>
                            Perempuan
                            <span><?php if(mysqli_num_rows($perempuan) > 0) { echo mysqli_num_rows($perempuan);} else{echo '0' ;} ?> </span>
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
                            <span>
                                <?php if(mysqli_num_rows($S1) > 0) { echo mysqli_num_rows($S1);} else{echo '0' ;} ?>
                            </span>
                        </li>
                        <li>Spesialis (Sp.)
                            <span>
                                <?php if(mysqli_num_rows($SP) > 0) { echo mysqli_num_rows($SP);} else{echo '0' ;} ?>
                            </span>
                        </li>
                        <li>Subspesialis
                            <span>
                                <?php if(mysqli_num_rows($subSp) > 0) { echo mysqli_num_rows($subSp);} else{echo '0' ;} ?>
                            </span>
                        </li>
                    </ul>
                    <ul>
                        <li>Tetap
                            <span>
                                <?php if(mysqli_num_rows($tetap) > 0) { echo mysqli_num_rows($tetap);} else{echo '0' ;} ?>
                            </span>
                        </li>
                        <li>Magang
                            <span>
                                <?php if(mysqli_num_rows($magang) > 0) { echo mysqli_num_rows($magang);} else{echo '0' ;} ?>
                            </span>
                        </li>
                        <li>Kontrak
                            <span>
                                <?php if(mysqli_num_rows($kontrak) > 0) { echo mysqli_num_rows($kontrak);} else{echo '0' ;} ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-data grafik grafik-dokter-pertahun">

            </div>
            <div class="container-data grafik grafik-persentase">
                <canvas id="mychart">

                </canvas>
            </div>
        </div>
        <div class="data-dokter-container">
            <div class="cr-data">
                <div class="search-dokter">
                    <form action="" method="post">
                        <input type="text" id="search" name="search" placeholder="search">
                        <button type="submit" name="find">Search</button>
                    </form>
                </div>
                <div class="btn-interaktif">
                    <button><a href="formTambahDokter.php">+Tambah</a></button>
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
                        <h4>Spesialis <?= $data['spesialis'] ?></h4>
                        <div class="btn-data">
                            <button class="selengkapnya"><a href="detailData.php?id=<?= $data['id_dokter'] ?>">Selengkapnya</a></button>
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
                                        <span> <?php if(mysqli_num_rows($aktif) > 0) { echo mysqli_num_rows($aktif);} else{echo '0' ;} ?></span>
                                    </li>
                                    <li>
                                        <h3>Cuti</h3>
                                        <span> <?php if(mysqli_num_rows($cuti) > 0) { echo mysqli_num_rows($cuti);} else{echo '0' ;} ?></span>
                                    </li>
                                    <li>
                                        <h3>Pensiun</h3>
                                        <span> <?php if(mysqli_num_rows($pensiun) > 0) { echo mysqli_num_rows($pensiun);} else{echo '0' ;} ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jadwal-container data-ruangan-poli">
                            <div class="box-5">
                                <ul>
                                    <li>Poli Anak <span>
                                        <span> <?php if(mysqli_num_rows($poliAnak) > 0) { echo mysqli_num_rows($poliAnak);} else{echo '0' ;} ?></span>
                                    </span></li>
                                    <li>Poli Mata <span>
                                        <span> <?php if(mysqli_num_rows($poliMata) > 0) { echo mysqli_num_rows($poliMata);} else{echo '0' ;} ?></span>
                                    </span></li>
                                    <li>Poli Umum <span>
                                        <span> <?php if(mysqli_num_rows($poliUmum) > 0) { echo mysqli_num_rows($poliUmum);} else{echo '0' ;} ?></span>
                                    </span></li>
            
                                </ul>
                                <ul>
                                    <li>Poli THT <span>
                                        <span> <?php if(mysqli_num_rows($poliTht) > 0) { echo mysqli_num_rows($poliTht);} else{echo '0' ;} ?></span>
                                    </span></li>
                                    <li>Poli Bedah <span>
                                        <span> <?php if(mysqli_num_rows($poliBedah) > 0) { echo mysqli_num_rows($poliBedah);} else{echo '0' ;} ?></span>
                                    </span></li>
                                    <li>Poli Saraf <span>
                                        <span> <?php if(mysqli_num_rows($poliSaraf) > 0) { echo mysqli_num_rows($poliSaraf);} else{echo '0' ;} ?></span>
                                    </span></li>
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
                                <?php if(mysqli_num_rows($jadwalSenin) == 0) : ?>
                                    <h1>tidak ada dokter pada di hari ini</h1>
                                <?php endif; ?>
                                <?php foreach($jadwalSenin as $senin) : ?>
                                <div class="list-jadwal">
                                    <img src="img/gambar-dokter.jpg" alt="">
                                    <h3>Dr <?= $senin['nama_panggilan_dokter'] ?></h3>
                                    <h4>Id : <?= $senin['nomor_dokter'] ?></h4>
                                    <h4>Ruangan <?= $senin['ruangan_praktik'] ?></h4>
                                    <h4><?= substr($senin['jam_mulai_praktik'],0,5) ?> - <?= substr($senin['jam_selesai_praktik'],0,5) ?></h4>
                                    <h4><?= $senin['nama_shift'] ?> </h4>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="jadwal selasa">
                            <div class="ket-waktu">
                                <h4>Selasa</h4>
                            </div>
                            <div class="tabel-jadwal">
                                <?php if(mysqli_num_rows($jadwalSelasa) == 0) : ?>
                                    <h1>tidak ada dokter pada di hari ini</h1>
                                <?php endif; ?>
                                <?php foreach($jadwalSelasa as $selasa) : ?>
                                <div class="list-jadwal">
                                    <img src="img/gambar-dokter.jpg" alt="">
                                    <h3>Dr <?= $selasa['nama_panggilan_dokter'] ?></h3>
                                    <h4>Id : <?= $selasa['nomor_dokter'] ?></h4>
                                    <h4>Ruangan <?= $selasa['ruangan_praktik'] ?></h4>
                                    <h4><?= substr($selasa['jam_mulai_praktik'],0,5) ?> - <?= substr($selasa['jam_selesai_praktik'],0,5) ?></h4>
                                    <h4><?= $selasa['nama_shift'] ?> </h4>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="jadwal rabu">
                            <div class="ket-waktu">
                                <h4>Rabu</h4>
                            </div>
                            <div class="tabel-jadwal">
                            <?php if(mysqli_num_rows($jadwalRabu) == 0) : ?>
                                <h1>tidak ada dokter pada di hari ini</h1>
                            <?php endif; ?>
                            <?php foreach($jadwalRabu as $rabu) : ?>
                                <div class="list-jadwal">
                                    <img src="img/gambar-dokter.jpg" alt="">
                                    <h3>Dr <?= $rabu['nama_panggilan_dokter'] ?></h3>
                                    <h4>Id : <?= $rabu['nomor_dokter'] ?></h4>
                                    <h4>Ruangan <?= $rabu['ruangan_praktik'] ?></h4>
                                    <h4><?= substr($rabu['jam_mulai_praktik'],0,5) ?> - <?= substr($rabu['jam_selesai_praktik'],0,5) ?></h4>
                                    <h4><?= $rabu['nama_shift'] ?> </h4>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="jadwal kamis">
                            <div class="ket-waktu">
                                <h4>Kamis</h4>
                            </div>
                            <div class="tabel-jadwal">
                                <?php if(mysqli_num_rows($jadwalKamis) == 0) : ?>
                                    <h1>tidak ada dokter pada di hari ini</h1>
                                <?php endif; ?>
                                <?php foreach($jadwalKamis as $kamis) : ?>
                                <div class="list-jadwal">
                                    <img src="img/gambar-dokter.jpg" alt="">
                                    <h3>Dr <?= $kamis['nama_panggilan_dokter'] ?></h3>
                                    <h4>Id : <?= $kamis['nomor_dokter'] ?></h4>
                                    <h4>Ruangan <?= $kamis['ruangan_praktik'] ?></h4>
                                    <h4><?= substr($kamis['jam_mulai_praktik'],0,5) ?> - <?= substr($kamis['jam_selesai_praktik'],0,5) ?></h4>
                                    <h4><?= $kamis['nama_shift'] ?> </h4>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="jadwal jumat">
                            <div class="ket-waktu">
                                <h4>Jumat</h4>
                            </div>
                            <div class="tabel-jadwal">
                                <?php foreach($jadwalJumat as $jumat) : ?>
                                <?php if(mysqli_num_rows($jadwalJumat) == 0) : ?>
                                    <h1>tidak ada dokter pada di hari ini</h1>
                                <?php endif; ?>
                                <div class="list-jadwal">
                                    <img src="img/gambar-dokter.jpg" alt="">
                                    <h3>Dr <?= $jumat['nama_panggilan_dokter'] ?></h3>
                                    <h4>Id : <?= $jumat['nomor_dokter'] ?></h4>
                                    <h4>Ruangan <?= $jumat['ruangan_praktik'] ?></h4>
                                    <h4><?= substr($jumat['jam_mulai_praktik'], 0 , 5) ?> - <?= substr($jumat['jam_selesai_praktik'],0,5) ?></h4>
                                    <h4><?= $jumat['nama_shift'] ?> </h4>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="jadwal sabtu">
                            <div class="ket-waktu">
                                <h4>Sabtu</h4>
                            </div>
                            <div class="tabel-jadwal">
                                <?php if(mysqli_num_rows($jadwalSabtu) == 0) : ?>
                                    <h1>tidak ada dokter pada di hari ini</h1>
                                <?php endif; ?>
                                <?php foreach($jadwalSabtu as $sabtu) : ?>
                                <div class="list-jadwal">
                                    <img src="img/gambar-dokter.jpg" alt="">
                                    <h3>Dr <?= $sabtu['nama_panggilan_dokter'] ?></h3>
                                    <h4>Id : <?= $sabtu['nomor_dokter'] ?></h4>
                                    <h4>Ruangan <?= $sabtu['ruangan_praktik'] ?></h4>
                                    <h4><?= substr($sabtu['jam_mulai_praktik'] , 0 , 5) ?> - <?= substr($sabtu['jam_selesai_praktik'],0,5) ?></h4>
                                    <h4><?= $sabtu['nama_shift'] ?> </h4>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="jadwal minggu">
                            <div class="ket-waktu">
                                <h4>Minggu</h4>
                            </div>
                            <div class="tabel-jadwal">
                                <?php if(mysqli_num_rows($jadwalMinggu) == 0) : ?>
                                    <h1>tidak ada dokter pada di hari ini</h1>
                                <?php endif; ?>
                                <?php foreach($jadwalMinggu as $minggu) : ?>
                                <div class="list-jadwal">
                                    <img src="img/gambar-dokter.jpg" alt="">
                                    <h3>Dr <?= $minggu['nama_panggilan_dokter'] ?></h3>
                                    <h4>Id : <?= $minggu['nomor_dokter'] ?></h4>
                                    <h4>Ruangan <?= $minggu['ruangan_praktik'] ?></h4>
                                    <h4><?= substr($minggu['jam_mulai_praktik'] , 0 ,5 ) ?> - <?= substr($minggu['jam_selesai_praktik'],0,5) ?></h4>
                                    <h4><?= $minggu['nama_shift'] ?> </h4>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                 </div>
                 </div>
                
            </div>
        </div>
    <!-- content end -->
    </div>

</body>
</html>
