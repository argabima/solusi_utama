<!-- Footer Start -->
<?php
$this->db = \Config\Database::connect();
$studio = $this->db->table('sosmed')->where('nama_sosmed', 'studio')->get()->getRowArray();
$office = $this->db->table('sosmed')->where('nama_sosmed', 'head office')->get()->getRowArray();
$email = $this->db->table('sosmed')->where('nama_sosmed', 'email')->get()->getRowArray();
$phone = $this->db->table('sosmed')->where('nama_sosmed', 'phone')->get()->getRowArray();
$whatsapp = $this->db->table('sosmed')->where('nama_sosmed', 'whatsapp')->get()->getRowArray();
$facebook = $this->db->table('sosmed')->where('nama_sosmed', 'facebook')->get()->getRowArray();
$twitter = $this->db->table('sosmed')->where('nama_sosmed', 'twitter')->get()->getRowArray();
$linkedin = $this->db->table('sosmed')->where('nama_sosmed', 'linkedin')->get()->getRowArray();
$instagram = $this->db->table('sosmed')->where('nama_sosmed', 'instagram')->get()->getRowArray();
$youtube = $this->db->table('sosmed')->where('nama_sosmed', 'youtube')->get()->getRowArray();
?>
<div class="container-fluid bg-dark text-body footer pt-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row d-flex flex-row-reverse g-5">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 class="text-white mb-4">Tentang Kami</h5>
                <a class="btn btn-link" href="/tentang">Tentang</a>
                <a class="btn btn-link" href="/kontak">Kontak</a>
                <a class="btn btn-link" href="">Layanan</a>
                <a class="btn btn-link" href="faq">FAQ</a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h5 class="text-white mb-4">Alamat</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-4"></i><?= $studio['url'] ?></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $whatsapp['url'] ?></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $phone['url'] ?></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $email['url'] ?></p>
                <div id="social-media" class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href="<?= $twitter['url'] ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="<?= $facebook['url'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="<?= $youtube['url'] ?>"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="<?= $linkedin['url'] ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Tratama Mitra Gautama</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->