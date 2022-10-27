<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<style>
    .detail-img {
        max-width: 500px;
    }

    .card-img-circle {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: #FFF;
        padding: 3px;
    }

    .card-img-circle .img-circle {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        /* border: 4px solid #4070F4; */
    }
</style>
<section id="detail-training">
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container">
            <div class="title text-center mt-5 mb-lg-5 pb-4 fw-bold h3">Training Softskill</div>
            <div class="row mb-5">
                <div class="col-lg-6 overflow-hidden">
                    <img src="/img/logo-big.png" alt="" class="detail-img w-100">
                </div>
                <div class="col-lg-6 mt-sm-4">
                    <div class="row mb-4">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 col-sm-9 text-end">
                                    <div class="card-text text-decoration-line-through text-secondary"><small>Rp 500.000</small></div>
                                    <div class="card-text h5 fw-bold text-danger">Rp 325.000</div>
                                </div>
                                <div class="col-lg-6 col-sm-3 text-end my-auto">
                                    <button class="btn btn-sm btn-primary">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                    </p>
                    <div class="h5 fw-bold mb-3">Penjelasan Course</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                    </p>
                    <div class="h5 fw-bold mb-3">Penjelasan Course</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                    </p>
                </div>
            </div>

            <div class="row mt-lg-5 pt-lg-5 mb-lg-5 pb-5">
                <div class="col-6 border-end">
                    <div class="text-center fw-bold h5 mb-5">Timeline Course</div>
                    <div class="text-purple fw-bold mb-3">23 September 2022 - 26 September 2022</div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ex eaque, veniam omnis sapiente autem saepe in inventore iusto odio exercitationem quasi assumenda. Vero hic ipsa earum dolor, voluptas pariatur. Nesciunt dolorem ad, doloribus excepturi enim veniam maiores id hic quaerat dignissimos aliquam, ea ipsam labore unde a obcaecati et.</p>
                    <div class="text-purple fw-bold mb-3">23 September 2022 - 26 September 2022</div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ex eaque, veniam omnis sapiente autem saepe in inventore iusto odio exercitationem quasi assumenda. Vero hic ipsa earum dolor, voluptas pariatur. Nesciunt dolorem ad, doloribus excepturi enim veniam maiores id hic quaerat dignissimos aliquam, ea ipsam labore unde a obcaecati et.</p>
                    <div class="text-purple fw-bold mb-3">23 September 2022 - 26 September 2022</div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ex eaque, veniam omnis sapiente autem saepe in inventore iusto odio exercitationem quasi assumenda. Vero hic ipsa earum dolor, voluptas pariatur. Nesciunt dolorem ad, doloribus excepturi enim veniam maiores id hic quaerat dignissimos aliquam, ea ipsam labore unde a obcaecati et.</p>
                </div>
                <div class="col-6 border-start">
                    <div class="text-center fw-bold h5 mb-5">Our Speakers</div>
                    <!-- LOGIKA : buat angka dahulu. jika angka ganjil maka gambar berada di kiri, tetapi jika angkanya genap maka gambar berada di kanan.-->
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <!-- jika angka ganjil maka gambar di kiri -->
                        <?php if ($i % 2 == 1) :  ?>
                            <div class="card mb-3 border-0 mb-5" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="card-img-circle">
                                            <img src="https://img.okezone.com/content/2022/05/04/33/2589370/manager-rizky-billar-sebut-rico-valentino-babak-belur-dipukuli-10-orang-TjvvVtjDZO.jpg" class=" img-circle" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-purple fw-bold">Mr Albert Douge</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else :  ?>
                            <!-- jika angka genap maka gambar di kanan -->
                            <div class="card mb-3 border-0 mb-5" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-purple fw-bold">Mr Albert Douge</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-img-circle">
                                            <img src="https://img.okezone.com/content/2022/05/04/33/2589370/manager-rizky-billar-sebut-rico-valentino-babak-belur-dipukuli-10-orang-TjvvVtjDZO.jpg" class=" img-circle" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="text-center mb-5">
                <button class="btn btn-primary">Follow</button>
            </div>

            <div class="similiar-event mb-5">
                <div class="h3 fw-bold mb-4">Similiar Event</div>
                <div id="similiar-event" class="row mb-5 pb-5">
                    <!-- <?php for ($i = 0; $i < 5; $i++) : ?>
                        <div class="col-md-4 mt-3">
                            <div class="card border-0">
                                <div class="text-center">
                                    <img src="/img/Frame 58.png" class="card-img-top" alt="..." style="width: 200px;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-purple">Training Softskill</h5>
                                    <p class="card-text small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small text-decoration-line-through">Rp 500.000</div>
                                            <div class="text-danger fw-bold">Rp 325.000</div>
                                        </div>
                                        <div class="col-6 text-center">
                                            <button class="btn btn-sm btn-purple">Join Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?> -->
                    <?php for ($i = 0; $i < 12; $i++) : ?>
                        <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
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
                                                <a href="#" class="fa fa-sharp fa-solid fa-cart-plus py-2"></a>
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



<script>
    $(document).ready(function() {
        // Slider Team
        sliderTeam();
    })

    let sliderTeam = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 577px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 3;
        } else {
            var perPage = 3;
        }
        var splide = new Splide('.splide.splide-detail-training', {
            // type: 'loop',
            perPage: perPage,
            rewind: true,
            arrows: false,
            // autoplay: true,
            // speed: 2000,
            // width: '100%',
            // padding: '10px',
        });

        splide.mount();
    }
</script>

<?= $this->endSection()  ?>