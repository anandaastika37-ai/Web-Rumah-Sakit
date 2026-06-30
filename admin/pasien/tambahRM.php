<?php

include '../funtion/funtion.php';

$id = $_GET['id'];
$dataRM = query("SELECT * FROM pasien WHERE id_pasien = $id"); 
$value = mysqli_fetch_assoc($dataRM);

if(isset($_POST['submit'])){
    if(tambahRM($_POST) > 0){
        echo "
        <script>
            alert('Rekam Medis Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Rekam Medis Gagal Ditambahkan');
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
                <h2>Tambah Riwayat Medis</h2>
                <div class="input-tabel">
                    <input type="hidden" name="id" value="<?= $value['id_pasien'] ?>">
                    <div class="input">
                        <label for="namaPasien">Nama Pasien</label>
                        <input type="text" id="namaPasien" name="namaPasien" value="<?= $value['nama_lengkap_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="dokterMenangani">Dokter Yang Menangani</label>
                        <input type="text" id="dokterMenangani" name="dokterMenangani">
                    </div>
                    <div class="input">
                        <label for="tanggalPemeriksa">Tanggal Pemeriksaan</label>
                        <input type="date" id="tangalPemekriksa" name="tangalPemekriksa">
                    </div>
                    <div class="input">
                        <label for="poli">Poli/Bagian</label>
                        <select name="poli" id="poli">
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
                        <input type="text" id="keluhanPasien" name="keluhanPasien">
                    </div>
                    <div class="input">
                        <label for="riwayatPenyakitPasien">Riwayat Penyakit Pasien</label>
                        <input type="text" id="riwayatPenyakitPasien" name="riwayatPenyakitPasien">
                    </div>
                    <div class="input">
                        <label for="diagnosaDokter">Diagnosa Dokter</label>
                        <input type="text" id="diagnosaDokter" name="diagnosaDokter">
                    </div>
                </div>
                <div class="btn-form">
                    <button><a href="./index.php">Cancel</a></button>
                    <button id="nextFirstRM" type="button">Next</button>
                </div>
            </div>
            <div class="input-container second-form-RM">
                <h2>Tambah Riwayat Medis</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="tindakanMedis">Tindakan Medis</label>
                        <input type="text" id="tindakanMedis" name="tindakanMedis">
                    </div>
                    <div class="input">
                        <label for="resepObat">Resep Obat</label>
                        <input type="text" id="resepObat" name="resepObat">
                    </div>
                    <div class="input">
                        <label for="beratBadanPasien">Berat Badan Pasien</label>
                        <input type="text" id="beratBadanPasien" name="beratBadanPasien">
                    </div>
                    <div class="input">
                        <label for="tinggiBadanPasien">Tinggi Badan Pasien</label>
                        <input type="text" id="tinggiBadanPasien" name="tinggiBadanPasien">
                    </div>
                    <div class="input">
                        <label for="tekananDarahPasien">Tekanan Darah Pasien</label>
                        <input type="text" id="tekananDarahPasien" name="tekananDarahPasien">
                    </div>
                    <div class="input">
                        <label for="suhuTubuhPasien">Suhu Tubuh Pasien</label>
                        <input type="text" id="suhuTubuhPasien" name="suhuTubuhPasien">
                    </div>
                    <div class="input">
                        <label for="catatanDokter">Catatan Dokter</label>
                        <input type="text" id="catatanDokter" name="catatanDokter">
                    </div>
                    <div class="input">
                        <label for="statusKunjungan">Status Kunjungan</label>
                        <select name="statusKunjungan" id="statusKunjungan">
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