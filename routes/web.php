<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\AdminController;

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
Route::get('/', [NewsController::class, 'index'])
    ->name('index');

Route::get('/info', [NewsController::class, 'info'])
    ->name('info');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('/', [AdminController::class, 'index'])
        ->name('admin');
    Route::resource('news', AdminController::class );
});

Route::get('/news/{category}', [NewsController::class, 'category'])
        ->name('news.category');
Route::get('/news/{id}', [NewsController::class, 'show'])
        ->name('news.show');

