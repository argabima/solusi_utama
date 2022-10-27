<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<div id="konfirmasi" class="container-fluid bg-light overflow-hidden px-lg-0">
    <div class="container py-5 px-lg-0">
        <div class="row mt-3 mb-5 justify-content-start mx-auto mt-5 mb-3 wow fadeInDown">
            <h4 class="fw-bold" style="color: #32C36C;">Progress Saya</h4>
        </div>
        <div class="row mx-auto mt-2 mb-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">Semua</button>
                    <button class="nav-link" id="nav-done-tab" data-bs-toggle="tab" data-bs-target="#nav-done" type="button" role="tab" aria-controls="nav-done" aria-selected="false">Berhasil</button>
                    <button class="nav-link" id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button" role="tab" aria-controls="nav-pending" aria-selected="false">Dalam Proses</button>
                    <button class="nav-link" id="nav-fail-tab" data-bs-toggle="tab" data-bs-target="#nav-fail" type="button" role="tab" aria-controls="nav-fail" aria-selected="false">Belum Dibayar</button>
                </div>
            </nav>
            <div class="tab-content mt-3 mb-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022 &emsp; <a href="">Lihat cara bayar</a></p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"><span style="color:black;">Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-success" disabled>Lunas</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                            <div class="card-columns">
                                <div class="card my-3 mx-auto">
                                    <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="card-text">Dibayar pada 23 September 2022</p>
                                                <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-6 col-xl-4">
                                                        <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                    </div>
                                                    <div class="col-md-8 col-lg-6 col-xl-8">
                                                        <p class="card-text" style="color:teal;">&emsp; <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-end">
                                                    <p><button type="button" class="btn btn-outline-warning" disabled>Sedang diproses</button></p>
                                                    <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022 <a href="">Lihat cara bayar</a></p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"> <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-danger" disabled>Belum Lunas</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-done" role="tabpanel" aria-labelledby="nav-done-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022 <a href="">Lihat cara bayar</a></p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"> <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-success" disabled>Lunas</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022</p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"> <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-success" disabled>Lunas</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022</p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"> <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-warning" disabled>Sedang diproses</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022</p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"> <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-warning" disabled>Sedang diproses</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-fail" role="tabpanel" aria-labelledby="nav-fail-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022</p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"> <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-danger" disabled>Belum Lunas</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card-columns">
                                    <div class="card my-3 mx-auto">
                                        <img class="card-img-top" src="<?= base_url() ?>" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text">Dibayar pada 23 September 2022</p>
                                                    <h4 class="card-title">Bundling BMI Revit All Discipline</h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-6 col-xl-4">
                                                            <p class="text-center" style="color:teal;">Rp 200,000 </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 col-xl-8">
                                                            <p class="card-text" style="color:teal;"> <span style="color:black;"> Bayar: BRI &emsp; kode :</span> 7899876</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <p><button type="button" class="btn btn-outline-danger" disabled>Belum Lunas</button></p>
                                                        <a href="/course/detail-course/1" class="btn btn-primary">Detail Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content')  ?>