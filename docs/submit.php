<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaPeserta = $_POST['namaPeserta'];
    $alamatEmail = $_POST['alamatEmail'];
    $nomorTelepon = $_POST['nomorTelepon'];
    $alamatRumah = $_POST['alamatRumah'];
    $perguruanTinggi = $_POST['perguruanTinggi'];
    $jurusanStudi = $_POST['jurusanStudi'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $pengalamanKoding = $_POST['pengalamanKoding'];
    $biayaPendafataran = $_POST['biayaPendafataran'];
    $tipe = $_POST['tipe'];
    $jml_anggota = $_POST['jml_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $bahasa = implode(", ", $_POST['bahasa']);
    
    $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
    $bukti_pembayaran_tmp = $_FILES['bukti_pembayaran']['tmp_name'];
    $target_dir = "uploads/";
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $target_file = $target_dir . basename($bukti_pembayaran);
    move_uploaded_file($bukti_pembayaran_tmp, $target_file);

    // Simpan data ke dalam file (sebagai contoh)
    $file = fopen('data_pendaftaran.txt', 'a');
    fwrite($file, "Nama Peserta: $namaPeserta\n");
    fwrite($file, "Alamat Email: $alamatEmail\n");
    fwrite($file, "Nomor Telepon: $nomorTelepon\n");
    fwrite($file, "Alamat Rumah: $alamatRumah\n");
    fwrite($file, "Perguruan Tinggi: $perguruanTinggi\n");
    fwrite($file, "Jurusan Studi: $jurusanStudi\n");
    fwrite($file, "Tanggal Lahir: $tanggalLahir\n");
    fwrite($file, "Pengalaman Koding: $pengalamanKoding\n");
    fwrite($file, "Biaya Pendafataran: $biayaPendafataran\n");
    fwrite($file, "Tipe: $tipe\n");
    fwrite($file, "Jumlah Anggota: $jml_anggota\n");
    fwrite($file, "Nama Anggota: $nama_anggota\n");
    fwrite($file, "Bahasa yang Dikuasai: $bahasa\n");
    fwrite($file, "Bukti Pembayaran: $target_file\n\n");
    fclose($file);

    echo "Pendaftaran berhasil disimpan.";
    echo "<a href='data_pendaftaran.php'>Lihat Data Pendaftaran</a>";
}
?>
