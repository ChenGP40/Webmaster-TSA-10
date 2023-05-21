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
	<div class="imageLogo reveal"><img src="images/Horizon Name Logo New.png" draggable="false"></div>
	<div class="logoText typewriter">TOGETHER TOWARDS THE FUTURE</div>
</div>
<div class="imgWrapper">
	<img src="images/Spiral Galaxy.jpg" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageText reveal">
		Check out our amazing packages!
	</div>
	<button class="home">Take me there!</button>
</div>
<div class="imgWrapper">
	<img src="images/Launched Rocket.jpg" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageText">
		Take a look at our ships!
	</div>
	<button class="home">Take me there!</button>
</div>
</body>

<?php
	include_once 'footer.php';
?>