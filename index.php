<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/core/a_config.php";include_once($path); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Head tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/head-tags.php";include_once($path); ?>
</head>

<body>
	<!-- Navbar -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/navbar.php";include_once($path); ?>
	<!-- Content -->
	<h1> HOME PAGE </h1>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
</body>
</html>