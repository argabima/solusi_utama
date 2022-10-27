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
                        <form action="/admin/faq/proses_edit_faq/<?= $faq['id'] ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="put">
                            <div class="row justify-content-end">
                                <div class="col-12 mb-3">
                                    <h6 class="mb-3">Judul</h6>
                                    <input type="text" class="form-control <?= ($validation->getError('judul')) ? 'is-invalid' : ''; ?>" name="judul" value="<?= (old('judul')) ? old('judul') : $faq['judul'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul'); ?>
                                    </div>
                                    <div class="col-12">
                                        <h6 class="mb-3">Isi</h6>
                                        <textarea id="isi" cols="30" rows="30" class="form-control summernote my-3 <?= ($validation->getError('isi')) ? 'is-invalid' : ''; ?>" name="isi"><?= (old('isi')) ? old('isi') : $faq['isi'] ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('isi'); ?>
                                        </div>
                                    </div>
                                    <div class="text-end col-4">
                                        <button type="submit" class="btn btn-purple mt-3">Publish</button>
                                    </div>
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