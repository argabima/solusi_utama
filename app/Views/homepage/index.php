<?= $this->extend('layout/main-layout') ?>
<?= $this->section('content') ?>

<!-- Carousel Start -->
<div id="homepage-carousel" class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-1.jpg'>">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-12 col-md-8 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">PT. MITRA GUTAMA LIMA <br> (TRATAMA)</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Adalah Perusahaan Swasta Nasional yang bergerak dalam bidang Jasa Konsultasi Konstruksi Perencanaan.</p>
                            <a href="#about" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-2.jpg'>">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-12 col-md-8 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">PT. MITRA GUTAMA LIMA <br> (TRATAMA)</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Adalah Perusahaan Swasta Nasional yang bergerak dalam bidang Jasa Konsultasi Konstruksi Perencanaan.</p>
                            <a href="#about" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-3.jpg'>">
            <img class="img-fluid" src="img/carousel-3.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-12 col-md-8 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">PT. MITRA GUTAMA LIMA <br> (TRATAMA)</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Adalah Perusahaan Swasta Nasional yang bergerak dalam bidang Jasa Konsultasi Konstruksi Perencanaan.</p>
                            <a href="#about" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div id="about" class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid" src="img/about.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary text-center">tentang kami</h6>
                    <h1 class="mb-4">PT. MITRA GUTAMA LIMA (TRATAMA)</h1>
                    <p class="text-justify" style="letter-spacing: 1px;">
                        PT. MITRA GUTAMA LIMA (TRATAMA) adalah perusahaan Perencanaan konstruksi berbentuk PT.
                        PT. MITRA GUTAMA LIMA (TRATAMA) beralamat di Mandungan I RT/RW.04/25, Margoluwih, Sayegan kabupaten Kab. Sleman.
                        Badan usaha berpengalaman yang mengerjakan proyek nasional. PT. MITRA GUTAMA LIMA (TRATAMA) dapat mengerjakan proyek-proyek dengan sub klasifikasi:</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR101 Jasa Nasihat dan Pra Desain Arsitektural</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR102 Jasa Desain Arsitektural</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR104 Jasa Desain Interior</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR105 Jasa Arsitektur lainnya</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>PR103 Jasa Perencanaan dan Perancangan lingkungan bangunan dan lansekap</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Projects Start -->
<div class="container py-5">

    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary">projek terakhir</h6>
    </div>

    <div class="row g-5 ">
        <?php for ($i = 0; $i < 12; $i++) : ?>
            <div class="col-lg-3 col-md-4 col-12 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-6.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Solar Panels</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
        <?php endfor; ?>
    </div>

</div>
<!-- Projects End -->


<!-- Contact Start -->
<div id="contact" class="container-fluid bg-light overflow-hidden mt-5 px-lg-0">
    <div class="container contact px-lg-0">
        <h6 class="text-primary my-5 text-center wow fadeInUp" data-wow-delay="0.1s">kontak kami</h6>
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 col-sm-12 contact-text py-5">
                <div class="p-lg-3 ps-lg-0">
                    <div class="row mb-5">
                        <div class="col-md-6 col-sm-12 mt-3">
                            <i class="fa fa-phone me-2"></i>(0274) 288 26 47
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3 text-md-end">
                            <i class="fa fa-phone me-1"></i>+6285659206589
                        </div>
                        <div class="col-md-12 col-sm-12 mt-3">
                            <i class="fa fa-envelope me-2"></i>tratama.engineering@gmail.com
                        </div>
                    </div>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Judul</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">kirim pesan</button>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal-gallery">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Solar panel</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-7">
                        <img src="img/img-600x400-6.jpg" class="w-100 h-100">
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <h5 class="lh-base text-center">Desain Arsitektur, Struktur & MekanikalElektrikal Hotel Grand Whiz Makassar</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="fw-bold">Lokasi :</span>
                                <span>Kota Makassar, Sulawesi Selatan</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Pemberi Tugas :</span>
                                <span>Ahmad S. Ilham</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Nomor :</span>
                                <span>AVIIA/III/TRTM/2014</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Tanggal :</span>
                                <span>26 Maret 2014</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Nilai :</span>
                                <span>750.000.000,00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>