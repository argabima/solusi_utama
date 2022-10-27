<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('pesan')) : ?>
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
        <div class="row" id="sosmed">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Edit Data Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama Sosmed</th>
                                        <th>url</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $key) : ?>
                                        <tr>
                                            <th class="text-center"><?= $i++; ?></th>
                                            <td><?= $key['nama_sosmed']; ?></td>
                                            <td><?= $key['url']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit<?= $key['id']; ?>">Edit</a>
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

<!-- Modal Edit Kontak -->
<?php foreach ($data as $key) : ?>
    <div class="modal fade" id="edit<?= $key['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Kontak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/sosmed/edit/<?= $key['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="nama_sosmed" class="form-label" style="font-size: 14px;">Nama Sosmed</label>
                            <input type="text" class="form-control" value="<?= $key['nama_sosmed']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Url</label>
                            <textarea name="url" class="form-control" cols="30" rows="5"><?= $key['url']; ?></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection() ?>