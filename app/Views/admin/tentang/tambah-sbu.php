<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success text-center text-white">
                        <h5 class="text-center my-1 text-white">Form tambah data sertifikasi</h5>
                    </div>
                    <div class="card-body">
                        <form action="/admin/sbu/proses_tambahsbu" method="post">
                            <?= csrf_field() ?>
                            <div class="form-group mb-3">
                                <label for="username">Kode</label>
                                <input type="text" class="form-control <?= ($validation->getError('kode_sertifikasi')) ? 'is-invalid' : ''; ?>" name="kode_sertifikasi" value="<?= old('kode_sertifikasi') ?>">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="subklasifikasi">Subklasifikasi</label>
                                <input type="text" class="form-control <?= ($validation->getError('nama_sertifikasi')) ? 'is-invalid' : ''; ?>" name="nama_sertifikasi" value="<?= old('nama_sertifikasi') ?>">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-floating">

                                    <select class="form-select <?= ($validation->getError('id_kategori_sertifikasi')) ? 'is-invalid' : ''; ?>" name="id_kategori_sertifikasi" id="floatingSelectGrid">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['id']; ?>"><?= $k['nama_kategori']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelectGrid">Daftar kategori</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>