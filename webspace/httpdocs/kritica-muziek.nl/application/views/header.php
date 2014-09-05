<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MVC framework</title>
		<link rel='stylesheet' href="<?php echo BASE_URL; ?>public/css/style.css" type="text/css" />
		<link rel='stylesheet' href="<?php echo BASE_URL; ?>public/css/metro-bootstrap.css" type="text/css" />
		<script type='text/javascript' src='<?php echo BASE_URL; ?>public/js/jquery/jquery-2.1.1.js'></script>
		<script type='text/javascript' src='<?php echo BASE_URL; ?>public/js/jquery/external/jquery/jquery.js'></script>
		<script type='text/javascript' src='<?php echo BASE_URL; ?>public/js/jquery/jquery-ui.min.js'></script>
		<script type='text/javascript' src='<?php echo BASE_URL; ?>public/js/metro/metro.min.js'></script>
	</head>
	<body class="metro">
		<header class="bg-dark">
			<nav class="navigation-bar dark">
				<nav class="navigation-bar-content container">
					<?php include("link.php"); ?>
		    	</nav>
			</nav>
		</header>
		<div>

			<div id='banner' class="container">
				<?php include("banner.php"); ?>
			</div>
			
			<div id='content' class="container">


