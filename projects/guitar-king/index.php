<!doctype html>

<?php require ('router.php'); ?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title>Guitar King: <?=$page?></title>
		<link rel="stylesheet" href='css/site.css'>
	</head>

	<body>
		<header>
			<?php include('site-menu.php'); ?>
		</header>

		<main class='page-content'>
			<?php getTemplate($page); ?>
		</main>
	
	</body>
</html>