<?php
	include_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
<meta charset="UTF-8">
<meta name="description" content="Space Tourism">
<meta name="author" content="1425">
<meta name="keywords" content="Space Tourism, Rockets, Exploration, Space, Cruise">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Horizon</title>
<link rel="icon" type="image/x-icon" href="Logo.png">
<link rel="stylesheet" href="Space.css">
<link rel="preload" as="style" href="Space.css">
<link rel="preload" as="image" href="images/earth-1756274_1920.jpg">
<link rel="preload" as="image" href="images/Horizon Name Logo New.png">
<link rel="preload" as="image" href="images/images/Starry\ Night.svg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Poppins&display=swap" rel="stylesheet">
<script src="js/JAVASCRIPT.js"></script>
</head>

<header>
<nav>
	<div class="navigationLogo">
		<a href="home.php" class="navigationText" title="Home"><img src="images/Horizon Name Logo Alternate.png" width="125vw"></a>
	</div>
	<div class="navigation">
		<a href="Packages.php" class="navigationText" title="Available Packages">Packages</a>
		<a href="Ships.php" class="navigationText" title="Gallery of our Ships">Ships</a>
		<a href="Journey.php" class="navigationText" title="The Journey">The Journey</a>
		<a href="About.php" class="navigationText" title="About Us">About Us</a>
		<a href="Resources.php" class="navigationText" title="Resources">Resources</a>
	</div>
	<div class="navigationMenu">
		<?php
			if (isset($_SESSION["userUid"])) {
				echo "<a href='index.php?page=products' class='navigationText' title='Shop Horizon'>Shop</a>";
				echo "<a href='index.php?page=cart' class='navigationText' title='My Cart'>My Cart</a>";
				echo "<a href='includes/logoutInc.php' class='navigationText' title='Logout'>Logout</a>";
			}
			else {
				echo"<a href='SignUp.php' class='navigationText' title='Sign up here!'>Sign Up</a>";
				echo"<a href='Login.php' class='navigationText' title='Login here!'>Login</a>";
			}
		?> 
	</div>
	<div onclick="myFunction(this)">
		<div class="navigationBurger">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
 		</div>
		<div class="menu">
			<a href="Packages.php" class="menuText hidden" title="Available Packages">Packages</a>
			<a href="Ships.php" class="menuText hidden" title="Gallery of our Ships">Ships</a>
			<a href="Journey.php" class="menuText hidden" title="The Journey">The Journey</a>
			<a href="About.php" class="menuText hidden" title="About Us">About Us</a>
			<a href="Resources.php" class="menuText hidden" title="Resources">Resources</a>
			<a href="Training.php" class="menuText" title="Training Procedures">Training</a>
			<a href="Rules.php" class="menuText" title="Rules">Rules</a>
			<a href="index.php?page=products" class="menuText" title="Check out Horizon products!">Shop</a>
			<?php
				if (isset($_SESSION["userUid"])) {
					echo "<a href='index.php?page=cart' class='menuText' title='My Cart'>My Cart</a>";
					echo "<a href='includes/logoutInc.php' class='menuText' title='Logout'>Logout</a>";
				}
				else {
					echo"<a href='SignUp.php' class='menuText' title='Sign up here!'>Sign Up</a>";
					echo"<a href='Login.php' class='menuText' title='Login here!'>Login</a>";
				}
			?> 
			<img src="Logo.png">
		</div>
		<div class="menuOverlay"></div>
	</div>
</nav>
</header>

<script>
	function myFunction(x) {
	x.classList.toggle("toggle");
	}
</script>