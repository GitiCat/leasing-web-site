<?php
	header("Content-Type: text/html; charset=UTF-8");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-chech=0, pre-check=0", false);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $content["document_name"];?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/public/styles/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<!-- Global navigation bar -->
	<div class="nav-bar">

	</div>

	<div class="root">
		<!-- Header block -->
		<header class="header" id="header">
			<div class="header-bg-image"></div>
			<div class="header-title">
				<h2><?= $content["header"]["title"]; ?></h2>
				<h1><?= $content["header"]["tagline"]; ?></h1>
				<hr>
				<span><?= $content["header"]["desc"]; ?></span>
			</div>
			<div class="to-down-container">
				<div class="to-down" id="to-down">
					<i class="material-icons">keyboard_arrow_down</i>
				</div>
			</div>
		</header>

		<!-- Content block -->
		<article class="content" id="content">
			<?php include($contentPage) ?>
		</article>

		<!-- Footer block -->
		<footer class="footer" id="footer">
			<div class="copy">Copyright &copy; <span id="copy-date"></span> Все права защищены.</div>
		</footer>
	</div>

	<!-- Connect main script file -->
	<script src="../../../public/scripts/scripts.js"></script>
	<script src="../../../public/scripts/form.js"></script>
</body>
</html>