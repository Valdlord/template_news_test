<!doctype html>
<html lang="ru" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no">
	<link href="css/landing-page.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<title>News</title>
	<meta name="description" content="News">
	<meta name="keywords" content="">
	<meta property="og:title" content="">
	<meta name="twitter:title" content="">
</head>
<body>
	<div class="page-wrapper">
		<main class="landing-page">
			<section class="section-2">
				<div class="container">
                    <?php include 'model/newsItem.php' ?>
                    <div class="footer_news">
                        <a href="index.php">Все новости >></a>
                    </div>
				</div>
			</section>
		</main>
	</div>
</body>
</html>