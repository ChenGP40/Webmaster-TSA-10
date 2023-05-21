<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Home | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<?php
if (isset($_SESSION["userUid"])) {
	echo "Hello there " . $_SESSION["userUid"] . "</php";
}
?>

<body>
<div class="imgWrapper">
	<img src="images/earth-1756274_1920.jpg" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageLogo revealLogo"><img src="images/Horizon Name Logo New.png" draggable="false"></div>
	<div class="logoText gradientText typewriter">TOGETHER TOWARDS THE FUTURE</div>
</div>
<div class="imgWrapper">
	<img src="images/Spiral Galaxy.jpg" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageText reveal">
		OUR PACKAGES	
	</div>
	<button onclick="window.location.href = 'Packages.php';" class="home reveal">Take me there!</button>
</div>
<div class="imgWrapper">
	<img src="images/Launched Rocket.jpg" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageText reveal">
		OUR SHIPS
	</div>
	<button onclick="window.location.href = 'Ships.php';" class="home reveal">Discover</button>
</div>
</body>

<?php
	include_once 'footer.php';
?>