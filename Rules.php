<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Rules | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(images/Starry\ Night.svg);">
<div class="gradientOverlay"></div>
<br/><br/><br/><br/><br/>

<div class="box" style="margin-bottom: 0;">
	<div class="gradientText typewriter">REGULATIONS</div>
	<div></div>
	<div></div>
	<div></div>
	<div style="padding: 1em;">
		In order for you to board the ship to experience this amazing journey into outer space, you must follow the regulations listed here.
	</div>
</div>

<div style="font-weight: normal; border: #BDD4DE 3px dashed; margin: 0 auto; padding: 2em; background-color: rgb(0, 0, 0, .25)">
	<div>
	<span style="font-weight: bold; font-size: 125%;">On-Board Rules:</span><br/><br/>
		<ul style="text-align: left; padding-left: 1.5em; padding-top: 0.5em; padding-bottom: 0.5em">
			<li>No illegal substances.</li>
			<li>No entering Employee Only locations.</li>
			<li>Do not touch glass walls.</li>
			<li>Listen to all instructions and directives from Horizon employees.</li>
			<li>Do not interfere with any Horizon ship mechanisms.</li>
			<li>One 50-pound luggage item and one carry one item per person.</li>
			<li>No pets of any type allowed.</li>
			<li>All passengers must be prepared for hypersleep by 10:45 PM.</li>
			<li>Any injuries should be reported to Horizon crew members.</li>
			<li>No food or drink in zero-gravity areas.</li>
		</ul>
	</div><br/>
	<hr><br/>
	<div>
		<span style="font-weight: bold; font-size: 125%;">Banned Items List:</span><br/><br/>
		<ul style="text-align: left; padding-left: 1.5em; padding-top: 0.5em; padding-bottom: 0.5em">
			<li>Weapons of any kind.</li>
			<li>Any non-approved medication or drugs.</li>
			<li>Ammunition.</li>
			<li>Cigarettes.</li>
			<li>E-cigarettes.</li>
			<li>Explosives.</li>
			<li>Lighters.</li>
			<li>Any other item our security team rejects.</li>
		</ul>
	</div>  
</div> 
<br/>
<br/>