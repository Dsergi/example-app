<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NewsController extends Controller
{
    protected $category_data =
            [
                'Trend' => 'Тренды',
                'Economic' =>'Экономика',
                'Sport' =>'Спорт'];
    protected $news_data = [
        'Trend'=> [
            '1' => [
                'category'=> 'Тренды',
                'title' => 'Te irure',
                'short_desk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.',
                'img_url' => 'https://via.placeholder.com/200'],
            '2' => [
                'category'=> 'Тренды',
                'title' => 'Lorem ipsum dolor',
                'short_desk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img_url' => 'https://via.placeholder.com/200']
            ],
        'Economic'=> [
            '3' => [
                'category'=> 'Экономика',
                'title' => 'Duis aute irure',
                'short_desk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.',
                'img_url' => 'https://via.placeholder.com/200'
            ],
            '4' => [
                'category'=> 'Экономика',
                'title' => 'Aute irure',
                'short_desk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img_url' => 'https://via.placeholder.com/200']
        ],
        'Sport' => [
            '5' => [
                'category'=> 'Спорт',
                'title' => 'Is aute irure',
                'short_desk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.',
                'img_url' => 'https://via.placeholder.com/200'],
            '6' => [
                'category'=> 'Спорт',
                'title' => 'Ipsum dolor',
                'short_desk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img_url' => 'https://via.placeholder.com/200']]
    ];

    public function index()
    {
        return view('news.index', ['category_data' => $this->category_data]);
    }
    public function category($category)
    {
        return view('news.category', ['news_data' => $this->news_data[$category]]);
    }
    public function show($news_data,$keySearch)
    {
        foreach ($news_data as $key => $news) {
            if ($key == $keySearch) {
                return view('news.show', ['news' => $news_data[$keySearch]]);
            } elseif (is_array($news) && findKey($news, $keySearch)) {
                return view('news.show', ['news' => $news_data[$keySearch]]);
            }
        }
        return false;

    }
    public function info()
    {
        return view('news.info');
    }
}
