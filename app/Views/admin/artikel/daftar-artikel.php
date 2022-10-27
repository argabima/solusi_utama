<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
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

    .modal .modal-body * {
        font-family: monospace;
        font-size: 1em;
        text-align: justify;
    }
</style>
<div class="main-content">
    <div class="container">
        <div class="row w-100">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Kelola Artikel</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <a href="/admin/artikel/tambah" class="btn btn-sm btn-success shadow-none mb-3">Tambah</a>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Dibuat</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($artikel as $a) : ?>
                                            <tr>
                                                <th scope="row"><?= $no++ ?></th>
                                                <td><img src="/img/foto_artikel/<?php echo $a['poster'] ?>" alt="" width="50px"></td>
                                                <td><?= $a['judul'] ?></td>
                                                <td><?= $a['created_at'] ?></td>
                                                <td class="text-center">
                                                    <a type="button" title="detail" class="mx-1 text-secondary fa fa-regular fa-eye-slash" data-bs-toggle="modal" data-bs-target="#detail<?= $a['id'] ?>"></a>
                                                    <a href="/admin/artikel/edit/<?= $a['slug'] ?>" title="edit" class="mx-1 text-success fa fa-solid fa-file-pen"></a>

                                                    <form action="/admin/artikel/hapus/<?= $a['id'] ?>" method="post">
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

<!-- modal-detail -->
<?php $no = 1;
foreach ($artikel as $a) : ?>
    <div class="modal fade" id="detail<?= $a['id'] ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-info text-center">
                    <h5 class="text-center fw-light">Detail Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <img src="/img/foto_artikel/<?php echo $a['poster'] ?>" alt="" width="50px"></td>
                        </div>
                        <div class="col-lg-12">
                            <table>
                                <tr>
                                    <th class="pe-5">Judul</th>
                                    <td><?= $a['judul'] ?></td>
                                </tr>
                                <tr>
                                    <th class="pe-5">Slug</th>
                                    <td><?= $a['slug'] ?></td>
                                </tr>
                                <tr>
                                    <th class="pe-5">Created at</th>
                                    <td><?= $a['created_at'] ?></td>
                                </tr>
                                <tr>
                                    <th class="pe-5">Isi</th>
                                    <td><?= $a['isi_artikel'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <?php foreach ($artikel as $a) ?>
                            <p>
                                <?= $a['isi_artikel'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<?= $this->endSection() ?>