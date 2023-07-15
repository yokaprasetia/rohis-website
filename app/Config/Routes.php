<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Mulai Routes di sini... 

// LANDING PAGE
$routes->get('/', 'LandingPage::index');

// LOGIN
$routes->get('/login', 'Login::index');
$routes->post('/prosesLogin', 'Login::proses');
$routes->get('/logout', 'Login::logout');

// PROFIL
$routes->get('/profil', 'Profil::index');
$routes->post('/updateProfil', 'Profil::updateProfil');
$routes->post('/updatePassword', 'Profil::updatePassword');

// BERANDA
$routes->get('/beranda', 'Beranda::index');

//AKUN
$routes->get('/akun', 'Akun::index');
$routes->get('/akunDetail/(:segment)', 'Akun::detail/$1');
$routes->post('/tambahAkun', 'Akun::tambah');
$routes->get('/deleteAkun/(:segment)', 'Akun::delete/$1');
$routes->post('/prosesUbahProfil', 'Akun::prosesUbahProfil');
$routes->post('/prosesUbahPassword', 'Akun::prosesUbahPassword');
$routes->post('/prosesUbahStatus', 'Akun::prosesUbahStatus');
$routes->post('/importExcel', 'Akun::import');
$routes->get('/downloadFile/(:segment)', 'Akun::downloadFile/$1');


//PENGUMUMAN
$routes->get('/pengumuman', 'Pengumuman::index');
$routes->get('/pengumumanDetail/(:segment)', 'Pengumuman::detail/$1');
$routes->post('/tambahPengumuman', 'Pengumuman::tambah');
$routes->get('/deletePengumuman/(:segment)', 'Pengumuman::delete/$1');

//KEUANGAN
$routes->get('/keuangan', 'Keuangan::index');
$routes->post('/tambahTransaksi', 'Keuangan::tambah');
$routes->get('/deleteTransaksi/(:segment)', 'Keuangan::delete/$1');

//DAFTAR HADIR
$routes->get('/daftarHadir', 'DaftarHadir::index');
$routes->get('/detailKehadiran/(:segment)', 'DaftarHadir::detail/$1');
$routes->post('/tambahKehadiran', 'DaftarHadir::tambah');

//KEGIATAN
$routes->get('/kegiatan', 'Kegiatan::index');

//FAQ
$routes->get('/faq', 'Faq::index');

// LOG AKTIVITAS
$routes->get('logAktivitas', 'LogAktivitas::index');
$routes->get('deleteLogAktivitas', 'LogAktivitas::delete');

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
