<!-- End Fun Fact Area -->

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
<!-- End Services Area -->