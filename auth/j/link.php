<?php
@$page = $_GET['p'];
if (!empty($page)) {
    switch ($page) {

        case 'prosesDataUser':
            include './users/proses.php';
            break;

        case 'users':
            include './users/users.php';
            break;

        case 'prosesDataApp':
            include './data-app/proses.php';
            break;

        case 'sertifikasiApp':
            include './data-app/sertif-app/sertif-app.php';
            break;

        case 'dataApp':
            include './data-app/dataApp.php';
            break;

        case 'prosesDataIndexRb':
            include './tu/proses.php';
            break;

        case 'prosesDataPerkaraPenindakan':
            include './penindakan/proses.php';
            break;

        case 'penindakanPerkara':
            include './penindakan/dataPenindakan.php';
            break;

        case 'tataUsaha':
            include './tu/tu.php';
            break;

        case 'beranda':
            include './beranda/beranda.php';
            break;

        case 'prosesSignIn':
            include 'proses.php';
            break;

        case 'signUp':
            include 'signUp.php';
            break;

        case 'signOut':
            include 'signOut.php';
            break;

        default:
            include './404/error404.php';
            break;
    }
} else {
    include './beranda/beranda.php';
}