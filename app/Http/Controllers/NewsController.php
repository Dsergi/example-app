<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NewsController extends Controller
{
    protected $category_data =
            ['Тренды',
            'Экономика',
            'Спорт'];
    protected $news_data = [
        'Тренды'=> [
            [
                'category'=> 'Тренды',
                'title' => 'Te irure',
                'short_desk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.',
                'img_url' => 'https://via.placeholder.com/200'],
            [
                'category'=> 'Тренды',
                'title' => 'Lorem ipsum dolor',
                'short_desk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img_url' => 'https://via.placeholder.com/200']
            ],
        'Экономика'=> [
            [
                'category'=> 'Экономика',
                'title' => 'Duis aute irure',
                'short_desk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.',
                'img_url' => 'https://via.placeholder.com/200'
            ],
            [
                'category'=> 'Экономика',
                'title' => 'Aute irure',
                'short_desk' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img_url' => 'https://via.placeholder.com/200']
        ],
        'Спорт' => [
            [
                'category'=> 'Спорт',
                'title' => 'Is aute irure',
                'short_desk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.',
                'img_url' => 'https://via.placeholder.com/200'],
            [
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
    public function show(int $id)
    {
        return view('news.show', ['news' => $this->news_data[$id]]);
    }
}
