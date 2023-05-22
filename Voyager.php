<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Voyager | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body>
<div class="imgWrapper">
	<img src="images/Voyager2.png" alt="Nebula" draggable="false">
	<div class="imageLogo revealLogo">THE VOYAGER</div>
	<div class="logoText gradientText typewriter">Horizon's First Ship</div>
</div>

<div class="boxinfo">
	<div>
		The Voyager is a multi-story luxury cruiser that offers an exceptional view when orbiting around the Earth.
		It was the first ship designed by Horizon and it has gone through many iterations to the design it has today. 
	</div>
</div> 
</body>

<?php
	include_once 'footer.php';
?>