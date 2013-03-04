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

		<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="bg_wrapper">
			<?= $nav ?>
			  	<div class="wrapper">
					<?= isset($content) ? $content : null ?>
					<div class="push"></div>
				</div>
			<?= $footer ?>
		</div>
	</body>
</html>