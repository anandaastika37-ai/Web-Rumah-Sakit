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
        <form action="">
            <div class="input-container first-form-RM">
                <h2>Tambah Riwayat Medis</h2>
                <div class="input-tabel">
                    <div class="input">
                        <label for="namaPasien">Nama Pasien</label>
                        <input type="text" id="namaPasien">
                    </div>
                    <div class="input">
                        <label for="dokterMenangani">Dokter Yang Menangani</label>
                        <input type="text" id="dokterMenangani">
                    </div>
                    <div class="input">
                        <label for="tanggalPemeriksa">Tanggal Pemeriksaan</label>
                        <input type="date" id="tangalPemekriksa">
                    </div>
                    <div class="input">
                        <label for="poli">Poli/Bagian</label>
                        <select name="" id="poli">
                            <option value="">Poli Umum</option>
                            <option value="">Poli Mata</option>
                            <option value="">Poli Anak</option>
                            <option value="">Poli THT</option>
                            <option value="">Poli Saraf</option>
                            <option value="">Poli Bedah</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Keluhan Pasien</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Riwayat penyakit Pasien</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Diagnosa Dokter</label>
                        <input type="text" id="namaLengkap">
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
                        <label for="namaLengkap">Tndakan Medis</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Resep Obat</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Berat Badan Pasien</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Tinggi Badan Pasien</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Tekanan Darah Pasien</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Suhu Tubuh Pasien</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="namaLengkap">Catatan Dokter</label>
                        <input type="text" id="namaLengkap">
                    </div>
                    <div class="input">
                        <label for="statusKunjungan">Status Kunjungan</label>
                        <select name="" id="statusKunjungan">
                            <option value="">Rawat Inap</option>
                            <option value="">Rawat Jalan</option>
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