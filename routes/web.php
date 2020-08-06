<?php

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
Route::get('/me', function () {
    return ['NIS'=>'3103118106','Nama'=>'Rafif','Gender'=>'Laki-Laki','Phone'=>'085399476020','Kelas' => 'XIIRPL 3'];
});