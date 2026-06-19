<?php
$lokalHost = 'localhost';
$username = 'root';
$password = '';
$dataBase = 'sistem-rumah-sakit';
$conntectDB = new mysqli($lokalHost , $username , $password , $dataBase);


function query($query){
    global $conntectDB;
    if($conntectDB->connect_error){
        die("failed connect" . $conntectDB->connect_error);
    }
    $result = $conntectDB->query($query);
    return $result;

}

function TambahDokter($data){
    global $conntectDB;
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $namaPanggilan = htmlspecialchars($data["namaPanggilan"]);
    $spesialis = htmlspecialchars($data["spesialis"]);
    $tempatLahir = $data['tempatLahir'];
    $tanggalLahir = $data['tanggalLahir'];
    $gender = htmlspecialchars($data['gender']);
    $alamat = htmlspecialchars($data['alamat']);
    $poliKlinik = htmlspecialchars($data['poli']);
    $jamMulaiPraktik = $data['jamMulaiPraktik'];
    $jamSelesaiPraktik = $data['jamSelesaiPraktik'];
    $hariPraktik =  htmlspecialchars($data['hariPraktik']);
    $ruanganPraktik = $data['ruangan'];
    $email = htmlspecialchars($data['email']);
    $noHp = htmlspecialchars($data['noHp']);
    $status = $data['status'];
    $namaShift = $data['shift'];
    $lulusan = $data['lulusan'];

    $query = "INSERT INTO dokter (nama_lengkap_dokter , nama_panggilan_dokter , spesialis , tempat_lahir , tanggal_lahir , gender , alamat , poli , jam_mulai_praktik , jam_selesai_praktik , hari_praktik , ruangan_praktik , email , no_hp , status_aktif , nama_shift , lulusan ) VALUES ('$namaLengkap' , '$namaPanggilan' , '$spesialis' , '$tempatLahir' , '$tanggalLahir' , '$gender' , '$alamat' , '$poliKlinik' , '$jamMulaiPraktik' , '$jamSelesaiPraktik' , '$hariPraktik' , '$ruanganPraktik' , '$email' , '$noHp' , '$status' , '$namaShift' , '$lulusan')";

    mysqli_query($conntectDB , $query);
    $id = mysqli_insert_id($conntectDB);
    if($poliKlinik == 'Poli Umum'){
        $kode = '30';
    }
    elseif($poliKlinik == 'Poli Mata'){
        $kode = '31';
    }
    elseif($poliKlinik == 'Poli Anak'){
        $kode = '32';
    }
    elseif($poliKlinik == 'Poli THT'){
        $kode = '33';
    }
    elseif($poliKlinik == 'Poli Saraf'){
        $kode = '34';
    }
    elseif($poliKlinik == 'Poli Bedah'){
        $kode = '35';
    }

    $tanggal = date('y' , strtotime($tanggalLahir));
    $noId = sprintf('%04d' , $id);

    $nomor = $tanggal . $kode  . $noId;
    mysqli_query($conntectDB , "UPDATE dokter SET nomor_dokter = '$nomor' WHERE id_dokter = $id ");
    return $id;
}

function Hapus($data){
    global $conntectDB;

    $data = intval($data);
    mysqli_query($conntectDB , "DELETE FROM dokter WHERE id_dokter = $data");

    return mysqli_affected_rows($conntectDB);
}

function EditData($data){
    global $conntectDB;
    $id = $data['id'];
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $namaPanggilan = htmlspecialchars($data["namaPanggilan"]);
    $spesialis = htmlspecialchars($data["spesialis"]);
    $tempatLahir = $data['tempatLahir'];
    $tanggalLahir = $data['tanggalLahir'];
    $gender = htmlspecialchars($data['gender']);
    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);
    $noHp = htmlspecialchars($data['noHp']);
    $lulusan = $data['lulusan'];

    $query = "UPDATE dokter SET nama_lengkap_dokter = '$namaLengkap' , nama_panggilan_dokter = '$namaPanggilan' , spesialis = '$spesialis' , tempat_lahir = '$tempatLahir' , email = '$email' , no_hp = '$noHp' , lulusan = '$lulusan' , gender = '$gender ' , tanggal_lahir = '$tanggalLahir' , alamat = '$alamat' WHERE id_dokter = $id ";

    mysqli_query($conntectDB , $query);
    return mysqli_affected_rows($conntectDB);
}

function KelolaJadwalDokter($data){
    global $conntectDB;
    $id = $data['id'];
    $poliKlinik = htmlspecialchars($data['poli']);
    $jamMulaiPraktik = $data['jamMulaiPraktik'];
    $jamSelesaiPraktik = $data['jamSelesaiPraktik'];
    $hariPraktik =  htmlspecialchars($data['hariPraktik']);
    $ruanganPraktik = $data['ruangan'];
    $status = $data['status'];
    $namaShift = $data['shift'];

    $query = "UPDATE dokter SET  poli = '$poliKlinik' , jam_mulai_praktik = '$jamMulaiPraktik' , jam_selesai_praktik = '$jamSelesaiPraktik' , hari_praktik = '$hariPraktik' , ruangan_praktik = '$ruanganPraktik' ,  status_aktif = '$status' , nama_shift =  '$namaShift' WHERE id_dokter = $id";

    mysqli_query($conntectDB , $query);
    return mysqli_affected_rows($conntectDB);
}

