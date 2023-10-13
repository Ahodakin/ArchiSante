<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\Patientcontroller;
Use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


#### URl CRUD ####
Route::prefix('dossier')->name('patient.')->group(function () {

    Route::resource('patient', Patientcontroller::class);
});

Route::prefix('dossier')->name('consultation.')->group(function () {

    Route::resource('consultation', ConsultationController::class);
});

// Route::get('', [::class, 'create'])->name('consultation');
#### Protégées Mes Routes ####
// Route::middleware(['auth'])->group(function () {
//     Route::get('patient', [HomeController::class, 'patient'])->name('patient');
//     Route::get('about', [HomeController::class, 'about'])->name('about');
//     Route::get('liste', [HomeController::class, 'liste'])->name('liste');
// } );


#### Method POST auth ####
Route::post('login', [AuthController::class, 'loginpost'])->name('loginform');
Route::post('signup', [AuthController::class, 'registerpost'])->name('signup');


#### Method GET auth ####
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('signup', [AuthController::class, 'signup'])->name('signup');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

#### Method GET ####
Route::get('dossier', [HomeController::class, 'dossier'])->name('dossier');
Route::get('appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('ordonnance', [HomeController::class, 'ordonnance'])->name('ordonnance');

Route::get('donner', [HomeController::class, 'donner'])->name('donner');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');