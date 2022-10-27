<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary text-center">About Us</h6>
                    <h1 class="mb-4">PT. MITRA GUTAMA LIMA (TRATAMA)</h1>
                    <p class="text-justify">PT. MITRA GUTAMA LIMA (TRATAMA) adalah perusahaan Perencanaan konstruksi berbentuk PT. PT. MITRA GUTAMA LIMA (TRATAMA) beralamat di Mandungan I RT/RW.04/25, Margoluwih, Sayegan kabupaten Kab. Sleman.Badan usaha berpengalaman yang mengerjakan proyek nasional. PT. MITRA GUTAMA LIMA (TRATAMA) saat ini memiliki kualifikasi . PT. MITRA GUTAMA LIMA (TRATAMA) dapat mengerjakan proyek-proyek dengan sub klasifikasi:</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR101 Jasa Nasihat dan Pra Desain Arsitektural</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR102 Jasa Desain Arsitektural</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR104 Jasa Desain Interior</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AR105 Jasa Arsitektur lainnya</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>PR103 Jasa Perencanaan dan Perancangan lingkungan bangunan dan lansekap</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>RE102 Jasa Desain Rekayasa untuk Konstruksi Pondasi serta Struktur Bangunan</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>RE103 Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Air</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>RE105 Jasa Desain Rekayasa untuk Pekerjaan Mekanikal dan Elektrikal Dalam Bangunan</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>RE201 Jasa Pengawas Pekerjaan Konstruksi Bangunan Gedung</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>RE202 Jasa Pengawas Pekerjaan Konstruksi Teknik Sipil Transportasi</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Team Start -->
<div id="personil" class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Personil Perusahaan</h6>
            <h1 class="mb-4"></h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php foreach ($kategori as $k) : ?>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img text-center position-relative">
                        <h4 class="mt-3"><?= $k['nama_kategori'] ?></h4>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <?php foreach ($jabatan as $j) : ?>
                            <?php if ($j['id_kategori'] == $k['id']) : ?>
                                <div class="row">
                                    <h6 class="fw-bold text-warning mt-3"><?= $j['nama_jabatan'] ?></h6>
                                    <?php foreach ($personil as $p) : ?>
                                        <?php if ($p['id_jabatan'] == $j['id']) : ?>
                                            <p><?= $p['nama_personil'] ?></p>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Team End -->

<?= $this->endSection('content')  ?>