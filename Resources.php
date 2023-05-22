<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Resources | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(images/Starry\ Night.svg);">
<div class="gradientOverlay"></div>
<br/><br/><br/><br/><br/>

<div>
	<iframe src="Works Cited.pdf" width="75%" height="750px"></iframe><br><br>
	<iframe src="Copyright Checklist.pdf" width="75%" height="750px"></iframe><br><br>
	<iframe src="Plan of Works.pdf" width="75%" height="750px"></iframe>
</div>

<br/><br/><br/>
</body>

<?php
	include_once 'footer.php';
?>