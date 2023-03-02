<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/inicio', function () {
    return view('inicio');
});
//retorna la vista

Route::get('/form', 'MailController@index');
// ruta al enviar correo
Route::post('/send', 'MailController@send');

// Route::get('/details/{id}', function () {
    // return view('/details');
// });


Auth::routes();



//practica 6

Route::get('/api', 'ProductsController@getApi');
Route::get('/api/{id}', 'ProductsController@getDetailsApi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catalago', 'CatalagoController@listProducts');
Route::get('/modelados', 'CatalagoController@listAccesorios');

Route::get('/inicio', 'InicioController@listProducts');


Route::get('/cart', 'ProductsController@cart');
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('add-cart/{id}', 'ProductsController@addCart');

Route::get('/details_usu/{id}', 'CatalagoController@getDetails');
Route::get('/details_acc/{id}', 'CatalagoController@DetailsAcc');



Route::get('/cstudio', function () {
    return view('cstudio');
});
Route::get('/icheve', function () {
    return view('icheve');
});
Route::get('/rzoo', function () {
    return view('rzoo');
});


Route::get('/', 'InicioController@listProducts');

//Ruta para procesar el pago
Route::post('paypal', 'PaymentController@payWithpaypal');
// Ruta para verificar el estado del pago
Route::get('status', 'PaymentController@getPaymentStatus');

Route::patch('update-cart', 'ProductsController@update');

Route::delete('remove-from-cart', 'ProductsController@remove');

Route::get('/agenda', 'AgendaController@index')->name('agenda');



Route::group(['middleware'=>'admin'], function(){
    Route::get('/create', function () {
        return view('create');
    });

    //Route::post('/create', 'ProductsController@postCreate');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/details/{id}', 'ProductsController@getDetails');
    Route::get('edit/{id}', 'ProductsController@getEdit');
    Route::get('/products', 'ProductsController@listProducts');
    Route::put('edit/{id}', 'ProductsController@putEdit');
    Route::delete('delete/{id}', 'ProductsController@deleteProduct');


    Route::get('/usuarios', ['as' => 'usuarios.index', 'uses' => 'AdminController@index']);
    Route::get('/admins', ['as' => 'admins.admins', 'uses' => 'AdminController@admins']);
    Route::delete('admin/{id}', ['as' => 'admin.activar', 'uses' => 'AdminController@activar']);
    Route::delete('admins/{id}', ['as' => 'usuario.desactivar', 'uses' => 'AdminController@desactivar']);


    Route::get('/products', ['as' => 'producto.index', 'uses' => 'ProductsController@listProducts']);
    Route::get('/in', ['as' => 'producto.inactivos', 'uses' => 'ProductsController@inactivos']);
    Route::post('/create', 'ProductsController@postCreate');
    Route::post('/producto', ['as' => 'producto.store', 'uses' => 'ProductsController@store']);
    Route::get('producto/{id}', ['as' => 'producto.show', 'uses' => 'ProductsController@show']);
    Route::get('/pro/{id}', ['as' => 'producto.edit', 'uses' => 'ProductsController@edit']);
    Route::patch('producto/{id}', ['as' => 'producto.update', 'uses' => 'ProductsController@updates']);
    Route::delete('producto/{id}', ['as' => 'producto.destroy', 'uses' => 'ProductsController@destroy']);
    Route::delete('productos/{id}', ['as' => 'producto.activar', 'uses' => 'ProductsController@activar']);

    Route::get('/cita', ['as' => 'cita.index', 'uses' => 'CitasController@index']);
    Route::get('/inactivas', ['as' => 'cita.inactivas', 'uses' => 'CitasController@inactivas']);
    Route::get('/citas', ['as' => 'cita.nuevo', 'uses' => 'CitasController@create']);
    Route::post('/cita', ['as' => 'cita.store', 'uses' => 'CitasController@store']);
    Route::get('cita/{id}', ['as' => 'cita.show', 'uses' => 'CitasController@show']);
    Route::get('/cita/{id}', ['as' => 'cita.edit', 'uses' => 'CitasController@edit']);
    Route::patch('cita/{id}', ['as' => 'cita.update', 'uses' => 'CitasController@update']);
    Route::delete('cita/{id}', ['as' => 'cita.destroy', 'uses' => 'CitasController@destroy']);
    Route::delete('citas/{id}', ['as' => 'cita.activar', 'uses' => 'CitasController@activar']);

    Route::get('/accesorio', ['as' => 'accesorio.index', 'uses' => 'ProductsController@index']);
    Route::get('/inactivos', ['as' => 'accesorio.inactivos', 'uses' => 'ProductsController@inactivosAccesorios']);
    Route::get('/nuevo', ['as' => 'accesorio.nuevo', 'uses' => 'ProductsController@create']);
    Route::post('/accesorios', ['as' => 'accesorio.store', 'uses' => 'ProductsController@crear']);
    Route::get('{id}', ['as' => 'accesorio.edit', 'uses' => 'ProductsController@editAcc']);
    Route::patch('accesorio/{id}', ['as' => 'accesorio.update', 'uses' => 'ProductsController@updatesAcc']);
    Route::delete('accesorio/{id}', ['as' => 'accesorio.destroy', 'uses' => 'ProductsController@destroyAcc']);
    Route::delete('accesorios/{id}', ['as' => 'accesorio.activar', 'uses' => 'ProductsController@activarAcc']);

//    Route::get('/accesorio', ['as' => 'accesorio.index', 'uses' => 'AccesoriosController@index']);
//    Route::get('/inactivos', ['as' => 'accesorio.inactivos', 'uses' => 'AccesoriosController@inactivos']);
//    Route::get('/nuevo', ['as' => 'accesorio.nuevo', 'uses' => 'AccesoriosController@create']);
//    Route::post('/accesorio','AccesoriosController@store')->name('accesorio.store');
//    Route::get('accesorio/{id}', ['as' => 'accesorio.show', 'uses' => 'AccesoriosController@show']);
//    Route::get('{id}', ['as' => 'accesorio.edit', 'uses' => 'AccesoriosController@edit']);
//    Route::patch('accesorio/{id}', ['as' => 'accesorio.update', 'uses' => 'AccesoriosController@update']);
//    Route::delete('accesorio/{id}', ['as' => 'accesorio.destroy', 'uses' => 'AccesoriosController@destroy']);
//    Route::delete('accesorios/{id}', ['as' => 'accesorio.activar', 'uses' => 'AccesoriosController@activar']);




});