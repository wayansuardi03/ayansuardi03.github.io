<?php
global $connlhp;
$nameServer  = 'localhost';
$username    = 'root';
$password    = '';
$db          = 'db_lhp';
$connlhp = mysqli_connect($nameServer, $username, $password, $db);
if (!$connlhp) {
    die("Koneksi database gagal" . mysqli_connect_error());
}