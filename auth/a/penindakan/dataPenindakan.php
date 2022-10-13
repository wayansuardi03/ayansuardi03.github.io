<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Chart /</span> Penindakan
    </h4>
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Profil Perkara Penindakan</h5>
                            <p class="mb-4">
                                Trend capaian kinerja per tahun
                            </p>

                            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                                data-bs-target="#backDropModal">Tambah</button>

                            <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <form action="?p=prosesDataPerkaraPenindakan" class="modal-content" method="POST">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="backDropModalTitle">Tambah Data
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="authorId" class="form-control"
                                                value="<?= $_SESSION['akun_id'] ?>" readonly required />
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <label for="komoditi" class="form-label">Komoditi</label>
                                                    <select name="komoditi" id="komoditi" class="form-select" required>
                                                        <option value="" selected>Pilih</option>
                                                        <option value="Obat">Obat</option>
                                                        <option value="Napza">Napza</option>
                                                        <option value="Pangan">Pangan</option>
                                                        <option value="Kosmetik">Kosmetik</option>
                                                        <option value="Obat Tradisional">Obat Tradisional</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-sm col-md-6 mb-0">
                                                    <label for="jumlah" class="form-label">Jumlah</label>
                                                    <input type="number" name="jumlah" id="jumlah" class="form-control"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-sm col-md-6 mb-0">
                                                    <label for="tahun" class="form-label">Tahun</label>
                                                    <input type="number" name="tahun" id="tahun" class="form-control"
                                                        placeholder="20xx" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">
                                                Batal
                                            </button>
                                            <button type="submit" name="btnTambahDataPerkaraPenindakan"
                                                class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table id="dataTables" class="table table-responsive table-hover table-border-bottom-0"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Komoditi</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Tahun</th>
                                        <th class="text-center">Post Date</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sqlDataPenindakan = query("SELECT * FROM tbl_penindakan_perkara ORDER BY id_penindakan DESC");
                                    foreach ($sqlDataPenindakan as $row) :
                                        $penindakanId = $row['id_penindakan'];
                                        $komoditi = $row['komoditi'];
                                        $jumlah = $row['jumlah'];
                                        $tahun = $row['tahun'];
                                        $date = $row['date_post'];
                                        $verif = $row['verified'];
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td><?= $komoditi; ?></td>
                                        <td class="text-center"><?= $jumlah; ?></td>
                                        <td class="text-center"><?= $tahun; ?></td>
                                        <td class="text-center"><?= $date; ?></td>
                                        <td class="text-center">
                                            <?php
                                                if ($verif == 1023) {
                                                    echo 'Perlu Konfirmasi';
                                                } elseif ($verif == 1010) {
                                                    echo 'Terkonfimasi';
                                                } else {
                                                    echo 'Periksa database, data tidak diketahui.';
                                                }
                                                ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="?p=ubahDataPenindakan&code=<?= $penindakanId; ?>"
                                                class="btn btn-sm btn-dark">Ubah</a>
                                            <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>