<?php

use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DatabaseBackupController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\ProductoController;
require __DIR__ . '/auth.php';

Route::get('/', function () {
    return to_route('login');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    // menu
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard.index');
    Route::get('clientes', [HomeController::class, 'clientes'])->name('dashboard.Clientes');
    Route::get('cotizacion', [HomeController::class, 'cotizacion'])->name('dashboard.Cotizacion');
    Route::get('inventario', [HomeController::class, 'inventario'])->name('dashboard.Inventario');
    Route::get('nota', [HomeController::class, 'nota'])->name('dashboard.Nota');
    Route::get('orden_compra', [HomeController::class, 'orden_compra'])->name('dashboard.Orden_compra');
    Route::get('Proveedores', [HomeController::class, 'proveedores'])->name('dashboard.Proveedores');
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard.index');
    Route::get('ini_cotizacion', [HomeController::class, 'ini_cotizacion'])->name('dashboard.Ini_cotizacion');
    Route::get('ver_producto', [HomeController::class, 'ver_producto'])->name('dashboard.Ver_producto');
    Route::get('Certificado_calidad', [HomeController::class, 'certificado_calidad'])->name('dashboard.Certificado_calidad');
    // Productos table
    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

    Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');


    // Locale
    Route::get('setlocale/{locale}', SetLocaleController::class)->name('setlocale');

    // User
    Route::resource('users', UserController::class);
    // Permission
    Route::resource('permissions', PermissionController::class)->except(['show']);
    // Roles
    Route::resource('roles', RoleController::class);
    // Profiles
    Route::resource('profiles', ProfileController::class)->only(['index', 'update'])->parameter('profiles', 'user');
    // Env
    Route::singleton('general-settings', GeneralSettingController::class);
    Route::post('general-settings-logo', [GeneralSettingController::class, 'logoUpdate'])->name('general-settings.logo');

    // Database Backup
    Route::resource('database-backups', DatabaseBackupController::class);
    Route::get('database-backups-download/{fileName}', [DatabaseBackupController::class, 'databaseBackupDownload'])->name('database-backups.download');
});
