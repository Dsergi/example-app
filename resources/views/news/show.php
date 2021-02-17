<?php
$title = "<h1>" . $news['title'] . "</h1>";
$category = "<h4>" . $news['category'] . "</h4>";
$news_sections = "<section>";
$news_sections .= "<img src='" . $news['img_url'] . "'>";
$news_sections .= "<p>" . $news['short_desk'] . "</p>";
$news_sections .= "</section>";

$back= "<a href='/news'> Назад к новостям</a>";
echo $title. $category . $news_sections . $back ;
echo "<br>";
?>

<a href="<?= route('admin.news.index')?>">Админка</a>
