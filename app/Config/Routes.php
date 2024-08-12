<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::loginPage');
$routes->post('/login', 'Home::login');
$routes->get('/register', 'Home::registerPage');
$routes->get('/kriteria', 'Master::getKriteria');
$routes->post('/register', 'Home::register');
$routes->get('/dashboard', 'Home::dashboardPage');

//Master Kriteria
$routes->get('/kriteria', 'Master::getKriteria');
$routes->post('/kriteria', 'Master::addKriteria');
$routes->post('/kriteria/(:any)', 'Master::updateKriteria/$1');
$routes->get('/kriteria/(:any)', 'Master::deleteKriteria/$1');

//Master Alternatif
$routes->get('/alternatif', 'Master::getAlternatif');
$routes->post('/alternatif', 'Master::addAlternatif');
$routes->post('/alternatif/(:any)', 'Master::updateAlternatif/$1');
$routes->get('/alternatif/(:any)', 'Master::deleteAlternatif/$1');

//SMART Penilaian
$routes->get('/penilaian', 'Smart::getPenilaian');
$routes->post('/penilaian', 'Smart::addPenilaian');
$routes->post('/penilaian/(:any)', 'Smart::updatePenilaian/$1');
$routes->get('/penilaian/(:any)', 'Smart::deletePenilaian/$1');

//SMART Kuartal
$routes->get('/kuartal', 'Smart::getKuartal');
$routes->post('/kuartal', 'Smart::addKuartal');
$routes->post('/kuartal/(:any)', 'Smart::updateKuartal/$1');
$routes->get('/kuartal/(:any)', 'Smart::deleteKuartal/$1');


