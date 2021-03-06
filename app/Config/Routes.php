<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Admin');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Admin::index');
$routes->post('/config','Config::save');
$routes->group('user',function($routes){
	$routes->add('role','User::role');
	$routes->post('role','User::role_edit_save');
	$routes->post('role/(:num)','User::role_edit_save/$1');
	$routes->add('role/detail/(:num)','User::role_detail/$1');
	$routes->post('role/multi_delete','User::role_multi_delete');
	// $routes->delete('role/delete','User::role_delete');
	$routes->add('role/delete/(:num)','User::role_delete/$1');
});

$routes->add('menu','Menu::index');
$routes->add('menu/delete/(:num)','Menu::menu_delete/$1');
$routes->add('menu/detail/(:num)','Menu::detail/$1');
$routes->post('menu/multi_delete/','Menu::menu_multi_delete');
$routes->post('menu','Menu::menu_save');
$routes->post('menu/(:num)','Menu::menu_save/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
