<?php

namespace Config;

 // Create a new instance of our RouteCollection class.

 $routes = Services:: routes();

/*Router Setup */

 $routes->setDefaultNamespace('App\Controllers');
 $routes->setDefaultController('Home');
 $routes->setDefaultMethod('index');
 $routes->setTranslateURIDashes (false);
$routes->set404Override();


 $routes->get('/', 'Home::index');
 $routes->get('principal', 'Home::index'); 
 $routes->get('quienes_somos', 'Home::quienes_somos');
 $routes->get('acerca_de', 'Home::acerca_de'); 
 $routes->get('registro', 'Home::registro');
 $routes->get('login', 'Home::login');
 $routes->get('usuario_logueado', 'Home::usuario_logueado');
 $routes->get('catalogo', 'Home::catalogo');


 $routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

$routes->get('/login','login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout','login_controller::logout');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
