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

Route::get('/test', ['uses' => "App\StaticsController@test"]);

//Auth::routes();


Route::get('/', ['uses' => "App\StaticsController@showHome"]);
Route::get('/logout', function () {
    if (Auth::check()) {
        Auth::logout();
        return redirect("/");
    }
})->name('logout');

Route::get('/admin/login', ['uses' => "App\AdminController@showLoginAdmin"]);
Route::get('/users/account/display-account/{token}', ['uses' => "App\AccountController@showAccount"]);
Route::get('/login', ['uses' => "Auth\LoginController@showLoginForm"]);
Route::post('/login', ['uses' => "Auth\LoginController@login"]);
//Route::get('/register', ['uses' => "Auth\RegisterController@showRegistrationForm"]);
Route::post('/register', ['uses' => "Auth\RegisterController@register"]);
Route::get('/password/request', ['uses' => "Auth\ForgotPasswordController@showLinkRequestForm"]);
Route::post('/password/request', ['uses' => "App\AccountController@sendRequestLink"]);



//FILES
Route::prefix('/file')->group(function () {
    
    Route::get('/create', ["uses" => "App\Files\FilesController@create"]);
    Route::get('/account', ["uses" => "App\Files\FilesController@showUserFile"]);
    Route::get('/{filename}', ["uses" => "App\Files\FilesController@showAFile"])->where('filename', '^[^/]+$');
    Route::post('/', ["uses" => "App\Files\FilesController@postFile"]);
    Route::get('/get/{token}/{password}', 'Admin\FileController@downloadFile');
});
//Example de route

//USER
Route::get('/account/user/{id}/password', ['uses' => "App\User\UserController@c"]);



