<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/artikel', 'ArtikelController::index');
$routes->get('/artikel/detail-artikel', 'ArtikelController::detail_artikel');
$routes->get('/course', 'Course::index');
$routes->get('/course/detail-course/(:any)', 'Course::detail_course');
$routes->get('/training', 'Training::index');
$routes->get('/training/detail-training', 'Training::detail_training');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/kontak', 'Home::kontak');
$routes->post('/kirim_kontak', 'Home::kirim_kontak');
$routes->get('/faq', 'Home::faq');
$routes->get('/kuis', 'Course::kuis');
$routes->get('/pembayaran', 'Payment::pembayaran');
$routes->get('/prosesbayar', 'Payment::prosesbayar');
$routes->get('/payment/konfirmasi', 'Payment::konfirmasi');
$routes->get('/payment/riwayat', 'Payment::riwayat');
$routes->get('/payment/checkout', 'Payment::checkout');


// Admin
$routes->get('/auth', 'AuthController::index');
$routes->post('/auth-check', 'AuthController::auth_check');

$routes->group('admin', ['filter' => 'cekLogin'], function ($routes) {
    $routes->get('kelola-pengguna', 'Admin::kelola_pengguna');
    $routes->post('kelola-pengguna/tambah', 'Admin::tambah_pengguna');
    $routes->delete('kelola-pengguna/hapus/(:num)', 'Admin::hapus_pengguna/$1');
    $routes->get('kelola-pengguna/edit/(:num)', 'Admin::edit_pengguna/$1');
    $routes->put('kelola-pengguna/proses-edit/(:num)', 'Admin::proses_edit_pengguna/$1');

    $routes->get('artikel', 'Admin::daftar_artikel');
    $routes->get('artikel/cek-slug/(:any)', 'Admin::cek_slug/$1');
    $routes->get('artikel/cek-slug-edit/(:any)/(:any)', 'Admin::cek_slug_edit/$1/$2');
    $routes->get('artikel/tambah', 'Admin::tambah_artikel');
    $routes->post('artikel/proses_tambah_artikel', 'Admin::proses_tambah_artikel');
    $routes->get('artikel/edit/(:segment)', 'Admin::edit_artikel/$1');
    $routes->put('artikel/proses_edit_artikel/(:segment)', 'Admin::proses_edit_artikel/$1');
    $routes->delete('artikel/hapus/(:num)', 'Admin::hapus_artikel/$1');

    $routes->get('galeri', 'Admin::galeri');
    $routes->get('galeri/tambah', 'Admin::tambah_galeri');
    $routes->post('galeri/tambah', 'Admin::proses_tambah_galeri');
    $routes->get('galeri/edit/(:num)', 'Admin::edit_galeri/$1');
    $routes->put('galeri/edit/(:num)', 'Admin::proses_edit_galeri/$1');
    $routes->delete('galeri/hapus/(:num)', 'Admin::hapus_galeri/$1');

    $routes->post('galeri/tambah-kategori', 'Admin::tambah_kategori_jasa');
    $routes->delete('galeri/hapus-kategori/(:num)', 'Admin::hapus_kategori_jasa/$1');
    $routes->put('galeri/edit-kategori/(:num)', 'Admin::edit_kategori_jasa/$1');

    $routes->get('sosmed', 'Admin::sosmed');
    $routes->put('sosmed/edit/(:any)', 'Admin::edit_sosmed/$1');


    $routes->get('faq', 'Admin::faq');
    $routes->get('faq/tambah', 'Admin::tambah_faq');
    $routes->post('faq/proses_tambahfaq', 'Admin::proses_tambahfaq');
    $routes->delete('faq/hapus_faq/(:num)', 'Admin::hapus_faq/$1');
    $routes->get('faq/edit_faq/(:num)', 'Admin::edit_faq/$1');
    $routes->put('faq/proses_edit_faq/(:num)', 'Admin::proses_edit_faq/$1');

    $routes->get('daftar-personil', 'Admin::daftar_personil');
    $routes->post('daftar-personil/tambah/kategori', 'Admin::tambah_kategori_personil');
    $routes->delete('daftar-personil/hapus/kategori/(:num)', 'Admin::hapus_kategori_personil/$1');
    $routes->put('daftar-personil/edit/kategori/(:num)', 'Admin::edit_kategori_personil/$1');
    $routes->post('daftar-personil/tambah/jabatan', 'Admin::tambah_jabatan_personil');
    $routes->delete('daftar-personil/hapus/jabatan/(:num)', 'Admin::hapus_jabatan_personil/$1');
    $routes->put('daftar-personil/edit/jabatan/(:num)', 'Admin::edit_jabatan_personil/$1');
    $routes->get('daftar-personil/tambah-personil', 'Admin::tambah_personil');
    $routes->post('daftar-personil/proses-tambah-personil', 'Admin::proses_tambah_personil');
    $routes->delete('daftar-personil/hapus-personil/(:num)', 'Admin::hapus_personil/$1');
    $routes->get('daftar-personil/edit-personil/(:num)', 'Admin::edit_personil/$1');

    $routes->get('sbu', 'Admin::sbu');
    $routes->post('sbu/tambah-kategori', 'Admin::tambah_ktgori_sbu');
    $routes->put('sbu/edit_kategori/(:num)', 'Admin::edit_ktgori_sbu/$1');
    $routes->delete('sbu/hapus_sbu/(:num)', 'Admin::hapus_kategori_sbu/$1');

    $routes->get('sbu/edit-sbu/(:num)', 'Admin::edit_sbu/$1');
    $routes->put('sbu/proses_edit_sbu/(:num)', 'Admin::proses_edit_sbu/$1');
    $routes->get('sbu/tambah-sbu', 'Admin::tambah_sbu');
    $routes->post('sbu/proses_tambahsbu', 'Admin::proses_tambahsbu');
    $routes->delete('sbu/hapus-sbu/(:num)', 'Admin::proses_hapus_sbu/$1');

    $routes->get('logout', 'AuthController::logout');
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
