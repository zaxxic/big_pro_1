<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use Faker\Guesser\Name;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\AccountController;

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\EditEmailController;
use App\Http\Controllers\Show_reportController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TaxController;
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
Route::get('register', function () {
    return view('register');
});
Route::get('reset_password', function () {
    return view('reset_password');
});
Route::get('/itemindex',[ItemController::class,'itemindex'])->Name('item-index');
Route::get('/tambah-item',[ItemController::class,'tambahitem'])->Name('item-tambah');

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

//selling
Route::get('invoice', [InvoiceController::class, 'invoice'])->name('invoice');
Route::get('recurring_invoice', [InvoiceController::class, 'recurring_invoice'])->name('recurring_invoice');
Route::get('add_invoice', [InvoiceController::class, 'add_invoice'])->name('add_invoice');
Route::get('detail_rcr', [InvoiceController::class, 'detail_recurring'])->name('detail_rcr');
//cos
Route::get('add_costumers', [CostumersController::class, 'add_cos'])->name('add_costumers');
Route::get('costumer', [CostumersController::class, 'costumers'])->name('costumers');
Route::get('show_cos', [CostumersController::class, 'show_cos'])->name('show_cos');
Route::get('edit_cos', [CostumersController::class, 'edit_cos'])->name('edit_cos');
Route::get('costumer', [InvoiceController::class, 'costumers'])->name('costumers');
Route::get('add_costumers', [InvoiceController::class, 'add_cos'])->name('add_costumers');
Route::get('details', [InvoiceController::class, 'details'])->name('details');
Route::get('costumer', [InvoiceController::class, 'costumers'])->name('costumers');
Route::get('add_costumers', [InvoiceController::class, 'add_cos'])->name('add_costumers');
Route::get('/setting-invoice',[InvoiceController::class,'setting_invoice'])->name('setting-invoice');

//role
Route::get('/role', [RoleController::class, 'index'])->name('role');

Route::get('/add_role', [RoleController::class, 'add_role'])->name('add_role');
Route::get('/edit_role', [RoleController::class, 'edit_role'])->name('edit_role');

//transaksi
Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');

//company
Route::get('/company',[CompanyController::class,'company'])->name('company');
//transfer
Route::get('/transfer', [TransferController::class, 'transfer'])->name('transfer');


Route::get('/add_transfer', [TransferController::class, 'add_transfer'])->name('add_transfer');
Route::get('/edit_transfer', [TransferController::class, 'edit_transfer'])->name('edit_transfer');
Route::get('/show_transfer', [TransferController::class, 'show_transfer'])->name('show_transfer');

//account
Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::get('/add_account', [AccountController::class, 'add_account'])->name('add_account');
Route::get('/edit_account', [AccountController::class, 'edit_account'])->name('edit_account');
Route::get('/show_account1', [AccountController::class, 'show_account1'])->name('show_account1');
Route::get('/show_account2', [AccountController::class, 'show_account2'])->name('show_account2');

    // return view('pembelian.pembelian_edit_pemasok');

 

Route::get('/laporan',[LaporanController::class, 'laporan'])->name('laporan');
//category
Route::get('/category',[CategoryController::class,'category_index'])->name('index-category');
Route::get('/add-category',[CategoryController::class,'category_add'])->name('add-category');


//laporan
Route::get('/report',[ReportController::class, 'report'])->name('report');
Route::get('/show_report',[Show_reportController::class, 'show_report'])->name('show_report');

//calendar
Route::get('/calendar',[CalendarController::class, 'calendar'])->name('calendar');

//EditEmail
Route::get('/editemail',[EditEmailController::class, 'editemail'])->name('editemail');

//cobaaaaaa
Route::get('impor_pembelian', function () {
    return view('pembelian.pembelian_impor_pemasok');
});
Route::get('transaksi', function () {
    return view('transaksi');
});
//Users
Route::get('/users',[UsersController::class,'usersindex'])->name('users-index');
Route::get('/add_users',[UsersController::class,'add_users'])->name('add_users');
// Route::get('invoice', )
//Tax
Route::get('/tax',[TaxController::class,'tax_index'])->name('tax');
Route::get('/add-tax',[TaxController::class,'tax_add'])->name('tax-add');
//currency
Route::get('/currency',[CurrencyController::class,'currency_index'])->name('currency');
Route::get('/add-currency',[CurrencyController::class,'currency_add'])->name('currency-add');
