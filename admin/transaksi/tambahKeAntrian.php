<?php

include '../funtion/funtion.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Antrian Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <div class="input-container">
                <h2>Kelola Antrian Pasien</h2>
                <div class="input">
                    <label for="poliKlinik">Poli Klinik</label>
                    <select name="poli" id="poliKilinik">
                            <option value="Poli Umum">Poli Umum</option>
                            <option value="Poli Mata">Poli Mata</option>
                            <option value="Poli Anak">Poli Anak</option>
                            <option value="Poli THT">Poli THT</option>
                            <option value="Poli Saraf">Poli Saraf</option>
                            <option value="Poli Bedah">Poli Bedah</option>
                    </select>
                </div>
                <div class="input">
                    <label for="hariPraktik">Ruangan</label>
                    <input type="text" id="hariPraktik">
                </div>
                <div class="input">
                    <label for="hariPraktik">Dokter Yang Menangani</label>
                    <input type="text" id="hariPraktik">
                </div>
                <div class="input">
                    <label for="hariPraktik">Tanggal</label>
                    <input type="text" id="hariPraktik">
                </div>
                <div class="input">
                    <label for="hariPraktik">Hari</label>
                    <input type="text" id="hariPraktik">
                </div>      
                <div class="btn-form">
                    <button><a href="index.php">Cancel</a></button>
                    <button type="submit" name="submit">Submit</button>
                </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>