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

<body id="info" style="background-image:url(images/Starry\ Night.svg);">
<div class="gradientOverlay"></div>
<br/><br/><br/><br/>
<div class="box">
	<div class="gradientText typewriter">OUR SHIPS</div>
	<div class="position">
		<img src="images/Voyager.png" class="nestedImage" alt="The Voyager">
		<button class="packageText revealLogo" onclick="window.location.href = 'Voyager.php';">THE VOYAGER</button>
	</div>
	<div class="position">
		<img src="images/Stargazer.png" class="nestedImage" alt="The Stargazer">
		<button class="packageText revealLogo" onclick="window.location.href = 'Stargazer.php';">THE STARGAZER</button>
	</div>
	<div class="position">
		<img src="images/Argo.png" class="nestedImage" alt="The Argo">
		<button class="packageText revealLogo" onclick="window.location.href = 'Argo.php';">THE ARGO</button>
	</div>
	<div style="padding: 1em;">
        Take a look at our ships and all the luxurious accomodations they have!
	</div>
</div>
</body>

<?php
	include_once 'footer.php';
?>