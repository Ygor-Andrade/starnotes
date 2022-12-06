<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anotacaos_controller;


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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/principal',[Anotacaos_controller::class, 'get_notas'] )->name('principal');


    Route::post('/gravar', [Anotacaos_Controller::class, 'gravar'])->name('gravar');




});