function tambahPasien($data){
    global $conntectDB;
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $namaPanggilan = htmlspecialchars($data["namaPanggilan"]);
    $nik = htmlspecialchars($data['NIK']);
    $pekerjaan = htmlspecialchars($data['pekerjaan']);
    $golonganDarah = $data['golonganDarah'];
    $email = htmlspecialchars($data['email']);
    $nomorHp = htmlspecialchars($data['noHp']);
    $tanggalLahir = $data['tanggalLahir'];
    $tempatLahir = htmlspecialchars($data['tempatLahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $gender = $data['gender'];
    $agama = $data['agama'];
    $statusPernikahan = $data['statusPernikahan'];
    $namaPj = htmlspecialchars($data['namaPj']);
    $hubunganPasien = htmlspecialchars($data['hubunganPasien']);
    $noHpPj = htmlspecialchars($data['noHpPj']);
    $alamatPj = htmlspecialchars($data['alamatPj']);
    $tanggalPendaftaran = $data['tanggalPendaftaran'];
    $keluhanUtama = htmlspecialchars($data['keluhanUtama']);
    $jenisKunjungan = $data['jenisKunjungan'];
    $statusKunjungan = $data['statusKunjungan'];
    $metodePembayaran = $data['metodePembayaran'];
    $noBPJS = htmlspecialchars($data['noBPJS']);

    $query = "INSERT INTO pasien (nama_lengkap_pasien , nama_panggilan_pasien , tanggal_lahir_pasien , tempat_lahir_pasien , alamat , nik , pekerjaan , golongan_darah , email , no_hp , gender , agama ,status_pernikahan , nama_penanggung_jawab , hubungan_dengan_pasien , no_hp_penanggung_jawab , alamat_penanggung_jawab , tanggal_pendaftaran , keluhan_utama , jenis_kunjungan , metode_pembayaran , no_BPJS , status_kunjungan) VALUES ('$namaLengkap' , '$namaPanggilan' , '$tanggalLahir' , '$tempatLahir' , '$alamat' , '$nik' , '$pekerjaan' , '$golonganDarah' , '$email' , '$nomorHp' , '$gender' ,'$agama' , '$statusPernikahan' , '$namaPj' , '$hubunganPasien' , '$noHpPj' , '$alamatPj', '$tanggalPendaftaran' , '$keluhanUtama' , '$jenisKunjungan' , '$metodePembayaran' , '$noBPJS' , '$statusKunjungan')";

    mysqli_query($conntectDB , $query);
    $id = mysqli_insert_id($conntectDB);
    if($jenisKunjungan == 'Pasien Baru'){
        $kodejenis = '30';
    }
    elseif($jenisKunjungan == 'pasien Lama'){
        $kodejenis = '80';
    }
    if($statusKunjungan == 'Rawat Inap'){
        $kode = '50';
    }
    elseif($statusKunjungan == 'Rawat Jalan'){
        $kode = '60';
    }
    $tanggal = date('m' , strtotime($tanggalLahir));
    $noId = sprintf('%04d' , $id);

    $id_pasien =  $noId . $tanggal . $kodejenis . $kode;
    mysqli_query($conntectDB , "UPDATE pasien SET nomor_id_pasien = '$id_pasien' WHERE id_pasien = $id");

    return $id;
}

function hapusDataPasien($data){
    global $conntectDB;

    $data = intval($data);
    mysqli_query($conntectDB , "DELETE FROM pasien WHERE id_pasien = $data");

    return mysqli_affected_rows($conntectDB);
}

function editDataPasien($data){
    global $conntectDB;
    $id = $data['id'];
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $namaPanggilan = htmlspecialchars($data["namaPanggilan"]);
    $nik = htmlspecialchars($data['NIK']);
    $pekerjaan = htmlspecialchars($data['pekerjaan']);
    $golonganDarah = $data['golonganDarah'];
    $email = htmlspecialchars($data['email']);
    $nomorHp = htmlspecialchars($data['noHp']);
    $tanggalLahir = $data['tanggalLahir'];
    $tempatLahir = htmlspecialchars($data['tempatLahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $gender = $data['gender'];
    $agama = $data['agama'];
    $statusPernikahan = $data['statusPernikahan'];
    $namaPj = htmlspecialchars($data['namaPj']);
    $hubunganPasien = htmlspecialchars($data['hubunganPasien']);
    $noHpPj = htmlspecialchars($data['noHpPj']);
    $alamatPj = htmlspecialchars($data['alamatPj']);
    $tanggalPendaftaran = $data['tanggalPendaftaran'];
    $keluhanUtama = htmlspecialchars($data['keluhanUtama']);
    $jenisKunjungan = $data['jenisKunjungan'];
    $statusKunjungan = $data['statusKunjungan'];
    $metodePembayaran = $data['metodePembayaran'];
    $noBPJS = htmlspecialchars($data['noBPJS']);

    $query = "UPDATE SET pasien nama_lengkap_pasien , nama_panggilan_pasien , tanggal_lahir_pasien , tempat_lahir_pasien , alamat , nik , pekerjaan , golongan_darah , email , no_hp , gender , agama ,status_pernikahan , nama_penanggung_jawab , hubungan_dengan_pasien , no_hp_penanggung_jawab , alamat_penanggung_jawab , tanggal_pendaftaran , keluhan_utama , jenis_kunjungan , metode_pembayaran , no_BPJS , status_kunjungan WHERE id_pasien =  $id";
}

?>
