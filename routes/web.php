<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\LendingFormController;

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
});

Route::get('/about-us', function () {
    return view('Bnker/html/ltr/about-us');
});


// SUBSCRIBE ROUTE
Route::post('/subscribe',[SubscribeController::class, 'subscribe']);

// AUTHENTICATE USER LOG REQUEST & DASHBOARD ROUTE
Route::get('/login', [LoginController::class,'createLogin']);
Route::post('/auth/login', [LoginController::class,'authenticate']);


// AUTHENTICATE USER REGISTER REQUEST & DASHBOARD ROUTE
Route::get('/registration', [RegisterController::class, 'createRegister']);
Route::post('/auth/register',[RegisterController::class, 'authenticate']);

// USER LOGOUT & DESTROY SESSION
Route::post('/logout',[SessionController::class, 'destroy']);

// DASHBOARD ROUTE USER/ADMIN
Route::get('/dashboard', [PortalController::class,'createDashboard']);

// ADMIN PAGE <admin>
Route::get('/lendor-form',[LendingFormController::class,'createLendorForm'])->middleware('admin');
Route::post('/lendor-form-submit',[LendingFormController::class,'lendorFormSubmit'])->name('lendorFormPage')->middleware('admin');
Route::get('/lendor-loan-form-view/{form}',[LendingFormController::class,'lendorFormView'])->name('lendorFormViewPage')->middleware('admin');
Route::post('/lendor-form-update',[LendingFormController::class,'lendorFormUpdate'])->name('lendorFormUpdate')->middleware('admin');
Route::delete('/lendor-form-delete',[LendingFormController::class,'destroy'])->name('lendorFormDelete')->middleware('admin');
Route::get('/lendor-find-borrower',[LendingFormController::class,'lendorFindBorrower'])->name('lendorFindBorrower')->middleware('admin');

// Route::get('/adminAccount',[PortalController::class,'viewAccount'])->name('adminAccount')->middleware('admin');
// Route::get('/adminClients',[PortalController::class,'viewClients'])->name('adminClients')->middleware('admin');


// USER PAGE <user>
Route::get('/borrower-form',[LendingFormController::class,'createBorrowerForm'])->middleware('auth');
Route::post('/borrower-form-submit',[LendingFormController::class,'borrowerFormSubmit'])->name('borrowerFormPage')->middleware('auth');
Route::get('/borrower-loan-form-view/{form}',[LendingFormController::class,'borrowerFormView'])->name('borrowerFormViewPage')->middleware('auth');
Route::post('/borrower-form-update',[LendingFormController::class,'borrowerFormUpdate'])->name('borrowerFormUpdate')->middleware('auth');
Route::delete('/borrower-form-delete',[LendingFormController::class,'destroy'])->name('borrowerFormDelete')->middleware('auth');
Route::get('/borrower-find-lendor',[LendingFormController::class,'borrowerFindBorrower'])->name('borrowerFindLendor')->middleware('auth');

// OTHER PAGE ROUTES
Route::get('/loan-calculations',[LendingFormController::class,'loanCalculationForm'])->name('loanCalculate');



Route::get('Bnker/html/ltr/404.html', function(){
   return abort(404);
});