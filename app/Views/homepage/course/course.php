<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<main id="course">
    <section id="course-top">
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <h3 class="fw-bold text-white">FIND YOUR ENGINEERING COURSE REACH YOUR DREAM</h3>
                        <p>
                            Ornare dolor ullamcorper id vitae non, vel sed. Pulvinar quis nisi, odio bibendum. Quis mattis phasellus risus sagittis gravida accumsan integer. Porttitor arcu et nibh nisl etiam pulvinar adipiscing.
                        </p>
                        <span id="enroll" class="btn">Enroll Now</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="card-kategori">
        <div class="container my-5">
            <h4 class="fw-bold text-center mb-3">Preview our most popular courses</h4>
            <div class="row pt-3">
                <div class="col-12">
                    <div class="card">
                        <img src="<?= base_url('img/course/bg2.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <form action="" class="row mt-5">
                        <div class="col-lg-8 col-12">
                            <div class="input-group search mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <i class="fa fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="input-group kategori mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <i class="fa fa-solid fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 list">
                    <span class="fw-bold text-dark me-3">Kategori :</span>
                    <a id="all" class="btn btn-sm active">all</a>
                    <a id="basic" class="btn btn-sm">basic</a>
                    <a id="intermediate" class="btn btn-sm">intermediate</a>
                    <a id="advance" class="btn btn-sm">advance</a>
                </div>
            </div>
            <h5 class="my-3">Rekomendasi Course</h5>
            <div id="daftar-course" class="row g-2 g-md-3 g-lg-4"> </div>
        </div>
    </section>
    <section id="bundling">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mt-5 text-center">
                    <img src="<?= base_url() ?>/img/course/bg3.png" class="w-75" alt="">
                </div>
                <div class="col-lg-6 col-12 mt-5">
                    <h4 class="fw-bold">Kelebihan Paket Bundling</h4>
                    <div class="content">
                        <div class="content-list">
                            <h6 class="fw-bold">Akses Materi Selamanya</h6>
                            <p>Duis semper ultrices aliquam nisl vulputate. Pellentesque convallis urna leo egestas iaculis pulvinar. </p>
                        </div>
                        <div class="content-list">
                            <h6 class="fw-bold">Konsultasi Dengan Mentor</h6>
                            <p>Duis semper ultrices aliquam nisl vulputate. Pellentesque convallis urna leo egestas iaculis pulvinar. </p>
                        </div>
                        <div class="content-list">
                            <h6 class="fw-bold">Metode Lintas Disiplin</h6>
                            <p>Duis semper ultrices aliquam nisl vulputate. Pellentesque convallis urna leo egestas iaculis pulvinar. </p>
                        </div>
                        <div class="content-list">
                            <h6 class="fw-bold">Icon block Value Prop</h6>
                            <p>Duis semper ultrices aliquam nisl vulputate. Pellentesque convallis urna leo egestas iaculis pulvinar. </p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="fw-bold mb-3 mt-5">Paaket Bundling</h4>
            <div id="daftar-bundling" class="row g-2 g-md-3 g-lg-4 pb-5">
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {
        let location = $('#card-kategori');
        $('#enroll').click(function() {
            $('html, body').animate({
                scrollTop: location.offset().top
            }, 1000);
        })

        $.ajax({
            url: 'https://lms.lazy2.codes/api/course',
            type: "GET",
            dataType: "JSON",
            success: function(course) {
                console.log(course);
                $.each(course, function(i, data) {
                    if (i % 3 == 0) {
                        var level = "advance";
                    } else if (i % 2 == 0) {
                        var level = "intermediate";
                    } else if (i % 1 == 0) {
                        var level = "basic";
                    }
                    $('#daftar-course').append(`
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card card-course">
                                <div class="card-body">
                                    <span>${level}</span>
                                    <img src="<?= base_url() ?>/img/course/bg1.jpg" alt="" class="w-100">
                                </div>
                                <div class="card-footer">
                                    <p class="card-title">` + data.title + `</p>
                                    <div class="course-footer">
                                        <s>Rp. ` + data.old_price + `</s>
                                        <p>Rp. ` + data.new_price + `</p>
                                        <div class="row beli-course w-100 m-0">
                                            <div class="col-10 p-0 pe-3">
                                                <a href="/course/detail-course/` + data.course_id + `" class="btn w-100">beli course</a>
                                            </div>
                                            <div class="col-2 p-0 align-self-center">
                                                <a href="/payment/checkout/" class="fa fa-sharp fa-solid fa-cart-plus py-2"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                });
            }
        });

        $.ajax({
            url: 'https://lms.lazy2.codes/public/api/bundling',
            type: "GET",
            dataType: "JSON",
            success: function(bundling) {
                console.log(bundling);
                $.each(bundling, function(i, data) {
                    $('#daftar-bundling').append(`
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card card-course">
                                <div class="card-body">
                                    <span>Basic</span>
                                    <img src="<?= base_url() ?>/img/course/bg1.jpg" alt="" class="w-100">
                                </div>
                                <div class="card-footer">
                                    <p class="card-title">` + data.title + `</p>
                                    <div class="course-footer">
                                        <s>Rp. ` + data.old_price + `</s>
                                        <p>Rp. ` + data.new_price + `</p>
                                        <div class="row beli-course w-100 m-0">
                                            <div class="col-10 p-0 pe-3">
                                                <a href="/course/detail-course/` + data.bundling_id + `" class="btn w-100">beli bundling</a>
                                            </div>
                                            <div class="col-2 p-0 align-self-center">
                                                <a href="#" class="fa fa-sharp fa-solid fa-cart-plus py-2"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                });
            }
        });
    })
</script>

<?= $this->endSection() ?>