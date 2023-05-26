<?php

use App\Http\Controllers\CompanyController;


use App\Http\Controllers\ItemController;
use Faker\Guesser\Name;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransferController;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\EditEmailController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Show_reportController;
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
*/

Route::get('/', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('reset_password', function () {
    return view('reset_password');
});
//Item
Route::get('/itemindex',[ItemController::class,'itemindex'])->Name('item-index');
Route::get('/add-item',[ItemController::class,'additem'])->Name('item-add');

//perusahaan
Route::get('/perusahaan',[CompanyController::class,'Perusahaan'])->Name('perusahaan-index');

Route::get('pembelian_pemasok', function () {
    return view('pembelian.pembelian_pemasok');
});
Route::get('tambah_pemasok', function () {
    return view('pembelian.pembelian_tambah_pemasok');
});
Route::get('edit_pemasok', function () {
    return view('pembelian_edit_pemasok');
});

Route::get('icons', function () {
    return view('icons');
});

//transaksi
Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');

Route::get('/add_pendapatan', [TransaksiController::class, 'add_pendapatan'])->name('add_pendapatan');
//transaksi berulang
Route::get('/transaksi_berulang', [TransaksiController::class, 'transaksi_berulang'])->name('transaksi_berulang');

//transfer
Route::get('/transfer', [TransferController::class, 'transfer'])->name('transfer');





//laporan
Route::get('/report',[ReportController::class, 'report'])->name('report');
Route::get('/show_report',[Show_reportController::class, 'show_report'])->name('show_report');

//calendar
Route::get('/calendar',[CalendarController::class, 'calendar'])->name('calendar');

//EditEmail
Route::get('/editemail',[EditEmailController::class, 'editemail'])->name('editemail');

//cobaaaaaa
Route::get('/dashboard', [ChartController::class, 'showChart'])->name('dashboard');
