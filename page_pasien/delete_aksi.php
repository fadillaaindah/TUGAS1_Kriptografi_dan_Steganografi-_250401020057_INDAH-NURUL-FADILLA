<?php
// memanggil koneksi ke database db_klinikcb
include '../koneksi.php';

// menerima data dari link yang dikirim
$medrecx = $_GET['id'];

// delete data dari tbl_pasien
$delete_dt = mysqli_query($connectdb, "DELETE FROM tbl_pasien WHERE medrec = '$medrecx'; ");

// Jika data berhasil dihapus dari table maka kembali ke form input data pasien
if ($delete_dt === TRUE) {
    header('Location: pasien_input.php?status=sukses');
} else {
    header('Location: pasien_input.php?status=gagal');
}

exit();
