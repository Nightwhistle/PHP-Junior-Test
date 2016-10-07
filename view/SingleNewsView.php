<?php

require_once ROOT_PATH . '/init/init.php';
$id = (isset($_GET['newsid'])) ? $_GET['newsid'] : 'notselected';
$newsController = new NewsController();
$news;
if ($id != 'nonselected') {
    $news = $newsController->getSingleNews($id);
}
echo "<div id='newsContainer'>";

echo "<div class='news'>";
echo "  <h2>$news->news</h2>";
echo "  <p>$news->title</p>";
echo "  <p>$news->username</p>";
echo "</div>";


echo "</div>";
