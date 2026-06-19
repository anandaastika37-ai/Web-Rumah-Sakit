<?php

include '../funtion/funtion.php';

if(isset($_POST['submit'])){
    if(tambahPasien($_POST) > 0 ){
        header("Location:index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data pasien</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <div class="input-container first-form">
                <h2>Identitas Pasien</h2>
                <div class="input-tabel">
                    <!-- <div class="input">
                        <label for="fotoPasien">Foto
                            <input type="file" id="fotoPasien" accept="image/">
                        </label>
                    </div> -->
                    <div class="input">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" id="namaLengkap" name="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaPanggilan">Nama Pangilan</label>
                        <input type="text" id="namaPanggilan" name="namaPanggilan">
                    </div>
                    <div class="input">
                        <label for="NIK">NIK</label>
                        <input type="text" id="NIK" name="NIK">
                    </div>
                    <div class="input">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan">
                    </div>
                    <div class="input">
                        <label for="golonganDarah">Golongan Darah</label>
                        <select name="golonganDarah" id="golonganDarah">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="input">
                        <label for="noHp">Nomor Telepon</label>
                        <input type="text" id="noHp" name="noHp">
                    </div>
                    <div class="input">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="date" id="tanggalLahir" name="tanggalLahir">
                    </div>
                    <div class="input">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" id="tempatLahir" name="tempatLahir">
                    </div>
                    <div class="input-alamat">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat"></textarea>
                    </div>
                    <div class="input-gender">
                        <label for="lakiLaki">Laki - laki</label>
                        <input type="radio" id="lakiLaki" name="gender">
                        <label for="perempuan">Perempuan</label>
                        <input type="radio" id="perempuan" name="gender">
                    </div>
                    <div class="input">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama">
                            <option value="Hindu">Hindu</option>
                            <option value="Islam">Islam</option>
                            <option value="katolik">katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="statusPernikahan">Status Pernikahan</label>
                        <select name="statusPernikahan" id="statusPernikahan">
                            <option value="">Sudah Kawin</option>
                            <option value="">Belum kawin</option>
                        </select>
                    </div>
                </div>
                <div class="btn-form">
                    <button><a href="./index.php">Cancel</a></button>
                    <button id="nextFirst" type="button">Next</button>
                </div>
            </div>
            <div class="input-container second-form">
                <h2>Penanggung Jawab Pasien</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="namaPj">Nama Penanggung Jawab</label>
                        <input type="text" id="namaPj" name="namaPj">
                    </div>
                    <div class="input">
                        <label for="hubunganPasien">Hubungan Dengan Pasien</label>
                        <input type="text" id="hubunganPasien" name="hubunganPasien">
                    </div>
                    <div class="input">
                        <label for="noHpPj">Nomor Telepon Penanggung jawab</label>
                        <input type="text" id="noHpPj" name="noHpPj">
                    </div>
                    <div class="input-alamat">
                        <label for="alamatPj">Alamat Penanggung Jawab</label>
                        <textarea name="alamatPj" id="alamatPj"></textarea>
                    </div>
                </div>
                <div class="btn-form">
                    <button id="backSecond" type="button">Back</button>
                    <button id="nextSecond" type="button">Next</button>
                </div>
            </div>
            <div class="input-container third-form">
                <h2>Kunjungan Pasien</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="tanggalPendaftaran">Tanggal pendaftaran</label>
                        <input type="date" id="tanggalPendaftaran" name="tanggalPendaftaran">
                    </div>
                    <div class="input">
                        <label for="keluhanUtama">Keluhan Utama</label>
                        <input type="text" id="keluhanUtama" name="keluhanUtama">
                    </div>
                    <div class="input">
                        <label for="jenisKunjungan">Jenis Kunjungan</label>
                        <select name="jenisKunjungan" id="jenisKunjungan">
                            <option value="Pasien Baru">Pasien Baru</option>
                            <option value="pasien Lama">pasien Lama</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="statusKunjungan">Status Kunjungan</label>
                        <select name="statusKunjungan" id="statusKunjungan">
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Rawat Jalan">Rawat Jalan</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="metodePembayaran">Metode Pembayaran</label>
                        <select name="metodePembayaran" id="metodePembayaran">
                            <option value="Umum(pribadi)">Umum(pribadi)</option>
                            <option value="BPJS">BPJS</option>
                            <option value="Asuransi">Asuransi</option>
                        </select>
                    </div>
                    <div class="input number hidden">
                        <label for="noBPJS">No BPJS</label>
                        <input type="teks" id="noBPJS" name="noBPJS">
                    </div>
                </div>
                <div class="btn-form">
                    <button id="backThird" type="button">Back</button>
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>