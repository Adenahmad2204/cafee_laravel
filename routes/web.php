<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;



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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
// Route::get( '/kasir/menu', [kasirController::class, 'menu'] );
// Route::get( '/kasir/keranjang', [kasirController::class, 'keranjang'] );
// Route::get( '/kasir/buat', [kasirController::class, 'create'] );
// Route::get( '/kasir/edit', [kasirController::class, 'edit'] );
// Route::get( '/kasir/bayar', [kasirController::class, 'bayar'] );


// Route Admin
// Route::get('/admin/data', [AdminController::class, 'index'])->name('admin.data.index');
// Route::get('/admin/tambah', [AdminController::class, 'create'])->name('admin.data.create');
// Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.data.edit');
Route::get('/menu', function () {
    return view('Manajer.manajerComponent.menu');
});
Route::get('/laporan', function () {
    return view('Manajer.manajerComponent.laporan');
});
Route::resource('/admin/data', AdminController::class);
Route::resource('/manajer', ManajerController::class);
Route::resource('/kasir', OperatorController::class);



// Route Manajer
// Route::get( '/manajer/menu', [manajerController::class, 'menu'] );
// Route::get( '/manajer/data', [manajerController::class, 'data'] );
// Route::get( '/manajer/laporan', [manajerController::class, 'laporan'] );
// Route::get( '/manajer/tambah', [manajerController::class, 'create'] );
// Route::get( '/manajer/edit', [manajerController::class, 'edit'] );
