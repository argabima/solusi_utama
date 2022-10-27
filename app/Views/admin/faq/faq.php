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
    table * {
        vertical-align: middle;
    }

    code {
        color: #000;
    }

    table th,
    table td {
        white-space: nowrap;
    }
</style>
<div class="main-content">
    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Daftar FAQ</h5>
                    </div>
                    <div class="card-body">
                        <!-- <button type="submit" class="btn btn-success mb-3"></button> -->
                        <a href="/admin/faq/tambah" class="btn btn-success mb-3">Tambah FAQ</a>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($faq as $row) : ?>
                                        <tr></tr>
                                        <th><?= $no++ ?></th>
                                        <td><?= $row['judul'] ?></td>
                                        <td><?= $row['isi'] ?></td>
                                        <td class="text-center td-inline">
                                            <a href="/admin/faq/edit_faq/<?= $row['id'] ?>" class="mx-1 text-success fa fa-solid fa-file-pen"></a>
                                            <form action="/admin/faq/hapus_faq/<?= $row['id'] ?>" method="post">
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


<?= $this->endSection() ?>