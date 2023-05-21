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
<br/>
<br/>
<br/>
<br/>
<div class="box">
	<div class="gradientText typewriter">AVAILABLE PACKAGES</div>
	<div class="nestedImage">
		<img src="images/earth-11009.jpg" alt="The Earth">
		<div class="packageText">Around the World</div>
        
		<button href="PackageATW.php">Go<button>
	</div>
	<div class="nestedImage"><a href="PackageATP.php" id="imageLink">
		<br/>Amongst the Planets<br/><br/>
        <img src="images/Planets.png" alt="The Planets"></a>
	</div>
	<div class="nestedImage"><a href="PackageASJ.php" id="imageLink">
        <br/>A Stellar Journey<br/><br/>
		<img src="images/Nebula.png" alt="Nebula"></a>
	</div>
	<div style="padding: 1em;">
        Choose from one of our three extravagant packages to find your next dream vacation!<br/> Sail into mankind's next frontier unlike ever before.
	</div>
</div>
</body>

<?php
	include_once 'footer.php';
?>




