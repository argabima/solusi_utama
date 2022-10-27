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
<?php if ($validation->getErrors()) : ?>
    <script>
        $(document).ready(function() {
            $('#modal-tambah').modal('show');
        });
    </script>
<?php endif; ?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Daftar Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Pengguna</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"> #</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data as $d) : ?>
                                        <tr>
                                            <th class="text-center"><?= $no++ ?></th>
                                            <td><?= $d['username'] ?></td>
                                            <td><?= $d['email'] ?></td>
                                            <td><?= $d['level'] ?></td>
                                            <td class="text-center td-inline">
                                                <a href="/admin/kelola-pengguna/edit/<?= $d['id'] ?>" title="edit" class="mx-1 text-success fa fa-solid fa-file-pen"></a>
                                                <form action="/admin/kelola-pengguna/hapus/<?= $d['id'] ?>" method="post">
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

<div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Tambah Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/kelola-pengguna/tambah" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control <?= ($validation->getError('username')) ? 'is-invalid' : ''; ?>" name="username" placeholder="Masukkan Username" value="<?= old('username') ?>">
                        <code class=" text-danger"><?= $validation->getError('username') ?></code>
                    </div>
                    <div class=" mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Masukkan Email" value="<?= old('email') ?>">
                        <code class=" text-danger"><?= $validation->getError('email') ?></code>
                    </div>
                    <div class=" mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control <?= ($validation->getError('password')) ? 'is-invalid' : ''; ?>" name="password" placeholder="Masukkan Password">
                        <code class=" text-danger"><?= $validation->getError('password') ?></code>
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">Level</label>
                        <select class="form-select <?= ($validation->getError('level')) ? 'is-invalid' : ''; ?>" name="level">
                            <?php if ($validation->getErrors(!'level')) : ?>
                                <option disabled <?= old('level') == null ? 'selected' : '' ?>>-- Pilih Level --</option>
                                <option <?= old('level') == 'admin' ? 'selected' : '' ?> value="admin">Admin</option>
                                <option <?= old('level') == 'pengguna' ? 'selected' : '' ?> value="pengguna">Pengguna</option>
                            <?php else : ?>
                                <option value="" disabled selected>-- Pilih Level --</option>
                                <option value="admin">Admin</option>
                                <option value="pengguna">Pengguna</option>
                            <?php endif; ?>
                        </select>
                        <code class=" text-danger"><?= $validation->getError('level') ?></code>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>