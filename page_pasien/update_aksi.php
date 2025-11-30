<?php
// memanggil koneksi ke database db_klinikcb
include '../koneksi.php';

// mengumpulkan data dari form update
$medrecx = $_POST['medrec'];
$nm_pasienx = $_POST['nm_pasien'];
$tmp_lhrx = $_POST['tmp_lhr'];
$tgl_lhrx = $_POST['tgl_lhr'];
$jnskelx = $_POST['jnskel'];
$no_hpx = $_POST['nohp'];
$alamatx = $_POST['alamat'];

// menyimpan nik menggunakan AES (Advanced Encryption Standard)
$nikx = $_POST['nik'];

// membuat kunci yang aman
$kunci = 'aZ7mQ24tHk9RjP1sVb6XwE3nFy8Ld0B';
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

// Enkripsi
$ciphertextx = openssl_encrypt($nikx, 'aes-256-cbc', $kunci, 0, $iv);
$data_nik = base64_encode($ciphertextx . '::' . $iv); // Simpan IV bersama

// ubah data ke dalam tbl_pasien
$update_dt = mysqli_query($connectdb, "UPDATE tbl_pasien 
SET nm_pasien = '$nm_pasienx', tmp_lhr = '$tmp_lhrx', tgl_lhr = '$tgl_lhrx', jnskel = '$jnskelx', nik = '$data_nik', nohp = '$no_hpx', alamat = '$alamatx', ctext = '$ciphertextx' 
WHERE medrec = '$medrecx'; ");

// Jika data berhasil diubah / update ke dalam table maka kembali ke form input data pasien
if ($update_dt === TRUE) {
    header('Location: pasien_input.php?status=sukses');
} else {
    header('Location: pasien_input.php?status=gagal');
}

exit();
