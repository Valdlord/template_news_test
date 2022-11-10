<?php
require_once "db.php";

$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$offset = ($page - 1) * 5;

$result = $db->query("
	SELECT id, FROM_UNIXTIME(idate, '%d.%m.%Y') AS fdate, title, announce
	FROM news
	ORDER BY fdate DESC
	LIMIT 5
	OFFSET $offset
");
$news = $result->fetchAll();
foreach ($news as $item) { ?>
	<div class="news-wrap">
        <div class="news-title">
            <div class="date">
                <p><?= $item['fdate']; ?></p>
            </div>
            <div class="news-link-title">
                <a href="<?= 'item_news.php?id='.$item['id'] ?>"><?= $item['title']; ?></a>
            </div>
        </div>
        <p class="news-description"><?= $item['announce']; ?></p>
    </div>
<?php }