<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<section id="page-first" class="h-100 w-100">

    <div class="container-fluid bg-light overflow-hidden px-lg-0 mb-">
        <div class="container pb-5 mt-4">
            <div class="card-first">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-md-5 col-sm-12 text-center my-auto wow fadeInUp" data-wow-delay="0.1s">
                        <img class="w-100" src="/img/logo-big.png" alt="">
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="content">
                            <h1 class="text-uppercase fw-bold mb-3 first-title wow fadeInUp" data-wow-delay="0.3s">software Development</h1>
                            <p id="paragraf">PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                                PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                        </div>
                        <div class="search-event mt-4 w-75">
                            <div id="search" class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search more event here">
                                <button class="btn btn-purple" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="training">
    <div class="container-fluid overflow-hidden px-lg-0">
        <div class="container">
            <h2 class="fw-bold text-xs-center wow fadeInUp" data-wow-delay="0.1s">Most Popular</h2>
            <div class="row g-2 g-md--3 g-md-4">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card card-course">
                            <div class="card-body">
                                <span>Basic</span>
                                <img src="<?= base_url() ?>/img/course/bg1.jpg" alt="" class="w-100">
                            </div>
                            <div class="card-footer">
                                <p class="card-title">Training</p>
                                <div class="course-footer">
                                    <s>Rp. 90000</s>
                                    <p>Rp. 60000</p>
                                    <div class="row beli-course w-100 m-0">
                                        <div class="col-10 p-0 pe-3">
                                            <a href="/training/detail-training/" class="btn w-100">Materi Training</a>
                                        </div>
                                        <div class="col-2 p-0 align-self-center">
                                            <a href="#" class="fa fa-sharp fa-solid fa-cart-plus py-2"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <!-- <div class="most-popular mt-3">
                <div class="slide-container swiper">
                    <div class="slide-content text-center">
                        <div class="card-wrapper swiper-wrapper">
                            <?php for ($i = 1; $i < 10; $i++) : ?>
                                <div class="swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <a href="">
                                            <div class="card-image">
                                                <img src="/img/feature.jpg" alt="" class="card-img">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div> -->
        </div>

        <div class="container overflow-hidden my-5">
            <div class="training-list">
                <h2 class="fw-bold mb-5 text-xs-center wow fadeInUp" data-wow-delay="0.1s">List For You</h2>
                <div class="row g-2 g-md--3 g-md-4">
                    <?php for ($i = 0; $i < 12; $i++) : ?>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card card-course">
                                <div class="card-body">
                                    <span>Basic</span>
                                    <img src="<?= base_url() ?>/img/course/bg1.jpg" alt="" class="w-100">
                                </div>
                                <div class="card-footer">
                                    <p class="card-title">Training</p>
                                    <div class="course-footer">
                                        <s>Rp. 90000</s>
                                        <p>Rp. 60000</p>
                                        <div class="row beli-course w-100 m-0">
                                            <div class="col-10 p-0 pe-3">
                                                <a href="/training/detail-training/" class="btn w-100">Detail Training</a>
                                            </div>
                                            <div class="col-2 p-0 align-self-center">
                                                <a href="/payment/checkout/" class="fa fa-sharp fa-solid fa-cart-plus py-2"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content')  ?>