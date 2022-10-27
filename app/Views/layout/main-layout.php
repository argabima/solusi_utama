<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Tratama -- <?= $title ?></title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="<?= base_url() ?>/img/logo-perusahaan.JPG" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
  <script src="<?= base_url() ?>/lib/OwlCarousel2-2.3.4/dist/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url() ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url() ?>/lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/lib/OwlCarousel2-2.3.4/dist/owl.theme.default.min.css">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= base_url() ?>/css/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class=" bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->
  <?= $this->include('layout/homepage-topbar') ?>
  <?= $this->include('layout/homepage-navbar') ?>

  <?= $this->renderSection('content') ?>

  <?= $this->include('layout/homepage-footer') ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/lib/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url() ?>/lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/lib/OwlCarousel2-2.3.4/dist/highlight.js"></script>

  <!-- Template Swiper Javascript -->
  <script src="<?= base_url() ?>/js/swiper-bundle.min.js"></script>
  <!-- Template Javascript -->
  <script src="<?= base_url() ?>/js/main.js"></script>
  <script src="<?= base_url() ?>/js/training.js"></script>
  <!-- <script>
    var $spinner = $('#spinner');
    $(document).ajaxStart(function() {
      $spinner.addClass('show');
    }).ajaxStop(function() {
      setTimeout(function() {
        $spinner.removeClass('show');
      }, 1000);
    });
  </script> -->
</body>

</html>