<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Help | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(Starry\ Night.svg);">
<br/><br/><br/>
<!-- <div class="box">
	<div>
    <iframe class="help" src="https://docs.google.com/forms/d/e/1FAIpQLSdvXQDqICLKHasMawm3JSc9r_QOSUUe3WH5fupyKppS8ljPGA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
	</div>
</div>
</body> -->
<p>SEND E-MAIL</p>
<form class="signUp" action="contact.php" method="post">
	<input type="text" name="name" placeholder="Full name">
	<input type="text" name="mail" placeholder="Your e-mail">
	<input type="text" name="subject" placeholder="Full name">
	<textarea name="message" placeholder="Message"></textarea>
	<button class="signUp" type="submit" name="submit">Submit</button>
</form>

</body>
<?php
	include_once 'footer.php';
?>