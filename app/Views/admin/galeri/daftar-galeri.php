<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
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
<style>
    .modal-detail .modal-body table tr td {
        letter-spacing: 1px;
    }
</style>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Daftar Kategori Jasa</h5>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-sm btn-success shadow-none mb-3" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kategori as $key) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $key['nama_kategori']; ?></td>
                                            <td class="text-center td-inline">
                                                <a href="" title="edit" class="mx-1 text-success fa fa-solid fa-file-pen" data-bs-toggle="modal" data-bs-target="#edit<?= $key['id'] ?>"></a>
                                                <form action="/admin/galeri/hapus-kategori/<?= $key['id'] ?>" method="post">
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
            <div class="col-lg-12 col-12 mt-lg-3">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Daftar Gallery</h5>
                    </div>
                    <div class="card-body">
                        <a href="/admin/galeri/tambah" class="btn btn-sm btn-success shadow-none mb-3">Tambah</a>
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Pemberi Tugas</th>
                                        <th>Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data as $key) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?></th>
                                            <td><?= $key['tanggal'] ?></td>
                                            <td><?= $key['pemberi_tugas'] ?></td>
                                            <td>Rp. <?= $key['nilai'] ?></td>
                                            <td class="text-center td-inline">
                                                <a type="button" title="detail" class="h-100 text-secondary fa fa-regular fa-eye-slash" data-bs-toggle="modal" data-bs-target="#detail<?= $key['id'] ?>"></a>
                                                <a href="/admin/galeri/edit/<?= $key['id'] ?>" title="edit" class="mx-2 text-success fa fa-solid fa-file-pen"></a>

                                                <form action="/admin/galeri/hapus/<?= $key['id'] ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="text-danger btn-delete bi bi-trash" title="hapus" onclick="return confirm('Are you sure you want to delete this item?');"></button>
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

<!-- modal detail -->
<?php foreach ($data as $key) : ?>
    <div class="modal fade modal-detail" id="detail<?= $key['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Detail Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-5 text-center">
                            <img src="<?= base_url('/img/foto_galeri') . '/' . $key['poster'] ?>" class="w-100 mb-3">
                        </div>
                        <div class="col-12">
                            <table class="w-100">
                                <tr>
                                    <td>Nomor</td>
                                    <td>:</td>
                                    <td><?= $key['nomor'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td><?= $key['nama_kategori'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><?= $key['tanggal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>:</td>
                                    <td><?= $key['lokasi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pemberi Tugas</td>
                                    <td>:</td>
                                    <td><?= $key['pemberi_tugas'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nilai</td>
                                    <td>:</td>
                                    <td><?= $key['nilai'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- modal tambah kategori jasa -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Kategori Jasa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/galeri/tambah-kategori" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" required>
                    </div>
                    <div class="gap-2 text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal edit kategori jasa -->
<?php foreach ($kategori as $key) : ?>
    <div class="modal fade" id="edit<?= $key['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Kategori Jasa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                    <form action="/admin/galeri/edit-kategori/<?= $key['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" value="<?= $key['nama_kategori'] ?>" required>
                        </div>
                        <div class="gap-2 text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection() ?>