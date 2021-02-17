<?php
$title = "<h1>Категории</h1>";

$categorys_sections = "<ul>";

foreach ($category_data as $key => $category) {
    $categorys_sections .= "<a href='" .route('news.category', ['category' =>$category])."'>";
    $categorys_sections .= "<li> $category </li>";
    $categorys_sections .= "</a>";
}

$categorys_sections .= "</ul>";

$back = "<a href='/'>На главную</a>";

echo $title . $categorys_sections . $back;
