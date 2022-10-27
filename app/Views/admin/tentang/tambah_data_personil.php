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
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center fw-bold text-white">Tambah Data Personil</h5>
                    </div>
                    <div class="card-body">
                        <form action="/admin/daftar-personil/proses-tambah-personil" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="nama_personil" class="form-label">Nama Personil</label>
                                <input type="text" class="form-control <?= ($validation->getError('nama_personil')) ? 'is-invalid' : ''; ?>" name="nama_personil" value="<?= old('nama_personil') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_personil'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kampus" class="form-label">Kampus</label>
                                <input type="text" class="form-control <?= ($validation->getError('kampus')) ? 'is-invalid' : ''; ?>" name="kampus" value="<?= old('kampus') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kampus'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="id_jabatan" class="form-label">Jabatan Personil</label>
                                <select class="form-select <?= ($validation->getError('id_jabatan')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="id_jabatan" id="id_jabatan">
                                    <option value="" selected disabled>Pilih Jabatan Personil</option>
                                    <?php foreach ($jabatan as $j) : ?>
                                        <option value="<?= $j['id'] ?>" data-idKategori="<?= $j['id_kategori'] ?>" data-namaKategori="<?= $j['nama_kategori'] ?>"><?= $j['nama_jabatan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('id_jabatan'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kategori_personil" class="form-label">Kategori Personil</label>
                                <input type="hidden" name="id_kategori">
                                <input type="text" class="form-control <?= ($validation->getError('id_kategori')) ? 'is-invalid' : ''; ?>" disabled>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('id_kategori'); ?>
                                </div>
                            </div>
                            <div class="gap-2">
                                <button type="submit" class="btn btn-success">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var selectJabatan = $('#id_jabatan');
        var inputKategori = $('input[name="id_kategori"]');
        var inputNamaKategori = $('input[name="id_kategori"]').next();
        selectJabatan.change(function() {
            var idKategori = $(this).find(':selected').data('idkategori');
            var namaKategori = $(this).find(':selected').data('namakategori');
            inputKategori.val(idKategori);
            inputNamaKategori.val(namaKategori);
        });
    })
</script>

<?= $this->endSection() ?>