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

<div class="main-content">
    <div class="container">
        <h5 class="text-center mt-3 fw-bold">Edit Artikel</h5>

        <form action="/admin/artikel/proses_edit_artikel/<?= $artikel['slug'] ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="put">
            <div class="row">
                <div class="col-sm-12 col-lg-8 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="mb-3">Judul</h6>
                                <input type="text" class="form-control <?= ($validation->getError('judul')) ? 'is-invalid' : ''; ?>" name="judul" id="judul" value="<?= (old('judul')) ? old('judul') : $artikel['judul'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6 class="mb-3">Slug</h6>
                                <input type="text" class="form-control <?= ($validation->getError('slug')) ? 'is-invalid' : ''; ?>" name="slug" id="slug" value="<?= (old('slug')) ? old('slug') : $artikel['slug'] ?>" readonly>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('slug'); ?>
                                </div>
                            </div>
                            <div class="">
                                <h6 class="mb-3">Isi</h6>
                                <textarea name="isi_artikel" id="isi_artikel" cols="30" rows="30" class="form-control summernote my-3 <?= ($validation->getError('isi_artikel')) ? 'is-invalid' : ''; ?>" name="isi_artikel"><?= (old('isi_artikel')) ? old('isi_artikel') : $artikel['isi_artikel'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <strong>Tambahkan Gambar</strong>
                            <input id="formFileSm" type="file" class="form-control my-3 <?= ($validation->getError('poster')) ? 'border-danger' : ''; ?>" name="poster">
                            <div id="preview" class="w-100">
                                <img src="<?= base_url() ?>/img/foto_artikel/<?= $artikel['poster'] ?>" class="img-thumbnail img-preview w-100">
                            </div>
                            <button type="submit" class="btn btn-purple text-center w-100 mt-3">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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

    let judul = document.getElementById('judul');
    let slug = document.getElementById('slug');

    judul.addEventListener('keyup', function() {
        let judul = this.value;
        let id = '<?= $artikel['id'] ?>';
        $.ajax({
            url: '/admin/artikel/cek-slug-edit/' + id + '/' + judul,
            type: 'get',
            data: {
                judul: judul
            },
            success: function(response) {
                var dataOBJ = JSON.parse(response);
                console.log(dataOBJ);
                slug.value = dataOBJ.slug;

                if (dataOBJ.status == false) {
                    $('#slug').addClass('is-invalid');
                    $('#slug').next().html(dataOBJ.pesan);
                } else {
                    $('#slug').removeClass('is-invalid');
                }

            }
        });
    });
</script>

<?= $this->endSection() ?>