<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Space Tourism">
<meta name="author" content="2103-901">
<meta name="keywords" content="Space Tourism, NASA, Rockets, Exploration, Space, Cruise">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Webmaster 2103-901</title>
<link rel="icon" type="image/x-icon" href="images/Logo.svg">
<link rel="stylesheet" href="css/Space.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100&display=swap" rel="stylesheet">
<script src="js/JAVASCRIPT.js"></script>
</head>

<header>
<nav>
<div class="navigation">
	<div class="menu navigationText">
		<a onclick="toggleMenu()">Menu</a>
	</div>
	<div id="navMobile">
		<a href="index.php" class="navigationText" title="Home" style="border: none;"><img src="images/Horizon Name Logo Alternate.png" width="125vw"></a>
		<div class="dropdown navigationText" title="Information" style="position: relative;">Information <span class="arrow" style="font-size: 75%">⮟</span>
			<a href="Info.php">
				<span class="clickableBox"></span></a>
			<div class="dropdownThings">
				<span style="color: #ffd000; border-bottom:#FF530D 5px solid;">Quick Links</span>
                <a href="Info.php#packages" title="Available Packages">Available Packages</a>
				<a href="Info.php#ships" title="Gallery of our Ships">Our Ships</a>
				<a href="Info.php#dining" title="Dining">Dining</a>
				<a href="Info.php#entertainment" title="Entertainment">Entertainment</a>
				<a href="Training.php" title="Special Training Information">Training</a>
				<a href="Rules.php" title="Onboard Rules">Regulations</a>
				<a href="Application.php" title="Application">Application</a>
			</div>
		</div>
		<a href="Journey.php" class="navigationText" title="The Journey">The Journey</a>
		<a href="About.php" class="navigationText" title="About Us">About Us</a>
		<a href="Resources.php" class="navigationText" title="Resources">Resources</a>
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
</div>
</nav>
</header>