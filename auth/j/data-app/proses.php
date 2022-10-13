<?php
include "../../assets/conf/koneksi-pindai.php";
if (isset($_POST['btnTambahDataApp'])) {
    $aplikasi = mysqli_escape_string($koneksi, sanitize($_POST['aplikasi']));
    $jenis = mysqli_escape_string($koneksi, sanitize($_POST['jenis']));
    $kategori = mysqli_escape_string($koneksi, sanitize($_POST['kategori']));
    $tautan = mysqli_escape_string($koneksi, sanitize($_POST['tautan']));
    $author = mysqli_escape_string($koneksi, sanitize($_POST['authorId']));
    $catatan = mysqli_escape_string($koneksi, sanitize($_POST['keterangan']));
    $cekDataApp = "SELECT * FROM tbl_app WHERE nama_app ='$aplikasi' AND kategori_app ='$kategori' AND sub_kategori_app ='$jenis' LIMIT 1";
    $queryCekDataApp = mysqli_query($koneksi, $cekDataApp);
    $validasiDataApp = mysqli_num_rows($queryCekDataApp);
    if ($validasiDataApp > 0) {
        $_SESSION['message'] = 'Data aplikasi sudah tersedia.';
        $_SESSION['msg_type'] = "danger";
        echo '
            <script>
                window.location.href="?p=dataApp&action=gagalTambahData";
            </script>       
            ';
    } else {
        $sqlDataApp = "INSERT INTO tbl_app (nama_app, kategori_app, link, sub_kategori_app, catatan, author_id) VALUES ('$aplikasi', '$kategori', '$tautan', '$jenis', '$catatan', '$author') LIMIT 1";
        $queryData = mysqli_query($koneksi, $sqlDataApp);
        $_SESSION['message'] = 'Data aplikasi sudah tersedia.';
        $_SESSION['msg_type'] = "danger";
        echo '
            <script>
                window.location.href="?p=dataApp&action=berhasil";
            </script>       
            ';
    }
}