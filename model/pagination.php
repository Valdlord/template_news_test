<?php
require_once "db.php";

$resultCount = $db->query("
	SELECT COUNT(id) AS count
	FROM news
");

$countNews = $resultCount->fetch();

$maxPage = ceil($countNews["count"] / 5);

for ($i = 1; $i <= $maxPage; $i++) {
	if ($i == $page) { ?>
		<div class="pagination-item"><?= $i; ?></div>
	<?php } else { ?>
		<div class="pagination-item"><a href="index.php?page=<?= $i; ?>"><?= $i; ?></a></div>
<?php }
}