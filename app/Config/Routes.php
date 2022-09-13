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

//Main Page Sicepot
// $routes->get('/sicepot/dashboard', 'Home::praperdim');
$routes->get('/sicepot', 'Home::praperdim');
$routes->get('/sicepot-internship', 'Home::internship');
// $routes->get('/praperdim', 'Home::praperdim');

//Pemohon Dewasa
$routes->get('/sicepot-perdimdewasa', 'PemohonDewasa::perdimdewasa');
$routes->post('/sicepot-createperdimdewasa', 'PemohonDewasa::createperdimdewasa');
$routes->get('/sicepot-print-perdim/(:any)', 'PemohonDewasa::cetakperdim/$1');

//Pemohon Anak
$routes->get('/sicepot-perdimanak', 'PemohonAnak::perdimanak');
$routes->post('/sicepot-createperdimanak', 'PemohonAnak::createperdimanak');
$routes->get('/sicepot-cetak-perdim-anak', 'CetakPerdim::cetakperdim');

//Halaman Admin
$routes->get('/sicepot-loginadmin', 'Admin::login');
$routes->get('/sicepot-dashboardadmin', 'Admin::dashboard');
$routes->get('/sicepot-dataperdimdewasa', 'Admin::dataperdimdewasa');
$routes->get('/sicepot-dataperdimanak', 'Admin::dataperdimanak');

//Cetak
// $routes->get('/cetak', 'Cetak1::index');
$routes->get('/sicepot-cetak-perdim-dewasa/(:any)', 'CetakPerdim::cetak/$1');
$routes->get('/sicepot-cetak-perdim-anak/(:any)', 'CetakPerdimAnak::cetak/$1');


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
