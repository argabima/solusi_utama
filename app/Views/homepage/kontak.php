<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<?php
$this->db = \Config\Database::connect();
$studio = $this->db->table('sosmed')->where('nama_sosmed', 'studio')->get()->getRowArray();
$office = $this->db->table('sosmed')->where('nama_sosmed', 'head office')->get()->getRowArray();
$email = $this->db->table('sosmed')->where('nama_sosmed', 'email')->get()->getRowArray();
$phone = $this->db->table('sosmed')->where('nama_sosmed', 'phone')->get()->getRowArray();
$whatsapp = $this->db->table('sosmed')->where('nama_sosmed', 'whatsapp')->get()->getRowArray();
$facebook = $this->db->table('sosmed')->where('nama_sosmed', 'facebook')->get()->getRowArray();
$twitter = $this->db->table('sosmed')->where('nama_sosmed', 'twitter')->get()->getRowArray();
$linkedin = $this->db->table('sosmed')->where('nama_sosmed', 'linkedin')->get()->getRowArray();
$instagram = $this->db->table('sosmed')->where('nama_sosmed', 'instagram')->get()->getRowArray();
$youtube = $this->db->table('sosmed')->where('nama_sosmed', 'youtube')->get()->getRowArray();
?>

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

<!-- Contact Start -->
<?php $validation = \config\Services::validation(); ?>
<div id="contact" class="container-fluid bg-light overflow-hidden px-lg-0">
    <div class="container contact px-lg-0">
        <h6 class="text-primary my-5 text-center">Contact Us</h6>
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 col-sm-12 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-3 ps-lg-0">
                    <p>Hubungi Kami</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mt-3">
                            <i class="fa fa-phone me-2"></i><?= $phone['url'] ?>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <i class="fa fa-phone ms-1 me-1" aria-hidden="true"></i><?= $whatsapp['url'] ?>
                        </div>
                        <div class="col-md-12 col-sm-12 mt-3">
                            <i class="fa fa-envelope me-2" aria-hidden="true"></i><?= $email['url'] ?>
                        </div>
                    </div>

                    <h3 class="mb-3 mt-5">Contact Us <h6>demo kirim pesan email ke : datame8822@gmail.com</h6></h3>
                    <form action="<?= base_url('kirim_kontak')?>" method="post" enctype="multipart/form-data" novalidate >
                       <?php if(session()->getFlashdata('pesan')): ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan') ?>
                        </div>
                        <?php endif; ?>
                       <?php if(session()->getFlashdata('gagal')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('gagal') ?>
                        </div>
                        <?php endif; ?>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Nama" value="<?= old('nama'); ?>" value="<?set_value('nama')?>">
                                    <?php if($validation->getError('nama')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Email" value="<?= old('email'); ?>" value="<?set_value('email')?>">
                                    <?php if($validation->getError('email')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" placeholder="Judul" value="<?= old('judul'); ?>" value="<?set_value('judul')?>">
                                    <?php if($validation->getError('judul')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <label for="subject">Judul</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-floating">
                                    <textarea class="form-control <?= ($validation->hasError('pesan')) ? 'is-invalid' : ''; ?>" id="pesan" name="pesan" placeholder="Pesan" style="height: 100px" value="<?set_value('pesan')?>"><?= old('pesan'); ?></textarea>
                                    <?php if($validation->getError('pesan')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('pesan'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pe-lg-0 mt-5 justify-content-center" style="display:grid;min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=PT%20MITRA%20GUTAMA&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?= $this->endSection('content')  ?>