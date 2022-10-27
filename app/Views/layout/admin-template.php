<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>/img/logo-perusahaan.JPG" rel="icon">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/css/admin.css">
    <title><?= $title ?></title>

</head>

<body>

    <?php
    $user = session()->get('user');
    ?>

    <div class="admin-menu">

        <div class="sidebar">
            <header class="row">
                <div class="col p-0">
                    <a href="#!" class="menu-toggle"><i class="fas fa-xmark"></i></a>
                </div>
            </header>
            <nav class="sidebar-nav-list">
                <div class="sidebar-top">
                    <div class="row">
                        <div class="col-6">
                            <a href="#1"><i class="fa fa-regular fa-user"></i></a>
                        </div>
                        <div class="col-6">
                            <a href="#2"><i class="fa fa-solid fa-ellipsis-vertical"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 text-center">
                            <img src="<?= base_url() . '/img/foto_profil/' . $user['foto'] ?>" width="200px" alt="...">
                        </div>
                        <div class="col-12 col-md-12 profile text-white text-center mt-2">
                            <h6 class="fw-bold"><?= $user['username'] ?></h6>
                            <p class="mt-1"><?= $user['email'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-3" style="max-height: 10px;width:80%">
                    <div class="sidebar-nav-item text-center" style="border-top: 1.5px solid #fff"></div>
                </div>

                <a href="/admin/kelola-pengguna" class="sidebar-nav-item">Kelola Pengguna
                    <i class="fa fa-solid fa-angle-right"></i>
                </a>

                <a href="/admin/artikel" class="sidebar-nav-item">Artikel
                    <i class="fa fa-solid fa-angle-right"></i>
                </a>

                <a href="/admin/galeri" class="sidebar-nav-item">Galeri
                    <i class="fa fa-solid fa-angle-right"></i>
                </a>

                <a href="/admin/sosmed" class="sidebar-nav-item active">Sosmed
                    <i class="fa fa-solid fa-angle-right"></i>
                </a>
                <a href="/admin/faq" class="sidebar-nav-item active">FAQ
                    <i class="fa fa-solid fa-angle-right"></i>
                </a>

                <div class="sidebar-nav-dropdown">
                    <a href="#" class="sidebar-nav-item sidebar-nav-dropdown-toggle">Tentang <i class="fa-solid fa-angle-right"></i></a>
                    <div class="sidebar-nav-dropdown-menu">
                        <a href="/admin/daftar-personil" class="sidebar-nav-dropdown-item">
                            Daftar Personil <i class="fa-solid fa-angle-right"></i>
                        </a>
                        <a href="/admin/sbu" class="sidebar-nav-dropdown-item">
                            Sertifikasi (SBU) <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                </div>

            </nav>
        </div>

        <div class="main">
            <header class="main-toolbar">
                <div class="row w-100">
                    <div class="col-sm-12 p-0 align-items-center" style="display:inline-flex">
                        <span class="menu-toggle h-100" role="button"><i class="fa fa-solid fa-bars"></i></span>
                        <i id="search-phone" class="fa-solid fa-magnifying-glass ms-3" role="button"></i>
                        <form id="search-toolbar" class="ms-auto show" role="search">
                            <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input class="form-control" type="text" placeholder="search here" aria-label="Search">
                        </form>
                        <a href="/" class="swevel-brand ms-auto">Tratama</a>
                        <div class="logout">
                            <a href="logout"><i class="fa-solid fa-sign-out-alt px-3"></i></a>
                        </div>
                    </div>
                </div>
            </header>

            <?= $this->renderSection('content'); ?>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="<?= base_url() ?>/js/admin.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Ketikkan isi konten disini',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
            $('.toast').toast('show');
        });
    </script>
</body>

</html>