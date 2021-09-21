<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\studycontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\saranacontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\commentcontroller;


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

Route::get('/', [homecontroller::class, 'index']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [Studycontroller::class, 'mi']);
    Route::get('/teknik-informatika', [Studycontroller::class, 'ti']);
});

Route::get('/news/{id}', [newscontroller::class, 'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [saranacontroller::class, 'kantor']);
    Route::get('/laboratorium', [saranacontroller::class, 'lab']);
    Route::get('/kelas', [saranacontroller::class, 'kelas']);
    Route::get('/lainnya', [saranacontroller::class, 'lain']);
});

Route::get('/about', [aboutcontroller::class, 'about']);

Route::get('/comment/{nama}/{pesan}', [commentcontroller::class, 'comment']);