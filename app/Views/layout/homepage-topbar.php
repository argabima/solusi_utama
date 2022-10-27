<!-- Topbar Start -->
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
<div class="container-fluid bg-dark p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-9 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-envelope text-primary me-2"></small>
                <small><?= $email['url'] ?></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center ms-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small><?= $studio['url'] ?></small>
            </div>
        </div>
        <div class="col-lg-3 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $facebook['url'] ?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $twitter['url'] ?>"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $linkedin['url'] ?>"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href="<?= $instagram['url'] ?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->