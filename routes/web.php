<?php

use App\Http\Controllers\AnggotaHadiahController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FirmanEnkripsiController;
use App\Http\Controllers\FirmanHashController;
use App\Http\Controllers\FormInputController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaisController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SessionTestController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorHandlingController;
use App\Http\Controllers\FirmanMailController;
use App\Http\Controllers\PekerjaController;

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

Route::get('halo', function () {
    return "Hallo, Selamat datang di tutorial laravel";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);


Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);

Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);

Route::post('/pegawai/update', [PegawaiController::class, 'update']);

Route::get('pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

Auth::routes();

Route::get('/master', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/input', [FormInputController::class, 'input']);

Route::post('/proses', [FormInputController::class, 'proses']);


Route::get('/pegawais', [PegawaisController::class, 'index']);
Route::get('/pegawais/tambah', [PegawaisController::class, 'tambah']);
Route::post('/pegawais/store', [PegawaisController::class, 'store']);
Route::get('/pegawais/edit/{id}', [PegawaisController::class, 'edit']);
Route::put('/pegawais/update/{id}', [PegawaisController::class, 'update']);
Route::get('/pegawais/hapus/{id}', [PegawaisController::class, 'delete']);


Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'destroy']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikanSemua']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapusPermanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapusPermanenSemua']);

Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/article',[ArticlesController::class, 'index']);

Route::get('/anggota', [AnggotaHadiahController::class, 'index']);

Auth::routes();

//verifikasi email user
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/enkripsi', [FirmanEnkripsiController::class, 'enkripsi']);

Route::get('/data', [FirmanEnkripsiController::class, 'data']);
Route::get('/data/{data_rahasia}', [FirmanEnkripsiController::class, 'dataProses']);

Route::get('/hash', [FirmanHashController::class, 'hash']);

Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'prosesUpload']);
Route::get('/upload/hapus/{id}', [UploadController::class, 'hapus']);

Route::get('/session/tampil', [SessionTestController::class, 'showSession']);
Route::get('/session/buat', [SessionTestController::class, 'createSession']);
Route::get('/session/hapus', [SessionTestController::class, 'destroySession']);

Route::get('/pesan', [NotificationsController::class, 'index']);
Route::get('/pesan/sukses', [NotificationsController::class, 'success']);
Route::get('/pesan/peringatan', [NotificationsController::class, 'warning']);
Route::get('/pesan/gagal', [NotificationsController::class, 'failed']);

Route::get('/error/{nama}',[ErrorHandlingController::class, 'index']);

Route::get('kirimemail', [FirmanMailController::class, 'index']);

Route::get('/pekerja', [PekerjaController::class, 'index']);
Route::get('/pekerja/print_pdf', [PekerjaController::class, 'printPDF']);
