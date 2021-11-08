<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UsersFreeAdsController;

use App\Http\Controllers\AdController;



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

Route::get('/', function () {
    return view('welcome');
});
//start of registration views
Route::get('/registration', [CustomAuthController::class,'registration']);
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');

//end of registration views

//start of login views
Route::get('/login',[CustomAuthController::class,'login']);
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
//end of login views

//start of UsersFreeAdsController.php Routes
/**
 * this Crud should be only accesible to clients with
 * Admin rights or with value on table of 'is_admin = 1|true|!false
 */
Route::get('/list', [UsersFreeAdsController::class, 'list']);

Route::get('/create',[UsersFreeAdsController::class,  'nuevo']);
//Route::view('/create', 'create');
Route::post('/create',[UsersFreeAdsController::class, 'recreate'])->name('newUser.create');

Route::get('delete/{id}', [UsersFreeAdsController::class, 'delete']);//this works
Route::get('edit/{id}', [UsersFreeAdsController::class, 'showData']);
Route::post('edit', [UsersFreeAdsController::class, 'editData']);
//////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////
/* Route::get('/', [AdController::class, 'index'])->name('index'); */

Route::get('/ads', [AdController::class, 'create'])->name('ad.create');

Route::post('/ads/create', [AdController::class, 'store'])->name('ad.store');
Route::get('/ads-list', [AdController::class, 'list'])->name('ads-list');

Route::get('ads-delete/{id}', [AdController::class, 'delete']);//this works
Route::get('ads-edit/{id}', [AdController::class, 'showData']);
Route::post('ads-edit', [AdController::class, 'editData']);


/////////////////////////////////////////////////////////////////////////////////////////////////
/* use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail; */
/* Route::get('send-mail', function () { 
    $details = [
        'title' => 'Welcome To free-ads.com',
        'body' => "We are glad that you have decided to join us, 
        we expect that you can reach to your public"
];
Mail::to('cristian.romero@epitech.eu')->send(new WelcomeEmail($details)); //dd("Email is Sent.");
return view('auth.login');
}); */