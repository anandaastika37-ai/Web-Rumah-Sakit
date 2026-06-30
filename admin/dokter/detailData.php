<?php

include '../funtion/funtion.php';

$id = $_GET['id'];
$detailData = query("SELECT * FROM dokter WHERE id_dokter = $id");

$datail = mysqli_fetch_assoc($detailData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dokter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="detail-container">
        <div class="detail">
            <div class="detail-img">
                <img src="img/gambar-dokter.jpg" alt="">
                <button><a href="index.php">back</a></button>
            </div>
            <div class="detail-des">
                <div class="ket">
                    <h3>Dr.<?= $datail['nama_panggilan_dokter'] ?></h3>
                    <ul>
                        <li><i class="fa-solid fa-user-doctor"></i> <?= $datail['nama_lengkap_dokter'] ?></li>
                        <li><i class="fa-regular fa-id-card"></i> <?= $datail['nomor_dokter'] ?></li>
                        <li><i class="fa-solid fa-mars-and-venus"></i> <?= $datail['gender'] ?></li>
                        <li><i class="fa-solid fa-stethoscope"></i> Dokter <?= $datail['spesialis'] ?></li>
                        <li><i class="fa-regular fa-building"></i> <?= $datail['tempat_lahir'] ?></li>
                        <li><i class="fa-solid fa-cake-candles"></i> <?= $datail['tanggal_lahir'] ?></li>
                    </ul>
                </div>
                <div class="ket">
                    <ul>
                        <li><i class="fa-solid fa-building-user"></i> <?= $datail['poli'] ?></li>
                        <li><i class="fa-solid fa-user-clock"></i> <?= $datail['jam_mulai_praktik'] ?> - <?= $datail['jam_selesai_praktik'] ?></li>
                        <li><i class="fa-solid fa-people-roof"></i> Ruangan <?= $datail['ruangan_praktik'] ?></li>
                        <li><i class="fa-solid fa-location-dot"></i> <?= $datail['alamat'] ?></li>
                        <li><i class="fa-solid fa-people-roof"></i> <?= $datail['hari_praktik'] ?></li>
                    </ul>
                </div>
                <div class="ket">
                    <ul>
                      <li><i class="fa-solid fa-at"></i> <?= $datail['email'] ?></li>  
                      <li><i class="fa-solid fa-phone"></i> <?= $datail['no_hp'] ?></li>  
                      <li><i class="fa-solid fa-star"></i> <?= $datail['status_aktif'] ?></li>  
                      <li><i class="fa-solid fa-graduation-cap"></i> <?= $datail['lulusan'] ?></li>  
                      <li><i class="fa-solid fa-user-gear"></i> Pegawai <?= $datail['kepegawaian'] ?></li>  
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>