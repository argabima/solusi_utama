<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 mt-3">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-center fw-bold text-white">Tambah FAQ</h5>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambahfaq" method="post">
                            <?= csrf_field() ?>
                            <div class="row justify-content-end">
                                <div class="col-12 mb-3">
                                    <h6 class="mb-3">Judul</h6>
                                    <input type="text" name="judul" class="form-control shadow-none" placeholder="masukan judul article" id="judul">
                                </div>
                                <div class="col-12">
                                    <h6 class="mb-3">Isi</h6>
                                    <textarea name="isi" name="isi" id="isi" cols="30" rows="30" class="form-control summernote my-3"></textarea>
                                </div>
                                <div class="text-end col-4">
                                    <button type="submit" class="btn btn-purple mt-3">Publish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>