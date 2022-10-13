<div class="blog-area full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Data Pengawasan</h2>
                    <p>Laporan Hasil Pemeriksaan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-9">
                    <!-- Single Item -->
                    <div class="single-item item">
                        <div class="thumb">
                            <a href="#">
                                <img src="assets/img/blog/66.jpg" alt="Thumb">
                            </a>
                        </div>
                        <div class="info">
                            <div class="date">
                                12 Sep, 2019
                            </div>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 24 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Memorial use speaking exercise may repeated</a>
                            </h4>
                            <p>
                                Particular use for considered projection cultivated. Worth of do doubt shall it their.
                                Extensive existence up me contained he pronounce do. Excellence inquietude assistance
                                precaution any impression man sufficient.
                            </p>
                            <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar col-md-3">
                    <aside>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>Wilayah Pengawasan </h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <?php
                                    $no = 1;
                                    $sqlPengawasan = mysqli_query($connlhp, "SELECT kab_kota, COUNT(*) AS 'total' FROM sarana_tbl GROUP BY kab_kota");
                                    while ($c = mysqli_fetch_array($sqlPengawasan)) :
                                        $wilayah = $c['kab_kota'];
                                        $total = $c['total'];
                                    ?>
                                    <li>
                                        <a href="#">
                                            <?= $wilayah; ?> <span>(<?= $total; ?>)</span>
                                        </a>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->