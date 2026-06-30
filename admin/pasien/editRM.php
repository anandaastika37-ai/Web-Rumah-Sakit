<?php

include '../funtion/funtion.php';

$id = $_GET['id'];
$dataRM = query("SELECT *
FROM pasien
JOIN riwayat_medis_pasien
ON riwayat_medis_pasien.id_pasien = riwayat_medis_pasien.id_pasien
WHERE pasien.id_pasien = $id
");

$value = mysqli_fetch_assoc($dataRM);

if(isset($_POST['submit'])){
    if(editRM($_POST) > 0){
        echo "
        <script>
            alert('Rekam Medis Berhasil DiUpdate');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Rekam Medis Gagal DiUpdate');
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Riwayat Medis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <div class="input-container first-form-RM">
                <h2>Edit Riwayat Medis</h2>
                <div class="input-tabel">
                    <input type="hidden" name="id" value="<?= $value['id_pasien'] ?>">
                    <div class="input">
                        <label for="namaPasien">Nama Pasien</label>
                        <input type="text" id="namaPasien" name="namaPasien" value="<?= $value['nama_lengkap_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="dokterMenangani">Dokter Yang Menangani</label>
                        <input type="text" id="dokterMenangani" name="dokterMenangani" value="<?= $value['dokter_menangani'] ?>">
                    </div>
                    <div class="input">
                        <label for="tanggalPemeriksa">Tanggal Pemeriksaan</label>
                        <input type="date" id="tangalPemekriksa" name="tangalPemekriksa" value="<?= $value['tanggal_diperiksa'] ?>">
                    </div>
                    <div class="input">
                        <label for="poli">Poli/Bagian</label>
                        <select name="poli" id="poli" value="<?= $value['poli'] ?>">
                            <option value="Poli Umum">Poli Umum</option>
                            <option value="Poli Mata">Poli Mata</option>
                            <option value="Poli Anak">Poli Anak</option>
                            <option value="Poli THT">Poli THT</option>
                            <option value="Poli Saraf">Poli Saraf</option>
                            <option value="Poli Bedah">Poli Bedah</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="keluhanPasien">Keluhan Pasien</label>
                        <input type="text" id="keluhanPasien" name="keluhanPasien" value="<?= $value['keluhan_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="riwayatPenyakitPasien">Riwayat Penyakit Pasien</label>
                        <input type="text" id="riwayatPenyakitPasien" name="riwayatPenyakitPasien" value="<?= $value['riwayat_penyakit_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="diagnosaDokter">Diagnosa Dokter</label>
                        <input type="text" id="diagnosaDokter" name="diagnosaDokter" value="<?= $value['diagnosa_dokter'] ?>">
                    </div>
                </div>
                <div class="btn-form">
                    <button><a href="./index.php">Cancel</a></button>
                    <button id="nextFirstRM" type="button">Next</button>
                </div>
            </div>
            <div class="input-container second-form-RM">
                <h2>Edit Riwayat Medis</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="tindakanMedis">Tindakan Medis</label>
                        <input type="text" id="tindakanMedis" name="tindakanMedis" value="<?= $value['tindakan_medis'] ?>">
                    </div>
                    <div class="input">
                        <label for="resepObat">Resep Obat</label>
                        <input type="text" id="resepObat" name="resepObat" value="<?= $value['resep_obat'] ?>">
                    </div>
                    <div class="input">
                        <label for="beratBadanPasien">Berat Badan Pasien</label>
                        <input type="text" id="beratBadanPasien" name="beratBadanPasien" value="<?= $value['BB_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="tinggiBadanPasien">Tinggi Badan Pasien</label>
                        <input type="text" id="tinggiBadanPasien" name="tinggiBadanPasien" value="<?= $value['TB_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="tekananDarahPasien">Tekanan Darah Pasien</label>
                        <input type="text" id="tekananDarahPasien" name="tekananDarahPasien" value="<?= $value['tekanan_darah'] ?>">
                    </div>
                    <div class="input">
                        <label for="suhuTubuhPasien">Suhu Tubuh Pasien</label>
                        <input type="text" id="suhuTubuhPasien" name="suhuTubuhPasien" value="<?= $value['suhu_tubuh'] ?>">
                    </div>
                    <div class="input">
                        <label for="catatanDokter">Catatan Dokter</label>
                        <input type="text" id="catatanDokter" name="catatanDokter" value="<?= $value['catatan_dokter'] ?>">
                    </div>
                    <div class="input">
                        <label for="statusKunjungan">Status Kunjungan</label>
                        <select name="statusKunjungan" id="statusKunjungan" value="<?= $value['status_kunjungan'] ?>">
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Rawat Jalan">Rawat Jalan</option>
                        </select>
                    </div>
                </div>
                <div class="btn-form">
                    <button id="backThirdRM" type="button">Back</button>
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>