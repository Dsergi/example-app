<?php
$title = "<h1>Новости</h1>";

$news_sections = "<section>";

foreach ($news_data as $key => $news) {

    $news_sections .= "<a href='" . route('news.show', ['id' =>$key]) . "'>";
    $news_sections .= "<h5>" . $news['category'] . "</h5>";
    $news_sections .= "<img src='" . $news['img_url'] . "'>";
    $news_sections .= "<h3>" . $news['title'] . "</h3>";
    $news_sections .= "<p>" . $news['short_desk'] . "</p>";
    $news_sections .= "</a>" . "<hr>";
}
$news_sections .= "</section>";

$back = "<a href='/news'>Назад</a>";

echo $title. $back . $news_sections;

