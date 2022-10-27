<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<main id="detail-course">
    <section id="top" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <h3 class="fw-bold ps-2 title_course">Design User Experience (UX) Untuk Pemula</h3>
                    <img src="<?= base_url() ?>/img/course/bg4.png" alt="" width="100%">
                    <div class="row">
                        <div class="col-lg-6 col-12 mt-3 ps-3">
                            <div class="instruktur d-flex">
                                <img src="<?= base_url() ?>/img/course/instruktur.png" width="40px" alt="">
                                <div>
                                    <p class="m-0">Instruktur</p>
                                    <p class="m-0">Ladu Singh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div id="list-materi" class="accordion" id="accordionPanelsStayOpenExample"> </div>
                    <div class="aksi">
                        <p class="old_price fs-5"><s>Rp. 350.000</s></p>
                        <p class="new_price fs-4">Rp. 299.000</p>
                        <a href="/payment/checkout/" class="btn btn-outline-success w-100">
                            Masukkan Keranjang<i class="fa fa-sharp fa-solid fa-cart-plus ms-2"></i>
                        </a>
                        <a href="#" class="btn btn-success w-100 mt-2 btn-beli">Beli Course</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Materi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Catatan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Pemberitahuan</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <?php for ($i = 0; $i < 4; $i++) : ?>
                                <p>
                                    1Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel turpis mi, adipiscing nisl integer pulvinar amet, sed sed.
                                    Neque ac, sollicitudin nibh vulputate urna viverra fermentum amet. Eu rhoncus, tincidunt eu convallis enim, tempus et mi.
                                    Sapien aenean sagittis sed in velit id et nunc purus. Senectus vulputate diam elit sed amet, justo, habitant ut. Mollis rhoncus,
                                    ut arcu ultrices ultrices volutpat interdum pulvinar et.
                                </p>
                            <?php endfor; ?>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <?php for ($i = 0; $i < 4; $i++) : ?>
                                <p>
                                    2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel turpis mi, adipiscing nisl integer pulvinar amet, sed sed.
                                    Neque ac, sollicitudin nibh vulputate urna viverra fermentum amet. Eu rhoncus, tincidunt eu convallis enim, tempus et mi.
                                    Sapien aenean sagittis sed in velit id et nunc purus. Senectus vulputate diam elit sed amet, justo, habitant ut. Mollis rhoncus,
                                    ut arcu ultrices ultrices volutpat interdum pulvinar et.
                                </p>
                            <?php endfor; ?>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <?php for ($i = 0; $i < 4; $i++) : ?>
                                <p>
                                    3Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel turpis mi, adipiscing nisl integer pulvinar amet, sed sed.
                                    Neque ac, sollicitudin nibh vulputate urna viverra fermentum amet. Eu rhoncus, tincidunt eu convallis enim, tempus et mi.
                                    Sapien aenean sagittis sed in velit id et nunc purus. Senectus vulputate diam elit sed amet, justo, habitant ut. Mollis rhoncus,
                                    ut arcu ultrices ultrices volutpat interdum pulvinar et.
                                </p>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <h4 class="fw-bold my-4">Paket Bundling</h4>
                    <div id="daftar-bundling" class="row g-2 g-md-3 g-lg-4"></div>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="<?= base_url() ?>/js/materi.js"></script>
<?= $this->endSection('content')  ?>