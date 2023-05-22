<?php


use App\Http\Controllers\ItemController;
use Faker\Guesser\Name;
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

Route::get('kalender', function () {
    return view('kalender');
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
Route::get('/itemindex',[ItemController::class,'itemindex'])->Name('item-index');
Route::get('/tambah-item',[ItemController::class,'tambahitem'])->Name('item-tambah  ');
Route::get('pembelian_pemasok', function () {
    return view('pembelian.pembelian_pemasok');
});
Route::get('tambah_pemasok', function () {
    return view('pembelian.pembelian_tambah_pemasok');
});
Route::get('edit_pemasok', function () {
    return view('pembelian.pembelian_edit_pemasok');
});
