<?php
global $connSampel;
$nameServer  = 'localhost';
$username    = 'root';
$password    = '';
$db          = 'db_simpel';
$connSampel = mysqli_connect($nameServer, $username, $password, $db);
if (!$connSampel) {
    die("Koneksi database gagal" . mysqli_connect_error());
}