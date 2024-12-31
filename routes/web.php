<?php

use App\Http\Controllers\AsignCtrl;
use App\Http\Controllers\PermissionsCtrl;
use App\Http\Controllers\RolesCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/permissions', PermissionsCtrl::class);
Route::resource('/roles', RolesCtrl::class);
Route::get('/showasinging', [AsignCtrl::class, 'index']);
Route::post('/storerolassing', [AsignCtrl::class, 'store'])->name('storing');
