<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>

<?php
if (session()->getFlashdata('pesan')) : ?>
    <div aria-live="polite" aria-atomic="true" class="mt-4 d-flex justify-content-end align-items-center w-100">
        <div class="toast-container position-fixed">
            <div class="toast bg-danger align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
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
            <div class="col-sm-12 col-lg-12 mt-3">
                <!-- edit data personil -->
                <div class="card">
                    <div class="card-header bg-success text-center text-white">
                        <h5>Edit Data Personil</h5>
                    </div>
                    <div class="card-body">
                        <form action="/admin/tentang/update_data_personil/<?= $personil['id'] ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group mb-3">
                                <label for="nama_personil">Nama Personil</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_personil')) ? 'is-invalid' : ''; ?>" id="nama_personil" name="nama_personil" autofocus value="<?= (old('nama_personil')) ? old('nama_personil') : $personil['nama_personil']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_personil'); ?>
                                </div>
                            </div>
                            <!-- kampus -->
                            <div class="form-group mb-3">
                                <label for="kampus">Kampus</label>
                                <input type="text" class="form-control <?= ($validation->hasError('kampus')) ? 'is-invalid' : ''; ?>" id="kampus" name="kampus" value="<?= (old('kampus')) ? old('kampus') : $personil['kampus']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kampus'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_jabatan" class="form-label">Jabatan Personil</label>
                                <select class="form-select <?= ($validation->getError('id_jabatan')) ? 'is-invalid' : ''; ?>" name="id_jabatan" id="id_jabatan">
                                    <option value="" selected disabled>Pilih Jabatan Personil</option>
                                    <?php foreach ($jabatan as $j) : ?>
                                        <?php if ($personil['id_jabatan'] == $j['id']) : ?>
                                            <option selected value="<?= $j['id'] ?>" data-idKategori="<?= $j['id_kategori'] ?>" data-namaKategori="<?= $j['nama_kategori'] ?>"><?= $j['nama_jabatan'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j['id'] ?>" data-idKategori="<?= $j['id_kategori'] ?>" data-namaKategori="<?= $j['nama_kategori'] ?>"><?= $j['nama_jabatan'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('id_jabatan'); ?>
                                </div>
                            </div>
                            <!-- kategori -->
                            <div class="form-group mb-3">
                                <label for="id_kategori">Kategori</label>
                                <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="<?= $personil['id_kategori']; ?>" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>