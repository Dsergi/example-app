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

Route::get('/', function () {
    $title = "<h1>Привет! Это главная страница о новостях!</h1>";
    $title .= "<a href='/news'>К новостям</a><br>";
    $title .= "<a href='/info'>Информация о проекте</a>";
    echo $title;
});

Route::get('/info', function () {
    $title = "<h1>Информации о проекте</h1>";
    $info = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
    $back = "<a href='/'>На главную</a>";
    echo $title . $info . $back;
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::resource('news', AdminController::class );
});
Route::group(['prefix' => 'news', 'as' => 'news.'], function (){
    Route::get('/', [NewsController::class, 'index'])
       ->name('.index');
    Route::get('/category/{category}', [NewsController::class, 'category'])
        ->name('category');
    Route::get('/category/{id}', [NewsController::class, 'show'])
        ->name('show');

});
