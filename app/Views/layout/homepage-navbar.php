<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light static-top border-bottom">
    <a href="/" class="navbar-brand d-flex align-items-center px-lg-5 ps-md-3">
        <img src="<?= base_url() ?>/logo.png" class="w-100 h-100" alt="">
    </a>
    <button type="button" class="navbar-toggler me-md-3 shadow-none" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-3 p-lg-0">
            <a href="/" class="nav-item nav-link <?= $segment1 == '' ? 'active' : '' ?>">Home</a>
            <a href="/artikel" class="nav-item nav-link <?= $segment1 == 'artikel' ? 'active' : '' ?>">Artikel</a>
            <a href="/course" class="nav-item nav-link <?= $segment1 == 'course' ? 'active' : '' ?>">Course</a>
            <a href="/training" class="nav-item nav-link <?= $segment1 == 'training' ? 'active' : '' ?>">Training</a>
            <a href="/galeri" class="nav-item nav-link <?= $segment1 == 'galeri' ? 'active' : '' ?>">Galeri</a>
            <a href="/tentang" class="nav-item nav-link <?= $segment1 == 'tentang' ? 'active' : '' ?>">Tentang</a>
            <a href="/kontak" class="nav-item nav-link <?= $segment1 == 'kontak' ? 'active' : '' ?>">Kontak</a>
            <a href="/faq" class="nav-item nav-link <?= $segment1 == 'faq' ? 'active' : '' ?>">FAQ</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->