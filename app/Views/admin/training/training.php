<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>

<div class="main-content">
    <div class="container">
    <div class="card mb-3">
                    <div class="card-header bg-success">
                        <h5 class="text-center my-1 text-white">Training</h5>
                    </div>
    </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-3">
                    <input class="form-control form-control-lg border-0 input-title" type="text" placeholder="judul training">
                </div>
                <div class="">
                    <textarea class="form-control border-0 p-4 is-invalid shadow" id="content-about-us" placeholder="deskripsi training"></textarea>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div>
                    <button class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <div>Pilih Kategori Training</div>
                        <select class="form-select border-0 bg-light mt-3">
                            <option selected>Pilih Kategori</option>
                            <option value="1">Satu</option>
                            <option value="2">Dua</option>
                            <option value="3">Tiga</option>
                        </select>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div>Tambahkan Gambar</div>
                        <div class="mb-3 mt-3">
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>