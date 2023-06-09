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

$routes->add('auth/submitRegister', 'Auth::submitRegister');
$routes->add('auth/check', 'Auth::check');
$routes->add('auth/logout', 'Auth::logout');

$routes->group('', ['filter' => 'AuthCheck'], function ($routes) {

    $routes->get('Product', 'Product::index');

    $routes->get('Product/productItem/(:num)', 'Product::productItem/$1');
    $routes->get('admin/adminproductItem/(:num)', 'Admin::adminproductItem/$1');

    $routes->get('Product/searchProduct', 'Product::searchProduct', ['query' => '']);
    $routes->get('admin/adminsearchProduct', 'Admin::adminsearchProduct', ['query' => '']);

    $routes->post('cart/addItem/(:num)/(:num)', 'Product::addItem/$1/$2');
    $routes->post('cart/deleteItem/(:num)/(:num)', 'Product::deleteItem/$1/$2');

    $routes->get('pages', 'Dashboard::index');
    $routes->get('pages/profile', 'Dashboard::profile');
    $routes->get('pages/cart', 'Dashboard::cart');
    $routes->get('pages/cartfile', 'Dashboard::cartfile');
    $routes->get('pages/history', 'Dashboard::historycart');



    $routes->post('pages/proceed/(:num)', 'Dashboard::generatePDF/$1');
    $routes->get('pages/updateProfile', 'Dashboard::updateProfile');
    $routes->post('pages/submitCart/(:num)', 'Dashboard::submitCart/$1');

    $routes->get('pages/directory', 'Dashboard::directory');

    $routes->post('post/submitComment/(:num)', 'Product::submitComment/$1');
    $routes->post('comment/delete/(:num)', 'Product::delete/$1');
    $routes->post('itemcart/delete/(:num)', 'Product::deleteCart/$1');
    $routes->post('itemscart/delete', 'Product::delete_items');
    $routes->post('Product/addToCart/', 'Product::addToCart/');
    $routes->add('admin', 'Admin::index');

    $routes->add('admin/userProfile', 'Admin::userProfile');
    $routes->add('admin/adminproduct', 'Admin::adminproduct');
    $routes->add('admin/addproduct', 'Admin::adminaddproduct');
    $routes->post('admin/saveProduct', 'Admin::saveProduct');
    $routes->post('pages/updateProfle/(:num)', 'Admin::updateprofile/$1');
    $routes->add('admin/updateproduct/(:num)', 'Admin::adminupdateproduct/$1');
    $routes->add('admin/saveupdateProduct/(:num)', 'Product::saveupdateProduct/$1');
    $routes->add('admin/ViewUser/(:num)', 'Admin::viewusers/$1');
    $routes->add('admin/UpdateUsers/(:num)', 'Admin::updateusers/$1');
    $routes->post('admin/adminUpdateUsers/(:num)', 'Admin::adminupdateusers/$1');
});

$routes->group('', ['filter' => 'AlreadyLoggedInFilter'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->add('auth', 'Auth::index');
    $routes->add('auth/register', 'Auth::register');
    $routes->add('auth/forgotpassword', 'Auth::forgotpassword');
    $routes->post('user/sendResetPasswordEmail', 'Auth::sendResetPasswordEmail');
    $routes->get('user/otp', 'Auth::otp');
});


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
return $routes;
