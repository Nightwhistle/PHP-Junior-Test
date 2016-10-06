<?php

require_once ROOT_PATH . '/init/init.php';
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

$newsController = new NewsController();
$news = $newsController->getNews(2, $page-1);
echo "<div id='newsContainer'>";

foreach ($news as $singleNews) {
    echo "<div class='news'>";
    echo "  <h2><a href='news.php?newsid=$singleNews->id'>$singleNews->news</a></h2>";
    echo "  <p>$singleNews->title</p>";
    echo "</div>";
}

echo "<div class='pagination'>";

foreach ($newsController->getPagination() as $page) {
    echo "<a href='?page={$page}'>{$page}</a>";
}

echo "</div>";
echo "</div>";
