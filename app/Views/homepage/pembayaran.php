<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Course Start -->
<main id="pembayaran">


    <div class="container py-5">
        <div class="row my-5">
            <h3 class="text-primary">Checkout</h3>
            <div class="col-lg-8">
                <div class="card body bg-light container pt-3">
                    <div class="row justify-content-between">
                        <div class="col-sm-6">
                            <h3 class="text-primary">Building BIM Revit All Disclipine</h3>
                        </div>
                        <div class="col-6 text-end">
                            <h5>Rp.9000.000</h5>
                            <h5 class="text-muted"><s>Rp.1.000.000</s></h5>
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <strong>46 jam 15 menit</strong>
                        <span>Basic</span>
                        <strong>56</strong>
                        <span>Video Pembelajaran</span>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <span>Introducing to BIM and Autodesk</span>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <p class="text-justify">Apakah kamu ingin berpindah karir menjadi seorang Engineer
                            dan memulai dari awal hingga mahir? Apakah kamu ingin menjadi seorang engineer
                            yang siap kerja? Apakah kamu seorang engineer yang ingin menambah skills? Kelas
                            ini cocok untuk kamu!</p>
                    </div>
                    <div class="col-sm-8">
                        <h6>Kelas dalam building ini :</h6>
                        <ul>
                            <li>Introduction to BMI and Autodesk Revit</li>
                            <li>Starting Autodesk Revit Architecture Project</li>
                            <li>Basic Drawing and Modify Tools</li>
                            <li>Modelling Walls and Column</li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                        <h6>Keuntungan yang di dapatkan :</h6>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-check"></i>
                                Akses 50+ video dan materi pembelajaran
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                Belajar fleksibel kapanpun dimanapun
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                Kuis untuk tingkatkan kemampuan di setiap akhir video
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                Tugas atau project akhir untuk menguji kemampuan anda
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                Materi 20+ tambahan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row mb-3 mx-auto">
                    <div class="card body bg-light container pt-3">
                        <h5>Pembayaran</h5>
                        <div class="row justify-content-between">
                            <div class="col-sm-6">
                                <h6>Harga</h6>
                            </div>
                            <div class="col-6 text-end">
                                <h6>Rp.1.000.000</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-primary">Diskon</h6>
                            </div>
                            <div class="col-6 text-end">
                                <h6 class="text-primary">-Rp.100.000</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6>Total</h6>
                            </div>
                            <div class="col-6 text-end">
                                <h6>Rp.900.000</h6>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="diskon">
                                <input type="text" class="form-control mb-3" placeholder="Masukan Kode Diskon">
                                <a href="" class="d-grid my-3">
                                    <button class="btn btn-primary" type="button">Gunakan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="card body bg-light container pt-3">
                        <label class="mb-3">Metode Pembayaran</label>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="p-0">
                                <div class="row logo-bank">
                                    <div class="col-4 mb-3">
                                        <button class="btn bank active" data-norek="BCA-94249372498789">
                                            <img class="img-fluid" src="/img/bank/bca.png" alt="BCA">
                                        </button>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <button class="btn bank" data-norek="BNI-94249372498789">
                                            <img class="img-fluid" src="/img/bank/bni.png" alt="BNI">
                                        </button>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <button class="btn bank" data-norek="BRI-94249372498789">
                                            <img class="img-fluid" src="/img/bank/bri.png" alt="BRI">
                                        </button>
                                    </div>
                                </div>
                                <div class="row logo-bank">
                                    <div class="col-4 mb-3">
                                        <button class="btn bank" data-norek="MANDIRI-94249372498789">
                                            <img src="/img/bank/mandiri.png" alt="MANDIRI">
                                        </button>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <button class="btn bank" data-norek="PERMATA-94249372498789">
                                            <img src="/img/bank/permata.png" alt="PERMATA">
                                        </button>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <button class="btn text-center w-100">
                                            <i class="fa-solid fa-building-columns text-center text-secondary"></i>
                                            <div class="small text-muted">lainnya</div>
                                        </button>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                <strong>Internet Banking BRI</strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>1. Login ke akun internet banking BRI anda</li>
                                                    <li>2. Pilih menu "Transfer"</li>
                                                    <li>3. Pilih menu "Transfer ke Rekening BRI"</li>
                                                    <li>4. Masukan nomor rekening 94249372498789</li>
                                                    <li>5. Masukan nominal pembayaran</li>
                                                    <li>6. Masukan kode OTP yang dikirim ke nomor handphone anda
                                                    </li>
                                                    <li>7. Klik "Lanjutkan"</li>
                                                    <li>8. Klik "Konfirmasi"</li>
                                                    <li>9. Klik "Selesai"</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                <strong>ATM BRI</strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>1. Masukan kartu ATM BRI anda</li>
                                                    <li>2. Pilih menu "Transfer"</li>
                                                    <li>3. Pilih menu "Transfer ke Rekening BRI"</li>
                                                    <li>4. Masukan nomor rekening 94249372498789</li>
                                                    <li>5. Masukan nominal pembayaran</li>
                                                    <li>6. Masukan kode OTP yang dikirim ke nomor handphone anda
                                                    </li>
                                                    <li>7. Klik "Lanjutkan"</li>
                                                    <li>8. Klik "Konfirmasi"</li>
                                                    <li>9. Klik "Selesai"</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                <strong>Mobile Banking BRI</strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>1. Login ke akun mobile banking BRI anda</li>
                                                    <li>2. Pilih menu "Transfer"</li>
                                                    <li>3. Pilih menu "Transfer ke Rekening BRI"</li>
                                                    <li>4. Masukan nomor rekening 94249372498789</li>
                                                    <li>5. Masukan nominal pembayaran</li>
                                                    <li>6. Masukan kode OTP yang dikirim ke nomor handphone anda
                                                    </li>
                                                    <li>7. Klik "Lanjutkan"</li>
                                                    <li>8. Klik "Konfirmasi"</li>
                                                    <li>9. Klik "Selesai"</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/prosesbayar" class="d-grid my-3">
                                    <button class="btn btn-primary" type="button">Proses Pembayaran</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?= $this->endSection('content')  ?>