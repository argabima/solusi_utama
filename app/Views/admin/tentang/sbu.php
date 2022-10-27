<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<style>
    table tr * {
        white-space: nowrap;
    }
</style>

<?php
if (session()->getFlashdata('pesan')) : ?>
    <div aria-live="polite" aria-atomic="true" class="mt-4 d-flex justify-content-end align-items-center w-100">
        <div class="toast-container position-fixed">
            <div class="toast bg-info align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?= session()->getFlashdata('pesan') ?>
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<div class="main-content">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 mt-3 col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-success d-flex justify-content-between">
                        <h6 class="card-title m-0 my-2 text-white">Daftar Kategori</h6>
                        <a href="" class="fa fa-solid fa-plus my-2 text-white fs-5" title="tambah data kategori" data-bs-toggle="modal" data-bs-target="#modal-tambah"></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table border-white table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kategori as $k) : ?>
                                        <tr>
                                            <td><?= $k['nama_kategori'] ?></td>
                                            <td class="text-center td-inline">
                                                <a href="#" title="edit" class="mx-1 text-success fa fa-solid fa-file-pen" data-bs-toggle="modal" data-bs-target="#edit-kategori<?= $k['id'] ?>"></a>
                                                <form action="/admin/sbu/hapus_sbu/<?= $k['id'] ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="text-danger btn-delete bi bi-trash mx-1" title="hapus" onclick="return confirm('Are you sure you want to delete this item?');"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mt-3 col-md-12">
                <div class="card h-100">
                    <div class="card-header bg-success d-flex justify-content-between">
                        <h6 class="card-title m-0 my-2 text-white">Subklafisikasi</h6>

                        <a href="/admin/sbu/tambah-sbu/" class="fa fa-solid fa-plus my-2 text-white fs-5" title="tambah data"></a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Subklafisikasi</th>
                                        <th>Kategori</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sertifikasi as $s) : ?>
                                        <tr>
                                            <td><?= $s['kode_sertifikasi'] ?></td>
                                            <td><?= $s['nama_sertifikasi'] ?></td>
                                            <td><?= $s['nama_kategori'] ?></td>
                                            <td class="text-center td-inline">
                                                <a href="/admin/sbu/edit-sbu/<?= $s['id']; ?>" title="edit" class="mx-1 text-success fa fa-solid fa-file-pen"></a>
                                                <form action="/admin/sbu/hapus-sbu/<?= $s['id']; ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="text-danger btn-delete bi bi-trash mx-1" title="hapus" onclick="return confirm('Are you sure you want to delete this item?');"></button>
                                                </form>
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

<!-- Modal Tambah -->
<div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/sbu/tambah-kategori" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control <?= ($validation->getError('nama_kategori')) ? 'is-invalid' : ''; ?>" name="nama_kategori" placeholder="Masukkan Kategori" value="<?= old('nama_kategori') ?>">
                        <code class=" text-danger"><?= $validation->getError('nama_kategori') ?></code>
                    </div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_kategori'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal edit kategori -->
<?php foreach ($kategori as $k) : ?>
    <div class="modal fade" id="edit-kategori<?= $k['id'] ?>" tabindex="-1" aria-labelledby="edit-kategoriLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white fs-6" id="edit-kategoriLabel">Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/sbu/edit_kategori/<?= $k['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="nama-kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama-kategori" name="nama_kategori" value="<?= $k['nama_kategori'] ?>" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection() ?>