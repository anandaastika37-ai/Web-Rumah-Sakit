<?php
    include '../funtion/funtion.php';

    if(isset($_POST['submit'])){
    if(KelolaJadwalDokter($_POST) > 0){
        header('Location:index.php');
    }
}

    $id = $_GET['id'];
    $data = query("SELECT * FROM  dokter WHERE id_dokter = $id");
    $values = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal Dokter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <div class="input-container input-jadwal-dokter" style="display: flex;">
                <h2>Form Kelola Jadwal Dokter</h2>
                <div class="input-tabel">
                    <input type="hidden" name="id" value="<?= $values['id_dokter'] ?>">
                    <div class="input">
                        <label for="status">Status</label>
                        <select name="status" id="status" value="<?= $values['status_aktif'] ?>">
                            <option value="Aktif">Aktif</option>
                            <option value="Cuti">Cuti</option>
                            <option value="Pensiun">Pensiun</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="poli">Poli/Bagian</label>
                        <select name="poli" id="poli" value="<?= $values['poli'] ?>" >
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
                        <input type="text" id="hariPraktik" name="hariPraktik" value="<?= $values['hari_praktik'] ?>">
                    </div>
                    <div class="input">
                        <label for="jamMulaiPraktik">Jam Mulai Praktik</label>
                        <input type="time" id="jamMulaiPraktik" name="jamMulaiPraktik" value="<?= $values['jam_mulai_praktik'] ?>">
                    </div>
                    <div class="input">
                        <label for="jamSelesaiPraktik">Jam Selesai Praktik</label>
                        <input type="time" id="jamSelesaiPraktik" name="jamSelesaiPraktik"
                        value="<?= $values['jam_selesai_praktik'] ?>" >
                    </div>
                    <div class="input">
                        <label for="shift">Shift</label>
                        <select name="shift" id="shift" value="<?= $values['nama_shift'] ?>" >
                            <option value="Shift Pagi">Shift Pagi</option>
                            <option value="Shift Siang">Shift Siang</option>
                            <option value="Shift Malam">Shift Malam</option>
                        </select>
                    </div>
                    <div class="input number">
                        <label for="ruangan">Ruangan Praktik</label>
                        <input type="number" id="ruangan" name="ruangan" value="<?= $values['ruangan_praktik'] ?>">
                    </div>
                </div>
                <div class="btn-form">
                    <button><a href="index.php">Back</a></button>
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>