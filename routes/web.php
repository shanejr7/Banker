<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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
    return view('Bnker/html/ltr/index');
})->middleware('guest');



// AUTHENTICATE USER LOG REQUEST & DASHBOARD ROUTE
Route::get('/login', [LoginController::class,'createLogin']);
Route::post('/auth/login', [LoginController::class,'authenticate']);


// AUTHENTICATE USER REGISTER REQUEST & DASHBOARD ROUTE
Route::get('/registration', [RegisterController::class, 'createRegister']);
Route::post('/auth/register',[RegisterController::class, 'authenticate']);

// USER LOGOUT & DESTROY SESSION
Route::post('/logout',[SessionController::class, 'destroy']);


// ADMIN PAGE <admin>
Route::get('/admin',[PortalController::class,'createAdmin'])->middleware('admin');
Route::get('/adminAccount',[PortalController::class,'viewAccount'])->name('adminAccount')->middleware('admin');
Route::get('/adminClients',[PortalController::class,'viewClients'])->name('adminClients')->middleware('admin');


// USER PAGE <admin-user>
Route::get('/dashboard', [PortalController::class,'createDashboard']);
Route::get('/account', [PortalController::class,'createAccount']);
Route::get('/ClientPortal', [PortalController::class,'createClientPortal']);


Route::get('Bnker/html/ltr/404.html', function(){
   return abort(404);
});