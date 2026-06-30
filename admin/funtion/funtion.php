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
    $kepegawaian = $data['kepegawaian'];
    $hariPraktik = strtolower($hariPraktik);
    $query = "INSERT INTO dokter (nama_lengkap_dokter , nama_panggilan_dokter , spesialis , tempat_lahir , tanggal_lahir , gender , alamat , poli , jam_mulai_praktik , jam_selesai_praktik , hari_praktik , ruangan_praktik , email , no_hp , status_aktif , nama_shift , lulusan ,kepegawaian) VALUES ('$namaLengkap' , '$namaPanggilan' , '$spesialis' , '$tempatLahir' , '$tanggalLahir' , '$gender' , '$alamat' , '$poliKlinik' , '$jamMulaiPraktik' , '$jamSelesaiPraktik' , '$hariPraktik' , '$ruanganPraktik' , '$email' , '$noHp' , '$status' , '$namaShift' , '$lulusan' , '$kepegawaian')";

    mysqli_query($conntectDB , $query);
    $id = mysqli_insert_id($conntectDB);

    switch ($poliKlinik) {
        case 'Poli Umum':
            $kode = '30';
            break;
        case 'Poli Mata':
            $kode = '31';
            break;
        case 'Poli Anak':
            $kode = '32';
            break;
        case 'Poli THT':
            $kode = '33';
            break;
        case 'Poli Saraf':
            $kode = '34';
            break;
        case 'Poli Bedah':
            $kode = '35';
            break;
        default:
            $kode = '00';
            break;
    }

    $tahun = date('y');
    $noUrut = str_pad($id, 4, '0', STR_PAD_LEFT);

    $nomor = "DK{$kode}{$tahun}{$noUrut}";

    mysqli_query($conntectDB,
    "UPDATE dokter
    SET nomor_dokter='$nomor'
    WHERE id_dokter='$id'");
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
    $kepegawaian = $data['kepegawaian'];
    $query = "UPDATE dokter SET nama_lengkap_dokter = '$namaLengkap' , nama_panggilan_dokter = '$namaPanggilan' , spesialis = '$spesialis' , tempat_lahir = '$tempatLahir' , email = '$email' , no_hp = '$noHp' , lulusan = '$lulusan' , gender = '$gender ' , tanggal_lahir = '$tanggalLahir' , alamat = '$alamat' , kepegawaian = '$kepegawaian' WHERE id_dokter = $id ";

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
    $hariPraktik = strtolower($hariPraktik);
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
    $gender = $data['gender'] ;
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
    mysqli_query($conntectDB, $query);

    $id = mysqli_insert_id($conntectDB);

    $kodejenis = ($jenisKunjungan == 'Pasien Baru') ? '30' : '80';

    $kode = ($statusKunjungan == 'Rawat Inap') ? '50' : '60';

    $bulanLahir = date('m', strtotime($tanggalLahir));

    $urut = str_pad($id, 4, '0', STR_PAD_LEFT);

    $nomor_id_pasien = $urut . $bulanLahir . $kodejenis . $kode;

    mysqli_query(
        $conntectDB,
        "UPDATE pasien 
        SET nomor_id_pasien = '$nomor_id_pasien'
        WHERE id_pasien = '$id'"
    );

    return $id;
}

function hapusDataPasien($data){
    global $conntectDB;

    $data = intval($data);
    mysqli_query($conntectDB,"DELETE FROM riwayat_medis_pasien WHERE id_pasien = '$data'");
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

    $query = "UPDATE SET pasien nama_lengkap_pasien = '$namaLengkap' , nama_panggilan_pasien = '$namaPanggilan' , tanggal_lahir_pasien = '$tanggalLahir' , tempat_lahir_pasien = '$tempatLahir', alamat = '$alamat' , nik = '$nik' , pekerjaan = '$pekerjaan' , golongan_darah = '$golonganDarah' , email = '$email', no_hp = '$nomorHp' , gender = '$gender' , agama = '$agama',status_pernikahan = '$statusPernikahan' , nama_penanggung_jawab = '$namaPj', hubungan_dengan_pasien = '$hubunganPasien', no_hp_penanggung_jawab = '$noHpPj', alamat_penanggung_jawab = '$alamatPj', tanggal_pendaftaran = '$tanggalPendaftaran' , keluhan_utama = '$keluhanUtama', jenis_kunjungan = '$jenisKunjungan' , metode_pembayaran = '$metodePembayaran', no_BPJS = '$noBPJS', status_kunjungan = '$statusKunjungan' WHERE id_pasien =  $id";

    mysqli_query($conntectDB , $query);
    return mysqli_affected_rows($conntectDB);
}

