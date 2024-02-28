<?php

use App\Http\Controllers\Formcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('crud');
});

Route::post('/add', [Formcontroller::class,'add']);

Route::get('/list', [Formcontroller::class,'list']);

Route::get('/edit', [Formcontroller::class, 'edit']);

Route::post('/delete', [Formcontroller::class, 'delete']);