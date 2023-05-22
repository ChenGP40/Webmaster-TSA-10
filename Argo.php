<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Argo | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>


<body>
<div class="imgWrapper">
	<img src="images/Argo2.png" alt="Nebula" draggable="false">
	<div class="imageLogo revealLogo">THE ARGO</div>
	<div class="logoText gradientText typewriter">Luxury at its Finest</div>
</div>

<div class="boxinfo">
	<div>
		The Argo is the newest of our ships in the Horizon arsenal.
		It is the greatest yet, with the ability to travel into deep space using hyper travel technology.
	</div>
</div> 

</body>

<?php
	include_once 'footer.php';
?>