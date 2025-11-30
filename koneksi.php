<?php
$connectdb = mysqli_connect("localhost", "root", "", "db_klinikareum");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}
