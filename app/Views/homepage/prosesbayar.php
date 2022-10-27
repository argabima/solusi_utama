<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Course Start -->
<main id="prosesbayar" class="py-5 mt-5">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card body bg-light container pt-3">
                                <div class="row justify-content-between dflex">
                                    <div class="col-6 mt-3">
                                        <label>Total</label>
                                        <h4>Rp.900.000</h4>
                                        <label>ID TYEUEI787LO</label>
                                    </div>
                                    <div class="col-6 mt-3 text-end">
                                        <label>Bayar Sebelum</label>
                                        <h4>10 Oktober 2022, 00:00 WIB</h4>
                                    </div>
                                    <div class="col-12 col-lg-6 mt-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                            <p>Metode Pembayaran</p>
                                            <h3>BRI</h3>
                                            <p>Tranfer ke virtual akun di bawah ini</p>
                                            <h4>1234567890</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 mt-3">
                                        <div class="accordion">
                                            <div class="accordion-item justify-content-between card-body bg-white">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                                        <h5 class="text-primary">Building BIM Revit All Disclipine</h5>
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="accordion">
                                            <div class="accordion-item justify-content-between card-body bg-white">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                        <h5>Cara Membayar</h5>
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                                                    <div class="accordion-body">
                                                        <div class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <h6>1. Transfer ke rekening di atas</h6>
                                                                <h6>2. Tunggu konfirmasi dari admin</h6>
                                                                <h6>3. Lihat Histori</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/payment/riwayat" class="d-grid my-3">
                                        <button class="btn btn-primary" type="button">Lihat Histori</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</main>
<?= $this->endSection('content')  ?>