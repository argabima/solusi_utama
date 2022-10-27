<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<main id="faq">
    <section id="faqTop">
        <div class="container-fluid overflow-hidden py-5 px-lg-0">
            <div class="container">
                <div class="row justify-content-between flex-row-reverse mt-5">
                    <div class="col-sm-12 col-md-4 img">
                        <img src="<?= base_url() ?>/img/pertanyaan.png" width="70%" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 my-auto wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="fw-light lh-base h1">
                            Ada <span class="fw-bold text-primary">Pertanyaan </span>?</br>
                            Lihat Disini
                        </h1>
                        <div class="row col2">
                            <div class="col-8">
                                <form action="" method="post">
                                    <div class="input-group mt-3">
                                        <button id="btnSearch" class="btn" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                        <input id="inputSearch" type="text" class="form-control" placeholder="Type here ..">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="question">
        <div class="container-fluid overflow-hidden py-5 px-lg-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <?php
                                foreach ($faq as $row) : ?>
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne<?= $row['id'] ?>" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            <?= $row['judul'] ?>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne<?= $row['id'] ?>" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <strong><?= $row['isi'] ?></strong>
                                        </div>
                                    </div>
                            </div>
                        <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script>
    $(document).ready(function() {
        let inputSearch = $('#inputSearch');
        let btnSearch = $('#btnSearch');

        inputSearch.on('focus', function() {
            btnSearch.addClass('active');
        });

        inputSearch.on('blur', function() {
            btnSearch.removeClass('active');
        });
    })
</script>


<?= $this->endSection('content')  ?>