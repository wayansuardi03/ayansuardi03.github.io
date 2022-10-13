<?php
@$page = $_GET['q'];
if (!empty($page)) {
    switch ($page) {

        case 'layanan-sertif':
            include './pages/sertifikasi/layanan-sertifikasi.php';
            break;

        case 'beranda':
            include './pages/beranda/beranda.php';
            break;

        case 'yanblik':
            include './pages/yanblik/yanblik.php';
            break;

        case 'pengawasan':
            include './pages/pengawasan/pengawasan.php';
            break;

        case 'profil':
            include './pages/profil/profil.php';
            break;

        case '_register':
            include 'register.php';
            break;

        default:
            include './pages/beranda/beranda.php';
            break;
    }
} else {
    include './pages/beranda/beranda.php';
}