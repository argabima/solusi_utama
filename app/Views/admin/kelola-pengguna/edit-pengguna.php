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
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Edit Data Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <form action="/admin/kelola-pengguna/proses-edit/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group mb-3">
                                <label for="username">Nama</label>
                                <input type="text" class="form-control <?= ($validation->getError('username')) ? 'is-invalid' : ''; ?>" name="username" value="<?= (old('username')) ? old('username') : $data['username'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : ''; ?>" name="email" value="<?= (old('email')) ? old('email') : $data['email'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="level">Level</label>
                                <select name="level" class="form-control <?= ($validation->getError('level')) ? 'is-invalid' : ''; ?>" id="level">
                                    <option value="" disabled>-- Pilih Level --</option>
                                    <option value="admin" <?= ($data['level'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                    <option value="pengguna" <?= ($data['level'] == 'pengguna') ? 'selected' : ''; ?>>Pengguna</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('level'); ?>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control <?= ($validation->getError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="profil">Foto Profil</label>
                                <input id="formFileSm" type="file" name="foto" class="form-control form-control-sm shadow-none">
                                <div id="preview" class="w-25 mt-2">
                                    <img src="<?= base_url() . '/img/foto_profil/' . $data['foto'] ?>" class="img-thumbnail w-75">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-success btn-block">Simpan</button>
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
        let input = document.getElementById('formFileSm');
        let preview = document.getElementById('preview');
        input.addEventListener('change', function() {
            let file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.addEventListener('load', function() {
                    let img = document.createElement('img');
                    img.src = this.result;
                    img.width = 250;
                    img.classList.add('img-thumbnail');
                    preview.innerHTML = '';
                    preview.append(img);
                });
                reader.readAsDataURL(file);
            }
        });
    });
</script>

<?= $this->endSection() ?>