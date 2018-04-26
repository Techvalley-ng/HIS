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
/*
Route::get('/user/{code}', function($code){
    return 'my user code: '.$code;
});

*/
//login route for he portal
Route::get('/','Loginprocess@LoginHome');
Route::post('/LoginAuth','Loginprocess@LoginAuth');

//dashboard home page 
Route::get('/Dashboard', 'Dashboard@dashboard');



?>