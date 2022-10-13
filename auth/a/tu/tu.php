<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Chart /</span> Tata Usaha
    </h4>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-rb" aria-controls="navs-justified-rb" aria-selected="true">
                            Reformasi Birokrasi
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-pikkir" aria-controls="navs-justified-pikkir"
                            aria-selected="false">Budaya Organisasi PIKKIR
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages"
                            aria-selected="false">
                            <i class="tf-icons bx bx-message-square"></i> Messages
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-justified-rb" role="tabpanel">
                        <figure class="highcharts-figure mb-4">
                            <div id="chart-rb"></div>
                        </figure>
                        <br>
                        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                            data-bs-target="#indexRb">Tambah</button>
                        <table id="dataTables" class="table table-responsive table-hover table-border-bottom-0"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Bulan</th>
                                    <th class="text-center">Tahun</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Author</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sqlDataRb = query("SELECT * FROM tbl_rb INNER JOIN tbl_users ON tbl_rb.author_id = tbl_users.idUser ORDER BY tbl_rb.id_rb DESC");
                                foreach ($sqlDataRb as $row) {
                                    $bulan = $row['bulan'];
                                    $tahun = $row['tahun'];
                                    $author = $row['namaLengkap'];
                                    $jumlah = $row['jumlah_rb'];
                                    $rbId = $row['id_rb'];
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $bulan; ?></td>
                                    <td class="text-center"><?= $tahun; ?></td>
                                    <td class="text-center"><?= $jumlah; ?></td>
                                    <td class="text-center"><?= $author; ?></td>
                                    <td class="text-center">
                                        <a href="?p=ubahDataRb&code=<?= $rbId; ?>" class="btn btn-sm btn-dark">Ubah</a>
                                        <button class="btn btn-sm btn-outline-danger" type="button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#hapusDataRb-<?= $rbId; ?>">Hapus</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="navs-justified-pikkir" role="tabpanel">
                        <p>
                            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                            cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice
                            cream
                            cheesecake fruitcake.
                        </p>
                        <p class="mb-0">
                            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                            cotton candy liquorice caramels.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                        <p>
                            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                            cupcake gummi bears cake chocolate.
                        </p>
                        <p class="mb-0">
                            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake.
                            Sweet
                            roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding
                            jelly
                            jelly-o tart brownie jelly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="indexRb" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <form action="?p=prosesDataIndexRb" class="modal-content" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Data
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="authorId" class="form-control" value="<?= $_SESSION['akun_id'] ?>" readonly
                    required />
                <div class="row g-2">
                    <div class="col mb-3">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select name="bulan" id="bulan" class="form-select" required>
                            <option value="" selected>Pilih</option>
                            <option value="Januari">Januari</option>
                            <option value="Juli">Juli</option>
                        </select>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-sm col-md-6 mb-0">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="0" required />
                    </div>
                    <div class="col-sm col-md-6 mb-0">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" name="tahun" id="tahun" class="form-control" placeholder="20xx" required />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" name="btnTambahDataRb" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php
$no = 1;
$queryDataRb = query("SELECT id_rb, bulan, tahun, jumlah_rb, namaLengkap FROM tbl_rb INNER JOIN tbl_users ON tbl_rb.author_id = tbl_users.idUser ORDER BY tbl_rb.id_rb DESC");
foreach ($queryDataRb as $row) {
    $bulan = $row['bulan'];
    $tahun = $row['tahun'];
    $author = $row['namaLengkap'];
    $jumlah = $row['jumlah_rb'];
    $rbId = $row['id_rb'];
?>
<div class="modal fade" id="hapusDataRb-<?= $rbId; ?>" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Hapus Data
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Data Index Reformasi Birokrasi
                <ol>
                    <li><?= $bulan; ?></li>
                    <li><?= $tahun; ?></li>
                    <li><?= $jumlah; ?></li>
                </ol>
                hapus data ini?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                    Batal
                </button>
                <a href="?p=prosesHapusDataRb&code=<?= $rbId; ?>" class="btn btn-primary">Ya, hapus data</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>