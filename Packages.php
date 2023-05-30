<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Home | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(images/Starry\ Night.svg);">
<div class="gradientOverlay"></div>
<br/>
<br/>
<br/>
<br/>
<div class="box">
	<div class="gradientText typewriter">AVAILABLE PACKAGES</div>
	<div class="position">
		<img src="earth-11009.jpg" class="nestedImage" alt="The Earth">
		<button class="packageText revealLogo" onclick="window.location.href = 'PackageATW.php';">AROUND THE WORLD</button>
	</div>
	<div class="position">
		<img src="Planets.png" class="nestedImage" alt="The Planets">
		<button class="packageText revealLogo" onclick="window.location.href = 'PackageATP.php';">AMONGST THE PLANETS</button>
	</div>
	<div class="position">
		<img src="Nebula.png" class="nestedImage" alt="A Nebula">
		<button class="packageText revealLogo" onclick="window.location.href = 'PackageASJ.php';">A STELLAR JOURNEY</button>
	</div>
	<div style="padding: 1em;">
        Choose from one of our three extravagant packages to find your next dream vacation!<br/> Sail into mankind's next frontier unlike ever before.
	</div>
</div>
</body>

<?php
	include_once 'footer.php';
?>