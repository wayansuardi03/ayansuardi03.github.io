<?php
global $connDiki;
$nameServer  = 'localhost';
$username    = 'root';
$password    = '';
$db          = 'db_monev';
$connDiki = mysqli_connect($nameServer, $username, $password, $db);
if (!$connDiki) {
    die("Koneksi database gagal" . mysqli_connect_error());
}