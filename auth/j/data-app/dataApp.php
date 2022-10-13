<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Aplikasi /</span> Daftar Aplikasi
    </h4>
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Daftar Aplikasi Internal </h5>
                            <p class="mb-4">
                                BBPOM di Manado
                            </p>

                            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                                data-bs-target="#tambahDataApp">Tambah</button>

                            <div class="modal fade" id="tambahDataApp" data-bs-backdrop="static" tabindex="-1">
                                <div class="modal-dialog">
                                    <form action="?p=prosesDataApp" class="modal-content" method="POST">
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
                                                    <label for="aplikasi" class="form-label">Nama App</label>
                                                    <input type="text" name="aplikasi" id="aplikasi"
                                                        class="form-control" placeholder="Masukkan Nama Aplikasi"
                                                        required />
                                                </div>
                                                <div class="col col-md-4 col-lg-4 mb-3">
                                                    <label for="jenis" class="form-label">Jenis App</label>
                                                    <select name="jenis" id="jenis" class="form-select" required>
                                                        <option value="" selected>Pilih</option>
                                                        <option value="Internal">Internal</option>
                                                        <option value="Eksternal">Eksternal</option>
                                                        <option value="Internal & Eksternal">Internal & Eksternal
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col col-md-3 col-lg-3 mb-3">
                                                    <label for="kategori" class="form-label">Kategori</label>
                                                    <select name="kategori" id="kategori" class="form-select" required>
                                                        <option value="" selected>Pilih</option>
                                                        <option value="Balai">Balai</option>
                                                        <option value="Pusat">Pusat</option>
                                                    </select>
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="tautan" class="form-label">Tautan</label>
                                                    <input type="text" name="tautan" id="tautan" class="form-control"
                                                        placeholder="Masukkan Tautan" required />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" name="keterangan" id="keterangan"
                                                    class="form-control" placeholder="Masukkan Keterangan" required />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">
                                                Batal
                                            </button>
                                            <button type="submit" name="btnTambahDataApp"
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
                                        <th class="text-center">Nama App</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Jenis</th>
                                        <th class="text-center">Tautan</th>
                                        <th class="text-center">Author</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sqlDataApp = query("SELECT * FROM tbl_app INNER JOIN tbl_users ON tbl_app.author_id = tbl_users.idUser ORDER BY tbl_app.id_app DESC");
                                    foreach ($sqlDataApp as $row) :
                                        $appId = $row['id_app'];
                                        $app = $row['nama_app'];
                                        $kategori = $row['kategori_app'];
                                        $tautan = $row['link'];
                                        $subKatgeori = $row['sub_kategori_app'];
                                        $author = $row['namaLengkap'];
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td><?= $app; ?></td>
                                        <td class="text-center"><?= $kategori; ?></td>
                                        <td class="text-center"><?= $subKatgeori; ?></td>
                                        <td class="text-center"><?= $tautan; ?></td>
                                        <td class="text-center"><?= $author; ?></td>
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