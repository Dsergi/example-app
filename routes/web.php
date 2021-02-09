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
    $title = "<h1>Привет, пользователь! Это главная страница!</h1>";
    echo $title;
});


Route::get('/info', function () {

    $title = "<h1>Информации о проекте</h1>";
    $info = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
    echo $title . $info;
});

Route::get('/news', function () {

    $title = "<h1>Последние новости</h1>";

    $news_data = [
        [
            'title' => 'Lorem ipsum dolor',
            'short_desk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'url' => '#',
            'img_url' => 'https://via.placeholder.com/300'
        ],
        [
            'title' => 'Duis aute irure dolor in reprehenderit in voluptate',
            'short_desk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'url' => '#',
            'img_url' => 'https://via.placeholder.com/300'
        ]
    ];

    $news_sections = "<section>";

    foreach ($news_data as $item) {
        $news_sections .= "<a href='" . $item['url'] . "'>";
        $news_sections .= "<img src='" . $item['img_url'] . "'>";
        $news_sections .= "<h4>" . $item['title'] . "</h4>";
        $news_sections .= "<p>" . $item['short_desk'] . "</p>";
        $news_sections .= "</a>";
    }

    $news_sections .= "</section>";

    echo $title . $news_sections;
});

