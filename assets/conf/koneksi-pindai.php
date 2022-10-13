<?php
global $koneksi;
$nameServer  = 'localhost';
$username    = 'root';
$password    = '';
$db          = 'db_pindai';
$koneksi = mysqli_connect($nameServer, $username, $password, $db);
if (!$koneksi) {
    die("Koneksi database gagal" . mysqli_connect_error());
}