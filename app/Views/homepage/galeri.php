<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<style>
    a:focus {
        outline: none;
    }

    .portfolioFilter {
        padding: 15px 0;
    }

    .portfolioFilter a {
        margin-right: 6px;
        color: #666;
        text-decoration: none;
        border: 1px solid #ccc;
        padding: 4px 15px;
        border-radius: 50px;
        display: inline-block;
    }

    .portfolioFilter a.current {
        background: #1e1e1e;
        border: 1px solid #1e1e1e;
        color: #f9f9f9;
    }

    .portfolioContainer {
        border: 1px solid #eee;
        border-radius: 3px;
    }

    .isotope-item {
        z-index: 2;
    }

    .isotope-hidden.isotope-item {
        pointer-events: none;
        z-index: 1;
    }

    .isotope,
    .isotope .isotope-item {
        /* change duration value to whatever you like */
        -webkit-transition-duration: 0.8s;
        -moz-transition-duration: 0.8s;
        transition-duration: 0.8s;
    }

    .isotope {
        -webkit-transition-property: height, width;
        -moz-transition-property: height, width;
        transition-property: height, width;
    }

    .isotope .isotope-item {
        -webkit-transition-property: -webkit-transform, opacity;
        -moz-transition-property: -moz-transform, opacity;
        transition-property: transform, opacity;
    }
</style>


<!-- Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Gallery</h6>
        </div>

        <div class="row fadeInUp" data-wow-delay="0.5s">
            <div class="portfolioFilter clearfix">
                <a href="#" data-filter="*" class="current">All Categories Project</a>
                <a href="#" data-filter="#perencanaan">Perencanaan</a>
                <a href="#" data-filter="#pengawasan">Pengawasan</a>
                <a href="#" data-filter="#konsultasi">Konsultasi Lainnya</a>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" id="foto" data-wow-delay="0.5s">
            <div class="col-lg-4 col-md-6 portfolio-item" id="perencanaan">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-6.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa fa-eye"></i></a>
                        <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Solar Panels</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item" id="pengawasan">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-5.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa fa-eye"></i></a>
                        <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Wind Turbines</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item" id="konsultasi">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-4.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa fa-eye"></i></a>
                        <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Hydropower Plants</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item" id="perencanaan">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-3.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa fa-eye"></i></a>
                        <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Solar Panels</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item" id="perencanaan">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-2.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa fa-eye"></i></a>
                        <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Wind Turbines</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item" id="pengawasan">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-1.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"><i class="fa fa-eye"></i></a>
                        <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Hydropower Plants</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
        </div>

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

    </div>
</div>
<!-- Gallery End -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://isotope.metafizzy.co/v1/jquery.isotope.min.js"></script>
<script>
    $(window).load(function() {
        var $container = $('#foto');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });
</script>

<?= $this->endSection('content')  ?>