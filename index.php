<?php
include 'assets/conf/koneksi-dikimolapor.php';
include 'assets/conf/koneksi-lhp.php';
include 'assets/conf/koneksi-sampel.php';
include 'assets/conf/koneksi-pindai.php';
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Doall - Responsive Multi Purpose Template">

    <!-- ========== Page Title ========== -->
    <title>Pindai - Pintu Dokumentasi dan Informasi</title>

    <!-- ========== Favicon Icon ========== -->
    
    <link rel="shortcut icon" href="assets/img/p.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link href="assets/css/chart-pengawasan.css" rel="stylesheet" />
    <link href="assets/css/chart-kategori-konsumen.css" rel="stylesheet">
    <link href="assets/css/chart-penindakan.css" rel="stylesheet">
    <link href="assets/css/chart-struktur-org.css" rel="stylesheet">
     <!-- font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- ========== End Stylesheet ========== -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&amp;display=swap" rel="stylesheet">

    <!-- profil kantor -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./assets/css/kantor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   
</head>

<body>

    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar  attr-border navbar-default navbar-sticky bootsnav">
            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="btn"><a href="auth/">Sign In</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar" href="/">
                        <img src="assets/img/pindai.png" class="logo logo-scrolled" width="120" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <!-- icon Home -->
                    <li><a href="?p=beranda"><i class="fa-solid fa-house-user fa-2x"></i></a></li>
                    <!-- akhir icon Home -->
                        <!-- <li class="active"><a href="./">Beranda</a></li> -->
                        <!-- dropdown profil organisasi -->
                        <li class="dropdown">
                            <a href="?q=profil" class="dropdown-toggle" data-toggle="dropdown">Profil Organisasi</a>
                            <ul class="dropdown-menu">
                            <li><a class="effect smooth-menu" href="/">struktur organisasi</a></li>
                            <li><a class="effect smooth-menu" href="?q=profil_kantor">profil kantor</a></li>
                            <li><a class="effect smooth-menu" href="/">profil SMD</a></li>
                            <li><a class="effect smooth-menu" href="/">data pengawasan</a></li>
                                </ul>
                        </li>
                             <!-- Dropdown kinerja -->
                             <li class="dropdown">
                            <a href="?q=" class="dropdown-toggle active" data-toggle="dropdown">kinerja</a>
                            <ul class="dropdown-menu">
                                <li><a href="/">Realisasi anggaran</a></li>
                                <li><a href="/">capaian kerja</a></li>
                            </ul>
                        </li>
                        <!-- Dropdown playanan publik -->
                        <li class="dropdown">
                            <a href="?q=" class="dropdown-toggle active" data-toggle="dropdown">Pelayanan Publik</a>
                            <ul class="dropdown-menu">
                                <li><a href="/">Pengujian Pihak ketiga</a></li>
                                <li><a href="/">permohonan SKI/SKE</a></li>
                                <li><a href="/">informasi dan pengawasan</a></li>
                                <li><a href="/">UMKM</a></li>
                            </ul>
                        </li>
                        <!--sub menu  -->
                            <li><a class="effect smooth-menu" href="/">Reformasi Birokrasi</a></li>
                            <li><a class="effect smooth-menu" href="#daftarAplikasi">Daftar Aplikasi</a></li>

                        <!-- <li class="dropdown">
                            <a href="?p=beranda" class="dropdown-toggle" data-toggle="dropdown">Beranda</a>
                            <ul class="dropdown-menu">
                                <li><a class="effect smooth-menu" href="#capaianKinerja">Kinerja</a></li>
                                <li><a class="effect smooth-menu" href="#dataPengawasan">Pengawasan</a></li>
                                <li><a class="effect smooth-menu" href="#yanblik">Pelayanan Publik</a></li>
                                <li><a class="effect smooth-menu" href="#daftarAplikasi">Daftar Aplikasi</a></li>
                                <li><a class="effect smooth-menu" href="#reformasiBirokrasi">Reformasi Birokrasi</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="?q=profil">Profil</a></li> -->
                        <!-- <li class="dropdown">
                            <a href="?q=layanan-sertif" class="dropdown-toggle active" data-toggle="dropdown">Sertifikasi</a>
                            <ul class="dropdown-menu">
                                <li><a class="effect smooth-menu" href="#simulasi">Simulasi</a></li>
                                <li><a href="?q=layanan-pengujian">Pengujian</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">contact</a>
                        </li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <?php
    include 'link.php';
    ?>

