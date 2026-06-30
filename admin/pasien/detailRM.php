<?php

include '../funtion/funtion.php';

$id = (int)$_GET['id'];

$dataRM = query("SELECT *
FROM pasien
INNER JOIN riwayat_medis_pasien
ON pasien.id_pasien = riwayat_medis_pasien.id_pasien
WHERE pasien.id_pasien = $id
");

$datail = mysqli_fetch_assoc($dataRM);
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
                    <h3><?= $datail['nama_panggilan_pasien'] ?></h3>
                    <ul>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['tanggal_diperiksa'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['dokter_menangani'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['poli'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['keluhan_pasien'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['riwayat_penyakit_pasien'] ?></li>
                    </ul>
                </div>
                <div class="ket">
                    <ul>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['diagnosa_dokter'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['tindakan_medis'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['resep_obat'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['BB_pasien'] ?></li>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['TB_pasien'] ?></li>  
                    </ul>
                </div>
                <div class="ket">
                    <ul>
                        <li><i class="fa-solid fa-book"></i> <?= $datail['tekanan_darah'] ?></li>  
                        <li><i class="fa-solid fa-book"></i> <?= $datail['suhu_tubuh'] ?></li>  
                        <li><i class="fa-solid fa-book"></i> <?= $datail['catatan_dokter'] ?></li>  
                        <li><i class="fa-solid fa-book"></i> <?= $datail['status_kunjungan'] ?></li>  
                        <li><i class="fa-solid fa-book"></i> <?= $datail['hari_diperiksa'] ?></li>    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>