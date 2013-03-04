<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<title><?= isset($title) ? $title : null ?></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<?= Asset::css('bootstrap.css') ?>
		<?= Asset::css('main.css') ?>

		<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
			<?= $nav ?>
			  	<div class="container">
					<?= isset($content) ? $content : null ?>
					<div class="push"></div>
				</div>
			<?= $footer ?>
	</body>
	<?= Asset::js('bootstrap.js') ?>
</html>