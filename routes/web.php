<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/',[LoginController::class,'login'])->name('login');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'register_post']);
Route::post('/',[LoginController::class,'login_post']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

// ----- KASiR START -----
// Dashboard
Route::get('/dashboard', function () {
    return view('kasir.pages.MenuUtama.dashboard');
});

// Kartu Stock
Route::get('/kartu_stok', function () {
    return view('kasir.pages.kartu_stok.kartustok');
});



// ----- ADMIN START -----
// Table Role
Route::get('/admin/tabelrole', [RoleController::class, 'index'])->name('role.index');
Route::get('/admin/roles/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/admin/roles/store', [RoleController::class, 'store'])->name('role.store');
Route::get('/admin/roles/{id}', [RoleController::class, 'show']);
Route::get('/admin/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/admin/edit/{id}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/admin/roles/{id}/delete', [RoleController::class, 'destroy'])->name('role.delete');
Route::get('/admin/role/trash',[RoleController::class,'trash'])->name('role.trash');
Route::put('/admin/role/restore/{id}',[RoleController::class,'restore'])->name('role.restore');

//Table Vendor
Route::get('/admin/tabelvendor', [VendorController::class, 'index'])->name('vendor.index');
Route::get('/admin/vendors/create', [VendorController::class, 'create'])->name('vendor.create');
Route::post('/admin/vendors/store', [VendorController::class, 'store'])->name('vendor.store');
Route::get('/admin/vendors/{id}', [VendorController::class, 'show']);
Route::get('/admin/editv/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
Route::put('/admin/editv/{id}', [VendorController::class, 'update'])->name('vendor.update');
Route::delete('/admin/vendors/{id}/delete', [VendorController::class, 'destroy'])->name('vendor.delete');
Route::get('/admin/vendor/trash', [VendorController::class,'trash'])->name('vendor.trash');
Route::put('/admin/vendor/restore/{id}', [VendorController::class,'restore'])->name('vendor.restore');

//Table User
Route::get('/admin/tabeluser', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/admin/users/{id}', [UserController::class, 'show']);
Route::get('/admin/editu/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/admin/editu/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/admin/users/{id}/delete', [UserController::class, 'destroy'])->name('user.delete');
Route::get('/admin/user/trash', [UserController::class,'trash'])->name('user.trash');
Route::put('/admin/user/restore/{id}', [UserController::class,'restore'])->name('user.restore');

//Table Satuan
Route::get('/admin/tabelsatuan', [SatuanController::class, 'index'])->name('satuan.index');
Route::get('/admin/satuans/create', [SatuanController::class, 'create'])->name('satuan.create');
Route::post('/admin/satuans/store', [SatuanController::class, 'store'])->name('satuan.store');
Route::get('/admin/satuans/{id}', [SatuanController::class, 'show']);
Route::get('/admin/edits/{id}', [SatuanController::class, 'edit'])->name('satuan.edit');
Route::put('/admin/edits/{id}', [SatuanController::class, 'update'])->name('satuan.update');
Route::delete('/admin/satuans/{id}/delete', [SatuanController::class, 'destroy'])->name('satuan.delete');
Route::get('/admin/satuan/trash', [SatuanController::class,'trash'])->name('satuan.trash');
Route::put('/admin/satuan/restore/{id}', [SatuanController::class,'restore'])->name('satuan.restore');

//Table Barang
Route::get('/admin/tabelbarang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/admin/barangs/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/admin/barangs/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/admin/barangs/{id}', [BarangController::class, 'show']);
Route::get('/admin/editb/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/admin/editb/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/admin/barangs/{id}/delete', [BarangController::class, 'destroy'])->name('barang.delete');
Route::get('/admin/barang/trash', [BarangController::class,'trash'])->name('barang.trash');
Route::put('/admin/barang/restore/{id}', [BarangController::class,'restore'])->name('barang.restore');

// Pengadaan
Route::get('/pengadaan', [PengadaanController::class, 'index'])->name('pengadaan.index');
Route::get('/tabelpengadaan', [PengadaanController::class, 'create'])->name('');

// Penerimaan
Route::get('/penerimaan', function () {
    return view('admin.pages.penerimaan.caribarang');
});
Route::get('/tabelpenerimaan', function () {
    return view('admin.pages.penerimaan.tabelpenerimaan');
});

// Retur
Route::get('/retur', function () {
    return view('admin.pages.retur.caribarang');
});
Route::get('/tabelretur', function () {
    return view('admin.pages.retur.tabelretur');
});


// ----- ADMIN END