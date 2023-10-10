<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Krisnia Syahwadani 6706223087
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/user', [ProfileController::class, 'index'])->name('user.daftarPengguna');
    Route::patch('/userRegistration', [ProfileController::class, 'create'])->name('user.registrasi');
    Route::delete('/userStore', [ProfileController::class, 'store'])->name('user.storePengguna');
    route::delete('/userView/{user}', [ProfileController::class, 'show'])->name('user.infoPengguna');

    Route::get('/koleksi', [ProfileController::class, 'index'])->name('koleksi.daftarKoleksi');
    Route::patch('/koleksiTmbah', [ProfileController::class, 'create'])->name('koleksi.registrasi');
    Route::delete('/koleksiStore', [ProfileController::class, 'store'])->name('koleksi.storeKoleksi');
    route::delete('/koleksiView/{collection}', [ProfileController::class, 'show'])->name('koleksi.infoKoleksi');
});

require __DIR__.'/auth.php';
