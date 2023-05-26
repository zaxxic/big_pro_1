<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use Faker\Guesser\Name;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\TransferController;

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupplierController;
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
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


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
Route::get('/tambah-item',[ItemController::class,'tambahitem'])->Name('item-tambah');
Route::get('pembelian_pemasok', function () {
    return view('pembelian.pembelian_pemasok');
});
Route::get('tambah_pemasok', function () {
    return view('pembelian.pembelian_tambah_pemasok');
});
Route::get('edit_pemasok', function () {
    return view('pembelian_edit_pemasok');
});
Route::get('/add-item',[ItemController::class,'additem'])->Name('item-add');

//perusahaan
Route::get('supplier', [SupplierController::class, 'supplier'])->name('supplier');
Route::get('add_supplier', [SupplierController::class, 'add'])->name('add_supplier');
Route::get('edit_supplier', [SupplierController::class, 'edit'])->name('edit_supplier');

Route::get('icons', function () {
    return view('icons');
});

//transactions
Route::get('/transactions', [TransactionsController::class, 'transactions'])->name('transactions');

Route::get('/add_income', [TransactionsController::class, 'add_income'])->name('add_income');
Route::get('/edit_income', [TransactionsController::class, 'edit_income'])->name('edit_income');
Route::get('/show_income', [TransactionsController::class, 'show_income'])->name('show_income');

Route::get('/add_expenditure', [TransactionsController::class, 'add_expenditure'])->name('add_expenditure');
Route::get('/edit_expenditure', [TransactionsController::class, 'edit_expenditure'])->name('edit_expenditure');
Route::get('/show_expenditure', [TransactionsController::class, 'show_expenditure'])->name('show_expenditure');
//recurring transactions 
Route::get('/recurring_transactions', [TransactionsController::class, 'recurring_transactions'])->name('recurring_transactions');

Route::get('/add_recurring_income', [TransactionsController::class, 'add_recurring_income'])->name('add_recurring_income');
Route::get('/edit_recurring_income', [TransactionsController::class, 'edit_recurring_income'])->name('edit_recurring_income');
Route::get('/show_recurring_income', [TransactionsController::class, 'show_recurring_income'])->name('show_recurring_income');

Route::get('/add_recurring_expenditure', [TransactionsController::class, 'add_recurring_expenditure'])->name('add_recurring_expenditure');
Route::get('/edit_recurring_expenditure', [TransactionsController::class, 'edit_recurring_expenditure'])->name('edit_recurring_expenditure');
Route::get('/show_recurring_expenditure', [TransactionsController::class, 'show_recurring_expenditure'])->name('show_recurring_expenditure');
//invoice
Route::get('invoice', [InvoiceController::class, 'invoice'])->name('invoice');
Route::get('recurring_invoice', [InvoiceController::class, 'recurring_invoice'])->name('recurring_invoice');
Route::get('add_invoice', [InvoiceController::class, 'add_invoice'])->name('add_invoice');

//transaksi
Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');


//transfer
Route::get('/transfer', [TransferController::class, 'transfer'])->name('transfer');

Route::get('/add_transfer', [TransferController::class, 'add_transfer'])->name('add_transfer');
Route::get('/edit_transfer', [TransferController::class, 'edit_transfer'])->name('edit_transfer');
Route::get('/show_transfer', [TransferController::class, 'show_transfer'])->name('show_transfer');

 

Route::get('/laporan',[LaporanController::class, 'laporan'])->name('laporan');
//category
Route::get('/category',[CategoryController::class,'category_index'])->name('index-category');
Route::get('/add-category',[CategoryController::class,'category_add'])->name('add-category');


//laporan
Route::get('/report',[ReportController::class, 'report'])->name('report');

//calendar
Route::get('/calendar',[CalendarController::class, 'calendar'])->name('calendar');

Route::get('impor_pembelian', function () {
    return view('pembelian.pembelian_impor_pemasok');
});
Route::get('transaksi', function () {
    return view('transaksi');
});
//Users
Route::get('/users',[UsersController::class,'usersindex'])->name('users-index');
Route::get('/user-add',[UsersController::class,'usersadd'])->name('users-add');
// Route::get('invoice', )
