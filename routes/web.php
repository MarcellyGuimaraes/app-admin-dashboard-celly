<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//
//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
Route::get('/', function () {
    return Inertia::render('Layout', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
    ]);
});

//Route::get('/dashboard', function () {
//    return Inertia::render('Index');
//})->middleware(['auth', 'verified', 'role:admin|user'])->name('dashboard');

//Route::get('/dashboard', function () {
//    return Inertia::render('Index');
//})->middleware([])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/vaca', function () {
//    $soma = 2+2;
//    $coisas = [
//       'nome'=> $soma
//    ];
//
//    return Inertia::render('Vaca', $coisas);
//});

//Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
//    Route::get('/dashboard', function () {
////        return Inertia::render('Dashboard');
//        return 'autenticado dashboard';
//    })->name('dashboard');
//});
