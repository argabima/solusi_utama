<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<main id="article">

    <section>
        <div class="container-xxl pt-5">
            <div class="container">

                <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-success">Artikel</h6>
                </div>

                <div class="row pt-3 justify-content-between">
                    <h4 class="fw-bold mb-2 wow fadeInUp" data-wow-delay="0.1s">Artikel Populer</h4>

                    <div class="col-sm-12 col-md-7">
                        <div class="row">
                            <div class="col-12">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <img src="<?= base_url() ?>/img/artikel/bengkoang.png" width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 judul">
                                <h2 class="fw-bold ls-05 lh-base title">The Future of Education On The Blockchain</h2>
                                <p class="text-justify">
                                    PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                                    PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application. <a href="/artikel/detail-artikel">read more ..</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">

                        <div id="related-article" class="row">
                            <h6 class="fw-bold wow fadeInUp" data-wow-delay="0.1s">Artikel Terkait</h6>

                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="col-5 mt-3">
                                    <div class="card border-0">
                                        <div class="card-body p-0">
                                            <img src="<?= base_url() ?>/img/artikel/buku.png" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 mt-3">
                                    <h6 class="fw-bold">A Place to Bookmark And Savour Quality</h6>
                                    <p><a href="/artikel/detail-artikel" class="text-secondary text-decoration-none">Read More</a></p>
                                </div>
                            <?php endfor ?>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="latest">
        <div class="container-xxl pb-5">
            <div class="container">
                <div class="row">

                    <h4 class="fw-bold text-center ls-1 wow fadeInUp" data-wow-delay="0.1s">Artikel Terakhir</h4>

                    <?php for ($i = 0; $i < 9; $i++) : ?>
                        <div class="col-sm-12 col-md-4">

                            <div class="row">
                                <div class="col-5 mt-5">
                                    <div class="card border-0">
                                        <div class="card-body p-0">
                                            <img src="<?= base_url() ?>/img/artikel/buku.png" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 mt-5">
                                    <h6 class="fw-bold">A Place to Bookmark And Savour Quality</h6>
                                    <p><a href="/artikel/detail-artikel" class="text-secondary text-decoration-none">Read More</a></p>
                                </div>
                            </div>

                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </section>

</main>

<?= $this->endSection('content')  ?>