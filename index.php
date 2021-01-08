<!DOCTYPE HTML>

<html>
	<head>
		<title>Mon site </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
	<?php require('config/db.php');   ?>
	
		<!-- Header -->
			<?php 
          include("include/header.php"); 
        ?>

		<!-- Nav -->
			<?php 
          include("include/nav.php"); 
        ?>

		<!-- Banner -->
			
		<?php 
          include("include/banner.php"); 
        ?>
		<!-- Highlights -->
		<?php 
          include("include/highlights.php"); 
        ?>

		<!-- Footer -->
		<?php 
          include("include/footer.php"); 
        ?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>