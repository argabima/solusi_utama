<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<div id="kuis">
    <div class="container mt-5 py-3">
        <div class="row justify-content-between flex-row-reverse w-100">
            <h4 class="text-dark mb-3">Kuis Pemrograman dengan Kotlin</h4>
            <code class="text-dark">Kuis Latihan <span class="ms-5">20 menit</span></code>
            <h5 class="fw-bold mt-5 mb-3">Mulai Kuis</h5>

            <div class="col-lg-3 col-md-12 my-5">
                <div class="nomor-kuis">
                    <span class="active">1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>
                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                    <span>10</span>
                </div>
            </div>

            <div id="daftar-soal" class="col-lg-8 col-md-12">
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 text-end">
                    <span role="button" class="btn btn-outline-primary btn-back">back</span>
                    <span role="button" class="ms-3 btn btn-primary btn-next">next</span>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        soal = function() {
            $('.daftar-soal').hide();
            $('.daftar-soal').first().show();

            $('.btn-next').click(function() {
                $('.daftar-soal:visible').next().show();
                $('.daftar-soal:visible').prev().hide();
            });

            $('.btn-back').click(function() {
                $('.daftar-soal:visible').prev().show();
                $('.daftar-soal:visible').next().hide();
            });
        }

        var url = 'https://lms.lazy2.codes/public/api/quiz';
        $.ajax({
            url: url,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                var result = JSON.parse(data[1].question);

                $.each(result, function(i, data) {
                    var question = data.question;
                    var answer = data.answer;
                    var jawaban = data.is_valid;
                    var i = i + 1;
                    $('#daftar-soal').append(`
                    <div class="daftar-soal mt-3">
                        <div class="soal d-flex">
                            <span class="me-2">` + i + `</span>
                            <p class="ms-1">` + question + `</p>
                        </div>
                        <div class="point">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="` + i + `` + 0 + `" id="` + i + `` + 0 + `">
                                <label class="form-check-label" for="` + i + `` + 0 + `">
                                    ` + answer[0] + `
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="` + i + `` + 1 + `" id="` + i + `` + 1 + `">
                                <label class="form-check-label" for="` + i + `` + 1 + `">
                                    ` + answer[1] + `
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="` + i + `` + 2 + `" id="` + i + `` + 2 + `">
                                <label class="form-check-label" for="` + i + `` + 2 + `">
                                    ` + answer[2] + `
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="` + i + `` + 3 + `" id="` + i + `` + 3 + `">
                                <label class="form-check-label" for="` + i + `` + 3 + `">
                                    ` + answer[3] + `
                                </label>
                            </div>
                        </div>
                    </div>`);
                });
                soal();
            }
        });
    })
</script>

<?= $this->endSection('content')  ?>