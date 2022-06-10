<?php

use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PemilikKosController;
use App\Http\Controllers\PencariKosController;
use App\Http\Controllers\RegisIndekosanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\UpdateMultiForm;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('Page.Login_Page.sign_up');
// });

Route::get('/symlink', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});

// LOGIN ROUTES
Route::get('/login', [UserController::class, 'IndexLogin'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'Authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

// PASSWORD PAGES
Route::get('/password/forgot-password', [UserController::class, 'IndexForgotPassword']);
Route::get('/password/change-password', [UserController::class, 'IndexChangePassword']);
Route::get('/password/success-change-password', [UserController::class, 'IndexSuccessChangePassword']);

// REGIS ROUTES
Route::get('/register', [UserController::class, 'IndexSignup'])->middleware('guest');
Route::post('/register', [UserController::class, 'store']);
Route::get('/check-email', [UserController::class, 'IndexCheckEmail']);
Route::get('/verification', [UserController::class, 'verification']);


// PEMILIK KOS
Route::middleware(['isPemilik', 'auth'])->group(function () {
    Route::get('/pemilik-kos/homepage', [PemilikKosController::class, 'index'])->name('HomepagePemilikKos');
    Route::get('/pemilik-kos/detail-kos/{data_indekosan}', [PemilikKosController::class, 'show']);
    Route::get('/pemilik-kos/data-kos/{data_indekosan}', [PemilikKosController::class, 'showDataKos']);
    Route::delete('/pemilik-kos/data-kos/penghuni/{data_indekosan}', [PemilikKosController::class, 'hapusPenghuni']);

    Route::delete('/pemilik-kos/data-kos/{data_indekosan}', [PemilikKosController::class, 'deleteDataKos']);
    Route::get('/pendaftaran-indekos', function () {
        return view('Layout.livewire_layout');
    });
    Route::get('/pendaftaran-indekos/edit/{data_indekosan}', function ($data_indekosan) {
        return view('Layout.livewireUpdate', compact('data_indekosan'));
    });

    Route::get('/pemilik-kos/profile', [PemilikKosController::class, 'profile']);
    Route::get('/pemilik-kos/profile/edit/{data}', [PemilikKosController::class, 'editProfile']);
    Route::put('/pemilik-kos/profile/edit', [PemilikKosController::class, 'updateProfile']);
    Route::delete('/pemilik-kos/profile/{data}', [PemilikKosController::class, 'destroyProfile']);

    Route::get('/pemilik-kos/data-pemesanan/{data_indekosan}', [PemesananController::class, 'indexPemilik']);

    Route::get('/pemilik-kos/konfirmasi-booking/{data_pemesanan}', [PemesananController::class, 'konfirmasiPemilik']);
    Route::get('/pemilik-kos/booking/menerima/{data}', [PemesananController::class, 'pemilikMenerima']);
    Route::get('/pemilik-kos/booking/menolak/{data}', [PemesananController::class, 'pemilikMenolak']);
    Route::post('/pemilik-kos/penolakan-booking/{data}', [PemesananController::class, 'inputPemilikMenolak']);
    Route::get('/pemilik-kos/booking/konfirmasi-pembayaran/{data}', [PemesananController::class, 'konfirmasiPembayaran']);
    Route::get('/pemilik-kos/booking/menerimaPembayaran/{data}', [PemesananController::class, 'menerimaPembayaran']);
});

Route::get('/', [PencariKosController::class, 'index'])->name('HomepagePencariKos');
Route::get('/pencari-kos/detail-kos/{data_indekosan}', [PencariKosController::class, 'show']);
Route::get('/pencari-kos/list', [PencariKosController::class, 'list']);
Route::get('/pencari-kos/list/filter', [PencariKosController::class, 'filter']);
// PENCARI KOS
Route::middleware(['isPencari', 'auth'])->group(function () {
    // profile page
    Route::get('/pencari-kos/profile', [PencariKosController::class, 'profile']);
    Route::get('/pencari-kos/profile/edit/{data}', [PencariKosController::class, 'editProfile']);
    Route::put('/pencari-kos/profile/edit', [PencariKosController::class, 'updateProfile']);
    Route::delete('/pencari-kos/profile/{data}', [PencariKosController::class, 'destroyProfile']);

    // booking page
    Route::get('/pencari-kos/booking/{data}', [PemesananController::class, 'index']);
    Route::post('/pencari-kos/booking', [PemesananController::class, 'input']);
    // Route::get('/pencari-kos/booking/pemesanan', [PemesananController::class, 'booking']);
    Route::get('/pencari-kos/booking/menunggu/{data}', [PemesananController::class, 'waiting']);
    Route::get('/pencari-kos/booking/pembayaran/{data}', [PemesananController::class, 'booking']);
    Route::get('/pencari-kos/booking/penolakan/{data}', [PemesananController::class, 'pencariMenolak']);
    Route::get('/pencari-kos/chat/{data}', [PemesananController::class, 'whatsappPencari']);
});

// DAFTAR KOS PAGE
    // Route::get('/pendaftaran-indekos/edit/{data_indekosan}', 'UpdateMultiForm')->layout('Layout.livewire_layout');
    // Route::get('/pendaftaran-indekos/edit/{data_indekosan}', function () {
    //     return view('Layout.livewire_layout');
    // });
    // Route::get('/pendaftaran-indekos/edit/{data_indekosan}', function () {
    //     return view('Layout.livewireUpdate',);
    // });