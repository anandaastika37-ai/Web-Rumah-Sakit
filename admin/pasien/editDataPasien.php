<?php
include '../funtion/funtion.php';

$id = $_GET['id'];
$data = query("SELECT * FROM pasien WHERE id_pasien = $id");
$value = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data pasien</title>
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
                <h2>Identitas Pasien (EDIT)</h2>
                <div class="input-tabel">
                    <input type="hidden" name="id" value="<?= $value['id_pasien'] ?>">
                    <!-- <div class="input">
                        <label for="fotoPasien">Foto
                            <input type="file" id="fotoPasien" accept="image/">
                        </label>
                    </div> -->
                    <div class="input">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" id="namaLengkap" name="namaLengkap" value="<?= $value['nama_lengkap_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="namaPanggilan">Nama Pangilan</label>
                        <input type="text" id="namaPanggilan" name="namaPanggilan" value="<?= $value['nama_panggilan_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="NIK">NIK</label>
                        <input type="text" id="NIK" name="NIK" value="<?= $value['nik'] ?>">
                    </div>
                    <div class="input">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" value="<?= $value['pekerjaan'] ?>">
                    </div>
                    <div class="input">
                        <label for="golonganDarah">Golongan Darah</label>
                        <select name="golonganDarah" id="golonganDarah" value="<?= $value['golongan_darah'] ?>">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="<?= $value['email'] ?>">
                    </div>
                    <div class="input">
                        <label for="noHp">Nomor Telepon</label>
                        <input type="text" id="noHp" name="noHp" value="<?= $value['no_hp'] ?>">
                    </div>
                    <div class="input">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="date" id="tanggalLahir" name="tanggalLahir" value="<?= $value['tanggal_lahir_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" id="tempatLahir" name="tempatLahir" value="<?= $value['tempat_lahir_pasien'] ?>">
                    </div>
                    <div class="input-alamat">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" ><?= $value['alamat'] ?></textarea>
                    </div>
                    <div class="input-gender">
                        <label for="lakiLaki">Laki - laki</label>
                        <input type="radio" id="lakiLaki" name="gender">
                        <label for="perempuan">Perempuan</label>
                        <input type="radio" id="perempuan" name="gender">
                    </div>
                    <div class="input">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" value="<?= $value['agama'] ?>">
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
                        <select name="statusPernikahan" id="statusPernikahan" value="<?= $value['status_pernikahan'] ?>">
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
                <h2>Penanggung Jawab Pasien (EDIT)</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="namaPj">Nama Penanggung Jawab</label>
                        <input type="text" id="namaPj" name="namaPj" value="<?= $value['nama_penanggung_jawab'] ?>">
                    </div>
                    <div class="input">
                        <label for="hubunganPasien">Hubungan Dengan Pasien</label>
                        <input type="text" id="hubunganPasien" name="hubunganPasien" value="<?= $value['hubungan_dengan_pasien'] ?>">
                    </div>
                    <div class="input">
                        <label for="noHpPj">Nomor Telepon Penanggung jawab</label>
                        <input type="text" id="noHpPj" name="noHpPj" value="<?= $value['no_hp_penanggung_jawab'] ?>">
                    </div>
                    <div class="input-alamat">
                        <label for="alamatPj">Alamat Penanggung Jawab</label>
                        <textarea name="alamatPj" id="alamatPj"><?= $value['alamat_penanggung_jawab'] ?></textarea>
                    </div>
                </div>
                <div class="btn-form">
                    <button id="backSecond" type="button">Back</button>
                    <button id="nextSecond" type="button">Next</button>
                </div>
            </div>
            <div class="input-container third-form">
                <h2>Kunjungan Pasien (EDIT)</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="tanggalPendaftaran">Tanggal pendaftaran</label>
                        <input type="date" id="tanggalPendaftaran" name="tanggalPendaftaran" value="<?= $value['tanggal_pendaftaran'] ?>">
                    </div>
                    <div class="input">
                        <label for="keluhanUtama">Keluhan Utama</label>
                        <input type="text" id="keluhanUtama" name="keluhanUtama" value="<?= $value['keluhan_utama'] ?>">
                    </div>
                    <div class="input">
                        <label for="jenisKunjungan">Jenis Kunjungan</label>
                        <select name="jenisKunjungan" id="jenisKunjungan" value="<?= $value['jenis_kunjungan'] ?>">
                            <option value="Pasien Baru">Pasien Baru</option>
                            <option value="pasien Lama">pasien Lama</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="statusKunjungan">Status Kunjungan</label>
                        <select name="statusKunjungan" id="statusKunjungan" value="<?= $value['status_kunjungan '] ?>">
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Rawat Jalan">Rawat Jalan</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="metodePembayaran">Metode Pembayaran</label>
                        <select name="metodePembayaran" id="metodePembayaran" value="<?= $value['metode_pembayaran'] ?>">
                            <option value="Umum(pribadi)">Umum(pribadi)</option>
                            <option value="BPJS">BPJS</option>
                            <option value="Asuransi">Asuransi</option>
                        </select>
                    </div>
                    <div class="input number hidden">
                        <label for="noBPJS">No BPJS</label>
                        <input type="teks" id="noBPJS" name="noBPJS" value="<?= $value['no_BPJS'] ?>">
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