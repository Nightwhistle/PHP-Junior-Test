<?php

require_once ROOT_PATH . '/init/init.php';
$id = (isset($_GET['newsid'])) ? $_GET['newsid'] : 'notselected';

$newsController = new NewsController();
$news;
if ($id != 'nonselected') {
    $news = $newsController->getSingleNews($id);
}
var_dump($news);
echo "<div id='newsContainer'>";

echo "<div class='news'>";
echo "  <h2>$news->news</h2>";
echo "  <p>$newsNews->title</p>";
echo "</div>";


echo "</div>";
