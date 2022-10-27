<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>
<style>
    .card-text.paragraf {
        font-size: 10pt;
        letter-spacing: 1px;
    }
</style>
<section id="article">
    <div class="container-fluid bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col wow fadeInUp">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/artikel">Artikel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Artikel</li>
                        </ol>
                    </nav>
                </div>
            </div>


            <div class="content-article">
                <div class="row">
                    <div class="col-lg-8 pt-4">
                        <div class="card mb-3 border-0">
                            <img src="https://cdn0-production-images-kly.akamaized.net/xilcF2WJtdfH5Qu3ssQ-luM_2qE=/640x358/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/thumbnails/4148628/original/010953600_1662458648-viral-petugas-spbu-emosi-ke-pelanggan-dua-kali-serobot-antrian-83b65f.jpg" class="card-img-top" alt="...">
                            <div class="card-body mt-2">
                                <h5 class="lh-lg">The Future of Education On The Blockchain</h5>
                                <p><code class="text-secondary lh-lg">04 Januari 2022</code></p>
                                <?php for ($i = 0; $i < 5; $i++) :  ?>
                                    <p class="card-text paragraf">
                                        PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                                        PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                                        PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.
                                    </p>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 px-3">
                        <div class="my-3 fw-bold wow fadeInUp">Artikel Terkait</div>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <div class="card border-0 my-3">
                                <div class="row g-0">
                                    <div class="col-md-4 my-auto">
                                        <img src="https://cdn0-production-images-kly.akamaized.net/xilcF2WJtdfH5Qu3ssQ-luM_2qE=/640x358/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/thumbnails/4148628/original/010953600_1662458648-viral-petugas-spbu-emosi-ke-pelanggan-dua-kali-serobot-antrian-83b65f.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title small">A Place to Bookmark And Savour Quality</h5>
                                            <p class="card-text"></p>
                                            <p class="card-text"><a href="/artikel/detail-artikel" class="text-decoration-none"><small class="text-muted">Read more</small></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content')  ?>