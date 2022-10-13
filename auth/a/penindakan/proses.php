<?php
include "../../assets/conf/koneksi-pindai.php";
if (isset($_POST['btnTambahDataPerkaraPenindakan'])) {
    $komoditi = mysqli_escape_string($koneksi, trim($_POST['komoditi']));
    $jumlah = mysqli_escape_string($koneksi, trim($_POST['jumlah']));
    $tahun = mysqli_escape_string($koneksi, trim($_POST['tahun']));
    $tglPosting = date('Y-m-d');
    $author = mysqli_escape_string($koneksi, trim($_POST['authorId']));
    $cekDataPerkara = "SELECT * FROM tbl_penindakan_perkara WHERE komoditi ='$komoditi' AND tahun ='$tahun' LIMIT 1";
    $queryDataPerkara = mysqli_query($koneksi, $cekDataPerkara);
    $verifikasiDataPerkara = mysqli_num_rows($queryDataPerkara);
    if ($verifikasiDataPerkara > 0) {
        $_SESSION['message'] = 'Jenis Komoditi dan tahun sudah tersedia.';
        $_SESSION['msg_type'] = "danger";
        echo '
            <script>
                window.location.href="?p=penindakanPerkara&action=gagalTambahData";
            </script>       
            ';
    } else {
        $sqlDataPerkaraPenindakan = "INSERT INTO tbl_penindakan_perkara (komoditi, tahun, jumlah, author_id, date_post) VALUES ('$komoditi', '$tahun', '$jumlah', '$author', '$tglPosting') LIMIT 1";
        $queryData = mysqli_query($koneksi, $sqlDataPerkaraPenindakan);
        $_SESSION['message'] = "Sukses, data berhasil disimpan.";
        $_SESSION['msg_type'] = "success";
        echo '
                <script>
                    window.location.href="?p=penindakanPerkara&action=berhasil";
                </script>
            ';
    }
}