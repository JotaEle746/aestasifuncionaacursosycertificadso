<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('navigation-menu');
}); */

/* Route::get('/', function () {
    return view('users.index');
}); */

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('certificado', [IndexController::class, 'certificado'])->name('certificados');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
