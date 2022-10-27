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

<div class="main-content">

    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container about px-lg-0">
            <div class="card">
                <div class="card-header bg-success">
                    <h5 class="text-center my-1 text-white">Data Personil Perusahaan</h5>
                </div>
            </div>
            <div class="row">

                <!-- daftar kategori -->
                <div class="col-sm-12 col-lg-4 mt-3">
                    <div class="card h-100">
                        <div class="card-header bg-success d-flex justify-content-between">
                            <h6 class="text-white">Kategori</h6>
                            <a href="#" class="fa fa-solid fa-plus text-white" title="Tambah Kategori" data-bs-toggle="modal" data-bs-target="#tambah-kategori"></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
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
                                                    <a href="#" title="edit" data-bs-toggle="modal" data-bs-target="#edit-kategori<?= $k['id'] ?>" class="mx-1 text-success fa fa-solid fa-file-pen"></a>
                                                    <form action="/admin/daftar-personil/hapus/kategori/<?= $k['id'] ?>" method="post">
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

                <!-- daftar jabatan -->
                <div class="col-sm-12 col-lg-8 mt-3">
                    <div class="card h-100">
                        <div class="card-header bg-success d-flex justify-content-between">
                            <h6 class="text-white">Jabatan</h6>
                            <a href="#" class="fa fa-solid fa-plus text-white" title="Tambah Jabatan" data-bs-toggle="modal" data-bs-target="#tambah-jabatan"></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nama Jabatan</th>
                                            <th>Kategori</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($jabatan as $j) : ?>
                                            <tr>
                                                <td><?= $j['nama_jabatan'] ?></td>
                                                <td><?= $j['nama_kategori'] ?></td>
                                                <td class="text-center td-inline">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit-jabatan<?= $j['id'] ?>" title="edit" class="mx-1 text-success fa fa-solid fa-file-pen"></a>
                                                    <form action="/admin/daftar-personil/hapus/jabatan/<?= $j['id'] ?>" method="post">
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

                <!-- daftar personil -->
                <div class="col-sm-12 col-lg-12 mt-3">
                    <div class="card h-100">
                        <div class="card-header bg-success d-flex justify-content-between">
                            <h6 class="text-white">Data Personil</h6>
                            <a href="/admin/daftar-personil/tambah-personil" class="fa fa-solid fa-plus text-white" title="Tambah Personil"></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nama Personil</th>
                                            <th>Jabatan</th>
                                            <th>Kategori</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($personil as $p) : ?>
                                            <tr>
                                                <td><?= $p['nama_personil'] ?></td>
                                                <td><?= $p['nama_jabatan'] ?></td>
                                                <td><?= $p['nama_kategori'] ?></td>
                                                <td class="text-center td-inline">
                                                    <a href="/admin/daftar-personil/edit-personil/<?= $p['id'] ?>" title="edit" class="mx-1 text-success fa fa-solid fa-file-pen"></a>
                                                    <form action="/admin/daftar-personil/hapus-personil/<?= $p['id'] ?>" method="post">
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
</div>

<!-- modal tambah kategori -->
<div class="modal fade" id="tambah-kategori" tabindex="-1" aria-labelledby="tambah-kategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white fs-6" id="tambah-kategoriLabel">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/daftar-personil/tambah/kategori" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nama-kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama-kategori" name="nama-kategori" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
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
                    <form action="/admin/daftar-personil/edit/kategori/<?= $k['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="nama-kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama-kategori" name="nama-kategori" value="<?= $k['nama_kategori'] ?>" required>
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
    </div>
<?php endforeach; ?>

<!-- modal tambah jabatan -->
<div class="modal fade" id="tambah-jabatan" tabindex="-1" aria-labelledby="tambah-jabatanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white fs-6" id="tambah-jabatanLabel">Tambah Jabatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/daftar-personil/tambah/jabatan" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nama-jabatan" class="form-label">Nama Jabatan</label>
                        <input type="text" class="form-control" id="nama-jabatan" name="nama-jabatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="id-kategori" class="form-label">Kategori Jabatan</label>
                        <select class="form-select" id="id-kategori" name="id-kategori" required>
                            <option value="" selected disabled>Pilih Kategori Jabatan</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal edit jabatan -->
<?php foreach ($jabatan as $j) : ?>
    <div class="modal fade" id="edit-jabatan<?= $j['id'] ?>" tabindex="-1" aria-labelledby="edit-jabatanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white fs-6" id="edit-jabatanLabel">Edit Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/daftar-personil/edit/jabatan/<?= $j['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="nama-jabatan" class="form-label">Nama Jabatan</label>
                            <input type="text" class="form-control" id="nama-jabatan" name="nama-jabatan" value="<?= $j['nama_jabatan'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="id-kategori" class="form-label">Kategori Jabatan</label>
                            <select class="form-select" id="id-kategori" name="id-kategori" required>
                                <option value="" selected disabled>Pilih Kategori Jabatan</option>
                                <?php foreach ($kategori as $k) : ?>
                                    <option value="<?= $k['id'] ?>" <?= ($j['id_kategori'] == $k['id']) ? 'selected' : '' ?>><?= $k['nama_kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
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