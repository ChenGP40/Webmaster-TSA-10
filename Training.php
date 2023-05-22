<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Training | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(images/Starry\ Night.svg);">
<div class="gradientOverlay"></div>
<br/><br/><br/><br/><br/>

<div class="box" style="margin-bottom: 0;">
	<div class="gradientText typewriter">TRAINING</div>
	<div></div>
	<div></div>
	<div></div>
	<div style="padding: 1em;">
		This training includes critical safety procedures for any emergencies that may occur on board. The training center is located at the Johnson Space Center in Texas.
	</div>
</div>

<div style="font-weight: normal; border: #BDD4DE 3px dashed; margin: 0 auto; padding: 2em; background-color: rgb(0, 0, 0, .25)">
	<div>
		<span style="font-weight: bold; font-size: 125%;">You will be trained for the following:</span><br/><br/>
		<ul style="text-align: left; padding-left: 1.5em; padding-top: 0.5em; padding-bottom: 0.5em">
			<li>Withstanding the incredible weight of gravity forced upon you during launch.</li>
			<li>Putting on and maneuvering in a spacesuit.</li>
			<li>Learning proper emergency etiquette.</li>
			<li>Dealing with weightlessness in space, which includes movement.</li>
		</ul>
	</div>  
</div> 
</div>
</body>
