<?php

use App\Http\Controllers\PermissionsCtrl;
use App\Http\Controllers\RolesCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/permissions', PermissionsCtrl::class);
Route::resource('/roles', RolesCtrl::class);
