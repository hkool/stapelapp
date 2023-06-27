<?php


namespace Config;

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
$routes->get('/', 'Home::index');
$routes->get('/dobbelsteen', 'DiceController::show');
$routes->get('/dobbelsteen', 'SpelerController::index');
$routes->get('/vragen', 'VragenController::getVragen');
$routes->get('/dobbelsteen', 'SpelerController::index');
$routes->get('/vragen', 'VragenController::getVragen');
$routes->get('/dobbelsteen', 'SpelerController::index');
$routes->get('/bord', 'BordController::index');
$routes->get('/bord', 'bordController::bord');
$routes->post('/vragen', 'VragenController::submitAnswer');
$routes->post('/reset', 'VragenController::resetGebruikt');
$routes->get('/vragen/(:num)', 'VragenController::getVragen/$1');

$routes->get('/dobbelsteen', 'SpelerController::index');
$routes->get('/move', 'MoveController::moveSpelers');
$routes->get('/speler/aantal', 'SpelerController::setAantalSpelers');
$routes->post('/speler/aantal', 'SpelerController::setAantalSpelers');

$routes->get('/kant', 'KeuzesController::index');
$routes->post('/keuzescontroller/index', 'KeuzesController::index');
$routes->get('/keuzescontroller/index', 'KeuzesController::index');
$routes->post('/keuzescontroller/reset', 'KeuzesController::reset');
$routes->get('/vragen', 'KeuzesController::getVragen'); // gewijzigd naar 'getVragen'
$routes->post('/vragen/submit', 'KeuzesController::submitAnswer');
$routes->post('/vragen/reset', 'KeuzesController::reset');


$routes->get('game', 'GameController::index');
$routes->post('game/setAantalSpelers', 'GameController::setAantalSpelers');
$routes->get('game/keuze', 'GameController::keuze');
$routes->post('game/reset', 'GameController::reset');


$routes->get(
    '/score/(:num)',
    'PizzaPuntController::getRemainingPizzaPoints/$1'
);
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
