<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<main id="checkout" class="py-5 mt-2">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card body bg-light container pt-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="fw-bold">Checkout</h4>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold">Jenis</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold">Harga</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold">Aksi</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card body bg-light container pt-3 mt-3">
                    <div class="row justify-content-between dflex py-3">
                        <div class="col-lg-3">
                            <img src="/img/course/bg1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                        </div>
                        <div class="col-lg-3">
                            <h4>judul content</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold">Course</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold">Rp 1.000.000</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold"><a href="">hapus dari keranjang</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card body bg-light container pt-3 mt-3">
                    <div class="row justify-content-between dflex py-3">
                        <div class="col-lg-3">
                            <img src="/img/course/bg1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                        </div>
                        <div class="col-lg-3">
                            <h4>judul content</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold">Training</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold">Rp 1.000.000</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fw-bold"><a href="">hapus dari keranjang</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card body bg-light container pt-3 mt-3">
                    <div class="row justify-content-between dflex py-3">
                        <div class="col-lg-6">
                            <a href="">Kosongkan Keranjang</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6 class="fw-bold">Total (2 produk):<span>0</span></h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary" type="submit">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<?= $this->endSection('content')  ?>