<!-- daftar apliksi -->

<div id="daftarAplikasi" class="services-area thumb-less default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Daftar Aplikasi</h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                        examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="service-items">
                <?php
                include 'assets/conf/koneksi-pindai.php';
                $no = 1;
                $sqlDataApp = mysqli_query($koneksi, "SELECT * FROM tbl_app ORDER BY id_app");
                while ($apps = mysqli_fetch_assoc($sqlDataApp)) {
                    $aplikasi = $apps['nama_app'];
                    $kategori = $apps['kategori_app'];
                    $jenis = $apps['sub_kategori_app'];
                    $tautan = $apps['link'];
                    $catatan = $apps['catatan'];
                ?>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <a href="<?= $tautan; ?>" target="_blank">
                                <i class="flaticon-analysis-2"></i>
                            </a>
                        </div>
                        <div class="info">
                            <span><?= $no++; ?></span>
                            <h4>
                                <a href="<?= $tautan; ?>" target="_blank">
                                    <?= $aplikasi; ?>
                                </a>
                            </h4>
                            <h5><?= $tautan; ?></h5>
                            <p>
                                <?= $catatan; ?>
                            </p>
                            <b><?= $kategori; ?> / <?= $jenis; ?> <br></b>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- End daftar aplikasi-->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.575282410665!2d124.84285121453864!3d1.4302584989569127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287734369671f8d%3A0x10de88fa2d62b282!2sBalai%20Besar%20POM%20di%20Manado!5e0!3m2!1sen!2sid!4v1664158292255!5m2!1sen!2sid"></iframe>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="f-items default-padding">
                    <!-- Single Item -->
                    <div class="col-md-2 item">
                        <div class="f-item">
                            <img src="assets/img/pindaiputih.png" width="150" alt="Logo">
                            
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-5 item">
                        <div class="f-item recent-post">
                        <p>
                               Pintu Dokumentasi dan Informasi Balai Besar POM di Manado
                            </p>

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="social fa-2x">
                                <ul>
                                    <li><a href="mailto:bpom_manado@pom.go.id"  target="_blank"><i class="fas fa-envelope-open"></i></a></li>
                                    <li><a href="https://www.instagram.com/bpom.manado/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/BPOMManado"  target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="https://web.facebook.com/bpom.manado"  target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCa8HeAxnCotYzVbitojEWIQ"  target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="https://bpommanado.id/" target="_blank"><i class="fa-solid fa-house"></i></a></li>
                                </ul>
                            </div>
                    </div>               <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-5 item">
                        <div class="f-item about">
                            <h4>Contact Info</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>
                                    CRJW+423, Jl. Raya Manado Tomohon, Winangun Atas, Kec. Pineleng, Kabupaten Minahasa, Sulawesi Utara
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-clock"></i>
                                    <p>
                                        <span>Office Hours: </span> Monday - Friday / 08:00 - 16:00
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <p>
                                        <span>Email: </span> <a href="mailto:bpom_manado@pom.go.id">bpom_manado@pom.go.id</a>
                                    </p>
                                </li>
                                <li>
                                    <i class="fab fa-whatsapp"></i>
                                    <p>
                                        <span>whatsapp: <a href="https://wa.me/+6281281969799" target="_blank">+62 812 8196 9799</a>
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom  text-light">
            <div class="container text-center">
                            <p>&copy; Copyright 2022 | BALAI BESAR PENGAWASAN OBAT DAN MAKANAN MANADO </p>
                        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/jquery.backgroundMove.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <!-- <script src="assets/js/custom-chart.js"></script> -->
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Hightchart pengawasan -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/sankey.js"></script>
    <script src="https://code.highcharts.com/modules/organization.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <?php
    $obatMdo = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KOTA MANADO'");
    $saryanfarMdo = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KOTA MANADO'");
    $produksiMdo = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KOTA MANADO'");
    $pirtMdo = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KOTA MANADO'");

    $obatTomohon = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KOTA TOMOHON'");
    $saryanfarTomohon = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KOTA TOMOHON'");
    $produksiTomohon = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KOTA TOMOHON'");
    $pirtTomohon = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KOTA TOMOHON'");

    $obatTondano = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KOTA TONDANO'");
    $saryanfarTondano = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KOTA TONDANO'");
    $produksiTondano = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KOTA TONDANO'");
    $pirtTondano = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KOTA TONDANO'");

    $obatBitung = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KOTA BITUNG'");
    $saryanfarBitung = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KOTA BITUNG'");
    $produksiBitung = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KOTA BITUNG'");
    $pirtBitung = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KOTA BITUNG'");

    $obatMinahasa = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN MINAHASA'");
    $saryanfarMinahasa = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN MINAHASA'");
    $produksiMinahasa = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN MINAHASA'");
    $pirtMinahasa = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN MINAHASA'");

    $obatMinut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN MINAHASA UTARA'");
    $saryanfarMinut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN MINAHASA UTARA'");
    $produksiMinut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN MINAHASA UTARA'");
    $pirtMinut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN MINAHASA UTARA'");

    $obatMinteng = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN MINAHASA TENGGARA'");
    $saryanfarMinteng = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN MINAHASA TENGGARA'");
    $produksiMinteng = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN MINAHASA TENGGARA'");
    $pirtMinteng = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN MINAHASA TENGGARA'");

    $obatMinsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN MINAHASA SELATAN'");
    $saryanfarMinsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN MINAHASA SELATAN'");
    $produksiMinsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN MINAHASA SELATAN'");
    $pirtMinsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN MINAHASA SELATAN'");

    $obatBolmong = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN BOLAANG MONGONDOW'");
    $saryanfarBolmong = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW'");
    $produksiBolmong = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW'");
    $pirtBolmong = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW'");

    $obatBolmut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN BOLAANG MONGONDOW UTARA'");
    $saryanfarBolmut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW UTARA'");
    $produksiBolmut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW UTARA'");
    $pirtBolmut = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW UTARA'");

    $obatBoltim = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN BOLAANG MONGONDOW TIMUR'");
    $saryanfarBoltim = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW TIMUR'");
    $produksiBoltim = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW TIMUR'");
    $pirtBoltim = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW TIMUR'");

    $obatBolsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Distribusi Obat' AND kab_kota = 'KABUPATEN BOLAANG MONGONDOW SELATAN'");
    $saryanfarBolsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Sarana Pelayanan Kefarmasian' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW SELATAN'");
    $produksiBolsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi MD' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW SELATAN'");
    $pirtBolsel = total("SELECT jenis_sarana, kab_kota FROM sarana_tbl WHERE jenis_sarana ='Produksi Industri Rumah Tanggga Pangan (IRTP)' AND kab_kota ='KABUPATEN BOLAANG MONGONDOW SELATAN'");
    ?>
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Pengawasan Sarana Obat dan Makanan BBPOM di Manado'
            },
            subtitle: {
                text: 'Sumber: Laporan Hasil Pemeriksaan'
            },
            xAxis: {
                categories: [
                    'Kota Manado',
                    'Kota Tomohon',
                    'Kota Tondano',
                    'Kota Bitung',
                    'Kab Minahasa',
                    'Kab Minahasa Utara',
                    'Kab Minahasa Tenggara',
                    'Kab Minahasa Selatan',
                    'Kab Bolaang Mongondow',
                    'Kab Bolaang Mongondow Utara',
                    'Kab Bolaang Mongondow Timur',
                    'Kab Bolaang Mongondow Selatan'
                ],
                crosshair: true
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: 'Total Sarana'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Produksi Industri Rumah Tanggga Pangan (PIRT)',
                data: [<?= $pirtMdo; ?>, <?= $pirtTomohon; ?>, <?= $pirtTondano; ?>, <?= $pirtBitung; ?>,
                    <?= $pirtMinahasa; ?>, <?= $pirtMinut; ?>,
                    <?= $pirtMinteng; ?>,
                    <?= $pirtMinsel; ?>, <?= $pirtBolmong; ?>, <?= $pirtBolmut; ?>, <?= $pirtBoltim; ?>,
                    <?= $pirtBolsel; ?>
                ]

            }, {
                name: 'Produksi MD',
                data: [<?= $produksiMdo; ?>, <?= $produksiTomohon; ?>, <?= $produksiTondano; ?>,
                    <?= $produksiBitung; ?>,
                    <?= $produksiMinahasa; ?>, <?= $produksiMinut; ?>, <?= $produksiMinteng; ?>,
                    <?= $produksiMinsel; ?>, <?= $produksiBolmong; ?>, <?= $produksiBolmut; ?>,
                    <?= $produksiBoltim; ?>,
                    <?= $produksiBolsel; ?>
                ]

            }, {
                name: 'Distribusi Obat',
                data: [<?= $obatMdo; ?>, <?= $obatTomohon; ?>, <?= $obatTondano; ?>, <?= $obatBitung; ?>,
                    <?= $obatMinahasa; ?>, <?= $obatMinut; ?>,
                    <?= $obatMinteng; ?>,
                    <?= $obatMinsel; ?>, <?= $obatBolmong; ?>, <?= $obatBolmut; ?>, <?= $obatBoltim; ?>,
                    <?= $obatBolsel; ?>
                ]

            }, {
                name: 'Sarana Pelayanan Kefarmasian',
                data: [<?= $saryanfarMdo; ?>, <?= $saryanfarTomohon; ?>, <?= $saryanfarTondano; ?>,
                    <?= $saryanfarBitung; ?>,
                    <?= $saryanfarMinahasa; ?>, <?= $saryanfarMinut; ?>, <?= $saryanfarMinteng; ?>,
                    <?= $saryanfarMinsel; ?>,
                    <?= $saryanfarBolmong; ?>, <?= $saryanfarBolmut; ?>, <?= $saryanfarBoltim; ?>,
                    <?= $saryanfarBolsel; ?>
                ]

            }]
        });
    </script>

    <?php
    $napza21 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Napza' AND YEAR(tgl_selesai) =2021");
    $totalNapza21 = mysqli_num_rows($napza21);

    $napza22 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Napza' AND YEAR(tgl_selesai) =2022");
    $totalNapza22 = mysqli_num_rows($napza22);

    $napza23 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Napza' AND YEAR(tgl_selesai) =2023");
    $totalNapza23 = mysqli_num_rows($napza23);

    $produkPangan21 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Produk Pangan' AND YEAR(tgl_selesai) =2021");
    $totalPangan21 = mysqli_num_rows($produkPangan21);

    $produkPangan22 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Produk Pangan' AND YEAR(tgl_selesai) =2022");
    $totalPangan22 = mysqli_num_rows($produkPangan22);

    $produkPangan23 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Produk Pangan' AND YEAR(tgl_selesai) =2023");
    $totalPangan23 = mysqli_num_rows($produkPangan23);

    $obat21 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Obat' AND YEAR(tgl_selesai) =2021");
    $totalObat21 = mysqli_num_rows($obat21);

    $obat22 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Obat' AND YEAR(tgl_selesai) =2022");
    $totalObat22 = mysqli_num_rows($obat22);

    $obat23 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Obat' AND YEAR(tgl_selesai) =2023");
    $totalObat23 = mysqli_num_rows($obat23);

    $kosmetik21 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Kosmetik' AND YEAR(tgl_selesai) =2021");
    $totalKosmetik21 = mysqli_num_rows($kosmetik21);

    $kosmetik22 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Kosmetik' AND YEAR(tgl_selesai) =2022");
    $totalKosmetik22 = mysqli_num_rows($kosmetik22);

    $kosmetik23 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Kosmetik' AND YEAR(tgl_selesai) =2023");
    $totalKosmetik23 = mysqli_num_rows($kosmetik23);

    $ot21 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Obat Tradisional' AND YEAR(tgl_selesai) =2021");
    $totalOt21 = mysqli_num_rows($ot21);

    $ot22 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Obat Tradisional' AND YEAR(tgl_selesai) =2022");
    $totalOt22 = mysqli_num_rows($ot22);

    $ot23 = mysqli_query($connSampel, "SELECT * FROM sampel_uji WHERE komoditi ='Obat Tradisional' AND YEAR(tgl_selesai) =2023");
    $totalOt23 = mysqli_num_rows($ot23);
    ?>
    <script>
        Highcharts.chart('container-pengujian-sampel', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Komoditi Sampel'
            },
            subtitle: {
                text: 'Sumber: Simpel Sampel'
            },
            xAxis: {
                categories: ['2021', '2022', '2023'],
                crosshair: true
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: 'Total Sampel'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Napza',
                data: [<?= $totalNapza21; ?>, <?= $totalNapza22; ?>, <?= $totalNapza23; ?>]
            }, {
                name: 'Produk Pangan',
                data: [<?= $totalPangan21; ?>, <?= $totalPangan22; ?>, <?= $totalPangan23; ?>]

            }, {
                name: 'Obat Tradisional',
                data: [<?= $totalOt21; ?>, <?= $totalOt22; ?>, <?= $totalOt23; ?>]

            }, {
                name: 'Obat',
                data: [<?= $totalObat21; ?>, <?= $totalObat22; ?>, <?= $totalObat23; ?>]
            }, {
                name: 'Kosmetik',
                data: [<?= $totalKosmetik21; ?>, <?= $totalKosmetik22; ?>, <?= $totalKosmetik23; ?>]
            }]
        });
    </script>


    <?php
    $swasta20 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Swasta' AND YEAR(tgl_selesai) =2020");

    $kepolisian20 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Kepolisian' AND YEAR(tgl_selesai) =2020");

    $ip20 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Instansi Pemerintah' AND YEAR(tgl_selesai) =2020");

    $swasta21 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Swasta' AND YEAR(tgl_selesai) =2021");

    $kepolisian21 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Kepolisian' AND YEAR(tgl_selesai) =2021");

    $ip21 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Instansi Pemerintah' AND YEAR(tgl_selesai)=2021");

    $swasta22 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Swasta' AND YEAR(tgl_selesai) =2022");

    $kepolisian22 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Kepolisian' AND YEAR(tgl_selesai) =2022");

    $ip22 = totalSampel("SELECT jenis_layanan, tgl_selesai
                            FROM sampel_uji
                            WHERE jenis_layanan ='Instansi Pemerintah' AND YEAR(tgl_selesai) =2022");
    ?>

    <script>
        var chart = Highcharts.chart('container-kategori-konsumen', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jenis Layanan Pihak Ketiga'
            },
            subtitle: {
                text: 'Sumber: Simpel Sampel'
            },
            legend: {
                align: 'right',
                verticalAlign: 'middle',
                layout: 'vertical'
            },
            xAxis: {
                categories: ['2020', '2021', '2022'],
                labels: {
                    x: -10
                }
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Total Jenis Layanan'
                }
            },
            series: [{
                name: 'Swasta',
                data: [<?= $swasta20; ?>, <?= $swasta21; ?>, <?= $swasta22; ?>]
            }, {
                name: 'Kepolisian',
                data: [<?= $kepolisian20; ?>, <?= $kepolisian21; ?>, <?= $kepolisian22; ?>]
            }, {
                name: 'Instansi Pemerintah',
                data: [<?= $ip20; ?>, <?= $ip21; ?>, <?= $ip22; ?>]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            align: 'center',
                            verticalAlign: 'bottom',
                            layout: 'horizontal'
                        },
                        yAxis: {
                            labels: {
                                align: 'left',
                                x: 0,
                                y: -5
                            },
                            title: {
                                text: null
                            }
                        },
                        subtitle: {
                            text: null
                        },
                        credits: {
                            enabled: false
                        }
                    }
                }]
            }
        });
    </script>

    <script>
        var chart = Highcharts.chart('container-rb', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Index Persepsi Reformasi Birokrasi'
            },
            subtitle: {
                text: 'Sumber: Sabua Perubahan'
            },
            legend: {
                align: 'right',
                verticalAlign: 'middle',
                layout: 'vertical'
            },
            xAxis: {
                categories: ['2020', '2021', '2022'],
                labels: {
                    x: -10
                }
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Total Jenis Layanan'
                }
            },
            series: [{
                name: 'Januari',
                data: [3.09, 3.22, 3.41]
            }, {
                name: 'Juli',
                data: [3.29, 3.34, 3.58]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            align: 'center',
                            verticalAlign: 'bottom',
                            layout: 'horizontal'
                        },
                        yAxis: {
                            labels: {
                                align: 'left',
                                x: 0,
                                y: -5
                            },
                            title: {
                                text: null
                            }
                        },
                        subtitle: {
                            text: null
                        },
                        credits: {
                            enabled: false
                        }
                    }
                }]
            }
        });
    </script>

    <script>
        var chart = Highcharts.chart('container-pikkir', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Index Persepsi Budaya Organisasi PIKKIR'
            },
            subtitle: {
                text: 'Sumber: Sabua Perubahan'
            },
            legend: {
                align: 'right',
                verticalAlign: 'middle',
                layout: 'vertical'
            },
            xAxis: {
                categories: ['2020', '2021', '2022'],
                labels: {
                    x: -10
                }
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Total Index Persepsi'
                }
            },
            series: [{
                name: 'Januari',
                data: [2.75, 2.81, 3.18]
            }, {
                name: 'Juli',
                data: [2.82, 3.13, 3.37]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            align: 'center',
                            verticalAlign: 'bottom',
                            layout: 'horizontal'
                        },
                        yAxis: {
                            labels: {
                                align: 'left',
                                x: 0,
                                y: -5
                            },
                            title: {
                                text: null
                            }
                        },
                        subtitle: {
                            text: null
                        },
                        credits: {
                            enabled: false
                        }
                    }
                }]
            }
        });
    </script>

    <script>
        Highcharts.chart('container-penindakan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Profil Perkara Balai Besar POM di Manado',
                align: 'left'
            },
            xAxis: {
                categories: ['2018', '2019', '2020', '2021']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Count trophies'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: ( // theme
                            Highcharts.defaultOptions.title.style &&
                            Highcharts.defaultOptions.title.style.color
                        ) || 'gray',
                        textOutline: 'none'
                    }
                }
            },
            legend: {
                align: 'left',
                x: 70,
                verticalAlign: 'top',
                y: 70,
                floating: true,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                headerFormat: '<b>{point.x}</b><br/>',
                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            series: [{
                name: 'Obat',
                data: [1, 4, 14, 13]
            }, {
                name: 'Obat Tradisional',
                data: [1, 1, 1, 0]
            }, {
                name: 'Kosmetik',
                data: [1, 3, 1, 0]
            }, {
                name: 'Pangan',
                data: [4, 1, 0, 0]
            }]
        });
    </script>

    <script>
        Highcharts.chart('container-struktrur-org', {
            chart: {
                height: 700,
                inverted: true
            },

            title: {
                text: 'Struktur Organisasi BBPOM di Manado'
            },

            accessibility: {
                point: {
                    descriptionFormatter: function(point) {
                        var nodeName = point.toNode.name,
                            nodeId = point.toNode.id,
                            nodeDesc = nodeName === nodeId ? nodeName : nodeName + ', ' + nodeId,
                            parentDesc = point.fromNode.id;
                        return point.index + '. ' + nodeDesc + ', reports to ' + parentDesc + '.';
                    }
                }
            },

            series: [{
                type: 'organization',
                name: 'Highsoft',
                keys: ['from', 'to'],
                data: [
                    ['Shareholders', 'Board'],
                    ['Board', 'CEO'],
                    ['CEO', 'CTO'],
                    ['CEO', 'CPO'],
                    ['CEO', 'CSO'],
                    ['CEO', 'HR'],
                    ['CTO', 'Product'],
                    ['CTO', 'Web'],
                    ['CSO', 'Sales'],
                    ['HR', 'Market'],
                    ['CSO', 'Market'],
                    ['HR', 'Market'],
                    ['CTO', 'Market']
                ],
                levels: [{
                    level: 0,
                    color: 'silver',
                    dataLabels: {
                        color: 'black'
                    },
                    height: 25
                }, {
                    level: 1,
                    color: 'silver',
                    dataLabels: {
                        color: 'black'
                    },
                    height: 25
                }, {
                    level: 2,
                    color: '#980104'
                }, {
                    level: 4,
                    color: '#359154'
                }],
                nodes: [{
                    id: 'Shareholders'
                }, {
                    id: 'Board'
                }, {
                    id: 'CEO',
                    title: 'Kepala Balai',
                    name: 'Dra. Hariani, Apt',
                    image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131156/Highsoft_03834_.jpg'
                }, {
                    id: 'HR',
                    title: 'CFO',
                    name: 'Anne Jorunn Fjærestad',
                    color: '#007ad0',
                    image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131210/Highsoft_04045_.jpg'
                }, {
                    id: 'CTO',
                    title: 'CTO',
                    name: 'Christer Vasseng',
                    image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131120/Highsoft_04074_.jpg'
                }, {
                    id: 'CPO',
                    title: 'CPO',
                    name: 'Torstein Hønsi',
                    image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2020/03/17131213/Highsoft_03998_.jpg'
                }, {
                    id: 'CSO',
                    title: 'CSO',
                    name: 'Anita Nesse',
                    image: 'https://wp-assets.highcharts.com/www-highcharts-com/blog/wp-content/uploads/2022/06/30081411/portrett-sorthvitt.jpg'
                }, {
                    id: 'Product',
                    name: 'Product developers'
                }, {
                    id: 'Web',
                    name: 'Web devs, sys admin'
                }, {
                    id: 'Sales',
                    name: 'Sales team'
                }, {
                    id: 'Market',
                    name: 'Marketing team',
                    column: 5
                }],
                colorByPoint: false,
                color: '#007ad0',
                dataLabels: {
                    color: 'white'
                },
                borderColor: 'white',
                nodeWidth: 65
            }],
            tooltip: {
                outside: true
            },
            exporting: {
                allowHTML: true,
                sourceWidth: 800,
                sourceHeight: 600
            }

        });
    </script>
</body>

</html>