function tambahRM($data){
    global $conntectDB;

    $idPasien = $data['id'];
    $dokterMenangani = htmlspecialchars($data['dokterMenangani']);
    $tanggalDiperiksa = $data['tangalPemekriksa'];
    $poli = $data['poli'];
    $keluhanPasien = htmlspecialchars($data['keluhanPasien']);
    $riwayatPenyakitPasien = htmlspecialchars($data['riwayatPenyakitPasien']);
    $diagnosaDokter = htmlspecialchars($data['diagnosaDokter']);
    $tindakanMedis = htmlspecialchars($data['tindakanMedis']);
    $resepObat = htmlspecialchars($data['resepObat']);
    $beratBadanPasien = $data['beratBadanPasien'];
    $tinggiBadanPasien = $data['tinggiBadanPasien'];
    $tekananDarahPasien = htmlspecialchars($data['tekananDarahPasien']);
    $suhuTubuhPasien = $data['suhuTubuhPasien'];
    $catatanDokter = htmlspecialchars($data['catatanDokter']);
    $statusKunjungan = $data['statusKunjungan'];

    $hariDiperiksa = date('l', strtotime($tanggalDiperiksa));
    $query = "INSERT INTO riwayat_medis_pasien(
            tanggal_diperiksa,
            dokter_menangani,
            poli,
            keluhan_pasien,
            riwayat_penyakit_pasien,
            diagnosa_dokter,
            tindakan_medis,
            resep_obat,
            BB_pasien,
            TB_pasien,
            tekanan_darah,
            suhu_tubuh,
            catatan_dokter,
            status_kunjungan,
            hari_diperiksa,
            id_pasien
        )
        VALUES
        (
            '$tanggalDiperiksa',
            '$dokterMenangani',
            '$poli',
            '$keluhanPasien',
            '$riwayatPenyakitPasien',
            '$diagnosaDokter',
            '$tindakanMedis',
            '$resepObat',
            '$beratBadanPasien',
            '$tinggiBadanPasien',
            '$tekananDarahPasien',
            '$suhuTubuhPasien',
            '$catatanDokter',
            '$statusKunjungan',
            '$hariDiperiksa',
            '$idPasien'
        )";

    mysqli_query($conntectDB, $query);

    return mysqli_affected_rows($conntectDB);
}


function editRM($data){
    global $conntectDB;

    $idPasien = $data['id'];
    $dokterMenangani = htmlspecialchars($data['dokterMenangani']);
    $tanggalDiperiksa = $data['tangalPemekriksa'];
    $poli = $data['poli'];
    $keluhanPasien = htmlspecialchars($data['keluhanPasien']);
    $riwayatPenyakitPasien = htmlspecialchars($data['riwayatPenyakitPasien']);
    $diagnosaDokter = htmlspecialchars($data['diagnosaDokter']);
    $tindakanMedis = htmlspecialchars($data['tindakanMedis']);
    $resepObat = htmlspecialchars($data['resepObat']);
    $beratBadanPasien = $data['beratBadanPasien'];
    $tinggiBadanPasien = $data['tinggiBadanPasien'];
    $tekananDarahPasien = htmlspecialchars($data['tekananDarahPasien']);
    $suhuTubuhPasien = $data['suhuTubuhPasien'];
    $catatanDokter = htmlspecialchars($data['catatanDokter']);
    $statusKunjungan = $data['statusKunjungan'];
    $hariDiperiksa = date('l', strtotime($tanggalDiperiksa));
    $query = "UPDATE riwayat_medis_pasien SET   
            tanggal_diperiksa =  '$tanggalDiperiksa',
            dokter_menangani = '$dokterMenangani',
            poli = '$poli',
            keluhan_pasien = '$keluhanPasien',
            riwayat_penyakit_pasien = '$riwayatPenyakitPasien',
            diagnosa_dokter = '$diagnosaDokter',
            tindakan_medis = '$tindakanMedis',
            resep_obat = '$resepObat',
            BB_pasien = '$beratBadanPasien',
            TB_pasien = '$tinggiBadanPasien',
            tekanan_darah = '$tekananDarahPasien',
            suhu_tubuh = '$suhuTubuhPasien',
            catatan_dokter = '$catatanDokter',
            status_kunjungan = '$statusKunjungan',
            hari_diperiksa = '$hariDiperiksa'";

    mysqli_query($conntectDB , $query);
    return mysqli_affected_rows($conntectDB);
}

// function masukanAntrian($data){
//     global $conntectDB;
    
    

// }

function searchDokter($keyword){
    global $conntectDB;

    $key = "SELECT * FROM dokter WHERE
     nama_panggilan_dokter LIKE '%$keyword%' OR
     nomor_dokter LIKE '%$keyword%' OR
     spesialis LIKE '%$keyword%'";
    
    return query($key);
}

function searchPasien($keyword){
    global $conntectDB;

    $key = "SELECT * FROM pasien WHERE
     nama_panggilan_pasien LIKE '%$keyword%' OR
     nomor_id_pasien LIKE '%$keyword%' OR
     pekerjaan LIKE '%$keyword%' OR
     tempat_lahir_pasien LIKE '%$keyword%'";
    
    return query($key);
}

?>
