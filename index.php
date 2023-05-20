<?php
	include_once 'header.php';
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
	<img src="images/earth-1756274_1920.jpg" style="filter: blur(1px);" alt="Breathtaking Image of Earth" draggable="false">>
	<div class="imageText">
		Check out our amazing packages!
		<button> 
	</div>
</div>
<div class="imgWrapper">
	<img src="images/earth-1756274_1920.jpg" style="filter: blur(1px);" alt="Breathtaking Image of Earth" draggable="false">
	<div class="imageText"></div>
</div>

</body>

<?php
	include_once 'footer.php';
?>