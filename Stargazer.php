<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Stargazer | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body>
<div class="imgWrapper">
	<img src="images/Stargazer2.png" alt="Nebula" draggable="false">
	<div class="imageLogo revealLogo">THE STARGAZER</div>
	<div class="logoText gradientText typewriter">A Window to the Cosmos</div>
</div>

<div class="boxinfo">
	<div>
		The Stargazer is just one of Horizon's luxury cruisers. 
		It has the ability to travel far through the solar system, and traveling in this ship is a dream come true. 
	</div>
</div> 
</body>

<?php
	include_once 'footer.php';
?>