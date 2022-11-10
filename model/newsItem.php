<?php
require_once "db.php";

$id = $_GET["id"];

$result = $db->query("
	SELECT id, title, content
	FROM news
	WHERE id = $id
");
$oneNews = $result->fetch();
if ($id) { ?>

		<h1 class="title-news"><?= $oneNews['title']; ?></h1>
        <div class="line"></div>
		<div class="news-wrap"><?= $oneNews['content']; ?></div>
        <div class="line"></div>

<?php }

