<?php

include '../funtion/funtion.php';

if(isset($_POST['submit'])){
    if(EditData($_POST) > 0){
        header('Location:index.php');
    }
}

$id = $_GET['id'];
$data = query("SELECT * FROM dokter WHERE id_dokter = $id");

$value = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <div class="input-container first-form">
                <h2>Form Edit Dokter</h2>
                <div class="input-tabel">
                    <input type="hidden" name="id" value="<?= $value['id_dokter'] ?>">
                    <!-- <div class="input">
                        <label for="foto">Foto</label>
                        <input type="file" accept="image/" id="foto">
                    </div> -->
                    <div class="input">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" id="namaLengkap" name="namaLengkap" value="<?= $value['nama_lengkap_dokter'] ?>">
                    </div>
                    <div class="input">
                        <label for="namaPanggilan">Nama Pangilan</label>
                        <input type="text" id="namaPanggilan" name="namaPanggilan" value="<?= $value['nama_panggilan_dokter'] ?>">
                    </div>
                    <div class="input">
                        <label for="lulusan">Pendidikan</label>
                        <select name="lulusan" id="lulusan" value="<?= $value['lulusan'] ?>">
                            <option value="S1 Kedokteran">S1 Kedokteran</option>
                            <option value="Spesialis (Sp.)">Spesialis (Sp.)</option>
                            <option value="Subspesialis">Subspesialis</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="<?= $value['email'] ?>">
                    </div>
                    <div class="input">
                        <label for="noHp">Nomor Telepon</label>
                        <input type="tel" id="noHp" name="noHp" value="<?= $value['no_hp'] ?> ">
                    </div>
                </div>
                <div class="btn-form">
                    <button><a href="index.php">Cancel</a></button>
                    <button id="nextFirst" type="button">Next</button>
                </div>
            </div>
            <div class="input-container second-form">
                <h2>Form Edit Dokter</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="date" id="tanggalLahir" name="tanggalLahir" value="<?= $value['tanggal_lahir']?> " required>
                    </div>
                    <div class="input">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" id="tempatLahir" name="tempatLahir" value="<?= $value['tempat_lahir'] ?>">
                    </div>
                    <div class="input-alamat">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat"><?= $value['alamat'] ?></textarea>
                    </div>
                    <div class="input-gender">
                        <label for="lakiLaki">Laki - laki</label>
                        <input type="radio" id="lakiLaki" name="gender" value="Laki-laki" <?= $value['gender'] == 'Laki-laki' ? 'checked' : '' ?> >
                        <label for="perempuan">Perempuan</label>
                        <input type="radio" id="perempuan" name="gender" value="Perempuan"  <?= $value['gender'] == 'Perempuan' ? 'checked' : '' ?>>
                    </div>
                    <div class="input">
                        <label for="spesialis">Spesialis</label>
                        <select name="spesialis" id="spesialis" alue="<?= $value['spesialis'] ?> ">
                            <option value="Umum">Dokter Umum</option>
                            <option value="Bedah">Dokter Bedah</option>
                            <option value="Mata">Dokter Mata</option>
                            <option value="Anak">Dokter Anak</option>
                            <option value="THT">Dokter THT</option>
                            <option value="Saraf">Dokter Saraf</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="kepegawaian">Status Kepegawaian</label>
                        <select name="kepegawaian" id="kepegawaian" alue="<?= $value['kepegawaian'] ?> ">
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                            <option value="Magang">Magang</option>
                        </select>
                    </div>
                </div>
                <div class="btn-form">
                    <button id="backSecond" type="button">Back</button>
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div>
            <!-- <div class="input-container input-jadwal-dokter">
                <h2>Form Edit Jadwal Dokter</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Cuti">Cuti</option>
                            <option value="Pensiun">Pensiun</option>
                        </select>
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
                        <label for="hariPraktik">Hari Praktik</label>
                        <input type="text" id="hariPraktik" name="hariPraktik">
                    </div>
                    <div class="input">
                        <label for="jamMulaiPraktik">Jam Mulai Praktik</label>
                        <input type="time" id="jamMulaiPraktik" name="jamMulaiPraktik">
                    </div>
                    <div class="input">
                        <label for="jamSelesaiPraktik">Jam Selesai Praktik</label>
                        <input type="time" id="jamSelesaiPraktik" name="jamSelesaiPraktik">
                    </div>
                    <div class="input">
                        <label for="shift">Shift</label>
                        <select name="shift" id="shift">
                            <option value="Shift Pagi">Shift Pagi</option>
                            <option value="Shift Siang">Shift Siang</option>
                            <option value="Shift Malam">Shift Malam</option>
                        </select>
                    </div>
                    <div class="input number">
                        <label for="ruangan">Ruangan Praktik</label>
                        <input type="number" id="ruangan" name="ruangan">
                    </div>
                </div>
                <div class="btn-form">
                    <button id="backThird" type="button">Back</button>
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div> -->
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>