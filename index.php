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
	<img src="images/earth-1756274_1920.jpg" style="filter: blur(1px);" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageText"><img src="images/Horizon Name Logo New.png" draggable="false"></div>
</div>
<div class="imgWrapper">
	<img src="images/Spiral Galaxy.jpg" style="filter: blur(0px);" alt="Breathtaking Image of Earth" draggable="false">>
	<div class="imageText">
		Check out our amazing packages!
	</div>
</div>
<div class="imgWrapper">
	<img src="images/Launched Rocket.jpg" style="filter: blur(1px);" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageText"></div>
</div>
</body>

<?php
	include_once 'footer.php';
?>