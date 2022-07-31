<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\DataserviceController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\JenisController;

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
    return view('utama');


});

Auth::routes(['register' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

//User
Route::get('/utama', [UtamaController::class, 'utama'])->name('utama');
Route::get('/service', [ServiceController::class, 'service'])->name('user.service');
Route::post('/service', [ServiceController::class, 'store'])->name('user.service.store');
Route::get('/konsumenservice', [ServiceController::class, 'konsumen'])->name('user.konsumenservice');
Route::get('/jadwalservice', [ServiceController::class, 'jadwalservice'])->name('user.jadwalservice');
Route::get('/contact', [ServiceController::class, 'contact'])->name('user.contact');
Route::get('/selesaiservice', [ServiceController::class, 'selesai'])->name('user.selesaiservice');


//Admin
Route::get('/dataservice', [DataserviceController::class, 'dataservice'])->name('admin.dataservice');
Route::get('/datakonsumen1', [DataserviceController::class, 'datakonsumen1'])->name('admin.datakonsumen1');
Route::get('/cetak', [DataserviceController::class, 'cetak'])->name('admin.input1.cetak');
Route::get('/createkonsumen', [DataserviceController::class, 'create'])->name('admin.input1.createkonsumen');
Route::post('/createkonsumen', [DataserviceController::class, 'store'])->name('admin.input1.createkonsumen.store');
Route::get('/edit/{dataservice}', [DataserviceController::class, 'edit'])->name('admin.input1.edit');
Route::post('/update', [DataserviceController::class, 'update'])->name('admin.input1.edit.update');
Route::delete('/createkonsumen/{service}', [DataserviceController::class, 'destroy'])->name('admin.input1.createkonsumen.delete');

Route::get('/createjadwal', [JadwalController::class, 'createjadwal'])->name('admin.input2.createjadwal');
Route::post('/createjadwal', [JadwalController::class, 'store'])->name('admin.input2.createjadwal.store');
Route::get('/jadwaladmin', [JadwalController::class, 'jadwaladmin'])->name('admin.jadwaladmin');
Route::get('/show', [JadwalController::class, 'show'])->name('admin.input2.show');
Route::get('/editjadwal/{jadwal}', [JadwalController::class, 'editjadwal'])->name('admin.input2.editjadwal');
Route::patch('/editjadwal/{id}', [JadwalController::class, 'update'])->name('admin.input2.editjadwal.update');
Route::delete('/show/{jadwal}', [JadwalController::class, 'destroy'])->name('admin.input2.show.delete');

Route::get('/createjenis', [JenisController::class, 'createjenis'])->name('admin.input3.createjenis');
Route::post('/createjenis', [JenisController::class, 'store'])->name('admin.input3.createjenis.store');
Route::get('/showjenis', [JenisController::class, 'showjenis'])->name('admin.input3.showjenis');
Route::get('/editjenis/{jenis}', [JenisController::class, 'editjenis'])->name('admin.input3.editjenis');
Route::patch('/update/{id}', [JenisController::class, 'update'])->name('admin.input3.editjenis.update');
Route::delete('/showjenis/{jenis}', [JenisController::class, 'destroy'])->name('admin.input3.showjenis.delete');
