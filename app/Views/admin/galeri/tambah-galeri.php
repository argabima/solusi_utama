<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<style>
    label {
        font-weight: bold;
        margin-bottom: 5px;
        color: #1c1a1a !important;
    }
</style>
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
        <div class="card">
            <div class="card-header bg-success">
                <h5 class="text-center my-1 text-white">Tambah Data Galeri</h5>
            </div>
            <div class="card-body">
                <form action="/admin/galeri/tambah" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="col-lg-8 col-sm-12">
                            <div class="mb-3">
                                <label>Nomor</label>
                                <input name="nomor" value="<?= old('nomor') ?>" class="form-control <?= ($validation->getError('nomor')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Nomor">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal</label>
                                <input name="tanggal" value="<?= old('tanggal') ?>" class="form-control <?= ($validation->getError('tanggal')) ? 'is-invalid' : ''; ?>" type="date">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tanggal'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Judul</label>
                                <input name="judul" value="<?= old('judul') ?>" class="form-control <?= ($validation->getError('judul')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Judul pekerjaan">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Lokasi</label>
                                <input name="lokasi" value="<?= old('lokasi') ?>" class="form-control <?= ($validation->getError('lokasi')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Lokasi">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('lokasi'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Pemberi Tugas</label>
                                <input name="pemberi_tugas" value="<?= old('pemberi_tugas') ?>" class="form-control <?= ($validation->getError('pemberi_tugas')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Nama pemberi tugas">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pemberi_tugas'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Nilai</label>
                                <input name="nilai" value="<?= old('nilai') ?>" class="form-control <?= ($validation->getError('nilai')) ? 'is-invalid' : ''; ?>" type="number" placeholder="Nilai (Rp.)">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nilai'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 mb-3">
                            <div class="mb-3">
                                <label>Kategori</label>
                                <select name="kategori" class="form-select <?= ($validation->getError('kategori')) ? 'is-invalid' : ''; ?>">
                                    <option disabled selected value="">Pilih Kategori</option>
                                    <?php foreach ($kategori as $k) : ?>
                                        <?php if ($k['id'] ==  old('kategori')) : ?>
                                            <option value="<?= $k['id']; ?>" selected><?= $k['nama_kategori']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kategori'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm">Tambahkan Gambar</label>
                                <input name="poster" value="<?= old('poster') ?>" id="formFileSm" type="file" class="form-control mb-2 <?= ($validation->getError('poster')) ? 'is-invalid' : ''; ?>">
                                <div id="preview" class="w-100">
                                    <img src="<?= base_url() ?>/img/foto_galeri/default.jpg" class="img-thumbnail w-100">
                                </div>
                                <div class="invalid-feedback mb-3">
                                    <?= $validation->getError('poster'); ?>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success text-center w-100">Publish</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        let input = document.getElementById('formFileSm');
        let preview = document.getElementById('preview');
        input.addEventListener('change', function() {
            let file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.addEventListener('load', function() {
                    let img = document.createElement('img');
                    img.src = this.result;
                    img.classList.add('img-thumbnail');
                    preview.innerHTML = '';
                    preview.append(img);
                });
                reader.readAsDataURL(file);
            }
        });
    })
</script>
<?= $this->endSection() ?>