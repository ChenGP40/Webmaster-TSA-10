<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
<meta charset="UTF-8">
<meta name="description" content="Space Tourism">
<meta name="author" content="1425">
<meta name="keywords" content="Space Tourism, Rockets, Exploration, Space, Cruise">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Webmaster 1425</title>
<link rel="icon" type="image/x-icon" href="images/Logo.svg">
<link rel="stylesheet" href="css/Space.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">
<script src="js/JAVASCRIPT.js"></script>
</head>

<header>
<nav>
	<div class="navigationLogo">
		<a href="index.php" class="navigationText" title="Home"><img src="images/Horizon Name Logo Alternate.png" width="125vw"></a>
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
				echo "<a href='Profile.php' class='navigationText' title='My Profile'>Profile</a>";
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
		<div class="menu"></div>
	</div>
</nav>
</header>

<script>
	function myFunction(x) {
	x.classList.toggle("toggle");
	}
</script>