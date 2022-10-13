<?php
include "../../assets/conf/koneksi-pindai.php";
if (isset($_POST['btnTambahDataRb'])) {
    $bulan = mysqli_escape_string($koneksi, sanitize($_POST['bulan']));
    $jumlah = mysqli_escape_string($koneksi, sanitize($_POST['jumlah']));
    $tahun = mysqli_escape_string($koneksi, sanitize($_POST['tahun']));
    $tglPosting = date('Y-m-d');
    $author = mysqli_escape_string($koneksi, sanitize($_POST['authorId']));
    $cekDataRb = "SELECT * FROM tbl_rb WHERE bulan ='$bulan' AND tahun ='$tahun' LIMIT 1";
    $queryDataRb = mysqli_query($koneksi, $cekDataRb);
    $verifikasiDataRb = mysqli_num_rows($queryDataRb);
    if ($verifikasiDataRb > 0) {
        $_SESSION['message'] = 'Data bulan dan tahun sudah tersedia.';
        $_SESSION['msg_type'] = "danger";
        echo '
            <script>
                window.location.href="?p=tataUsaha&action=gagalTambahData";
            </script>       
            ';
    } else {
        $sqlDataRb = "INSERT INTO tbl_rb (bulan, tahun, jumlah_rb, author_id, date_post) VALUES ('$bulan', '$tahun', '$jumlah', '$author', '$tglPosting') LIMIT 1";
        $queryData = mysqli_query($koneksi, $sqlDataRb);
        $_SESSION['message'] = "Sukses, data berhasil disimpan.";
        $_SESSION['msg_type'] = "success";
        echo '
                <script>
                    window.location.href="?p=tataUsaha&action=berhasil";
                </script>
            ';
    }
}