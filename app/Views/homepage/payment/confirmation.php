<?= $this->extend('layout/main-layout')  ?>
<?= $this->section('content')  ?>

<div id="konfirmasi" class="container-fluid bg-light overflow-hidden px-lg-0">
    <div class="container py-5 px-lg-0">
        <div class="row justify-content-sm-center flex-row-reverse mx-auto mt-3 wow fadeInDown">
            <div class="col-xs-4 col-sm-6 col-md-6 col-lg-4 mx-auto">
                <img src="<?= base_url() ?>/img/payment/bg_ne.png" width="100%" alt="">
            </div>
        </div>
        <div class="text-center flex-row-reverse mx-auto mb-3 wow fadeInUp">
            <h4 class="fw-bold" style="color: #32C36C;">Pembayaran Sedang Diproses</h4>
        </div>
        <div class="text-center flex-row-reverse mx-auto mb-3 wow fadeInUp">
            <h6 class="fw-normal" style="color: black;">Kami akan mengirimkan notifikasi saat pembayaran anda berhasil</h6>
        </div>
        <div class="text-center flex-row-reverse mx-auto mb-5 wow fadeInUp">
            <a href="/payment/riwayat" class="fw-bold" style="color: #1877F2;">Lihat history pembelian</a>
        </div>
    </div>
</div>

<?= $this->endSection('content')  ?>