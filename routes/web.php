<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\LoginLogController;

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
    return redirect('/login');
});

// Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard.home', [
        'title' => 'Dashboard'
    ]); 
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/antrian', [DashboardController::class, 'index'])->middleware('ispasien');
Route::post('/antrian', [DashboardController::class, 'queue'])->middleware('isadmin');
Route::post('/ambilAntrian', [DashboardController::class, 'ambilAntrian'])->middleware('ispasien');

Route::get('/categories/checkSlug', [CategoryController::class, 'checkSlug'])->middleware('isfarmasi');
Route::resource('categories', CategoryController::class)->middleware('isfarmasi');

// Route::get('/medicines/checkSlug', [MedicineController::class, 'checkSlug'])->middleware('isfarmasi');
Route::resource('/medicines', MedicineController::class)->middleware('isfarmasi');
Route::get('/medicines/{medicine:id}/stock', [MedicineController::class, 'stock'])->middleware('isfarmasi');
Route::put('/medicines/{medicine:id}/stock', [MedicineController::class, 'updateStock'])->middleware('isfarmasi');

Route::get('/level/checkSlug', [LevelController::class, 'checkSlug'])->middleware('isadmin');
Route::resource('/level', LevelController::class)->middleware('isadmin');

Route::resource('/records', RecordController::class)->middleware('isdokterpasien');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/updateprofile', [ProfileController::class, 'update'])->middleware('auth');


// Route::resource('/pasien', PasienController::class)->middleware('isdokter');
Route::resource('/pasien', PasienController::class)->except([
    'show', 'destroy', 'edit', 'update'
])->middleware('isdokter');
// Detail
Route::get('/pasien/{biodata:id}', [PasienController::class, 'show'])->middleware('isdokter');
// Edit
Route::get('/pasien/{biodata:id}/edit', [PasienController::class, 'edit'])->middleware('isdokter');
// Delete
Route::delete('/pasien/{biodata:id}', [PasienController::class, 'destroy'])->middleware('isdokter');
// Update
Route::put('/pasien/{biodata:id}', [PasienController::class, 'update'])->middleware('isdokter');



Route::get('/report', [ReportController::class, 'index'])->middleware('iskasi');
Route::post('/report', [ReportController::class, 'print'])->middleware('iskasi');

Route::resource('/user', UserController::class)->middleware('isadmin');
Route::put('/userBio/{user:id}', [UserController::class, 'updateBio'])->middleware('isadmin');
Route::get('user/{user:id}/password', [UserController::class, 'editPassword'])->middleware('isadmin');
Route::put('user/{user:id}/password', [UserController::class, 'updatePassword'])->middleware('isadmin');
// Route::get('/user', [UserController::class, 'index'])->middleware('isadmin');
// Route::get('/user/create', [UserController::class, 'create'])->middleware('isadmin');
// Route::get('/user/{id}/edit', [UserController::class, 'edit'])->middleware('isadmin');

Route::get('/loginlog', [LoginController::class, 'LoginLog'])->middleware('isadmin');
Route::post('change-password', [LoginController::class, 'changePassword'])->middleware('auth');
