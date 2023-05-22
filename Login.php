<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Login | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(images/galaxy-3608029_1920.jpg);">
<br/><br/><br/><br/><br/><br/>

<form class="signUp" action="includes/loginInc.php" method="post">
<h2>Login</h2>
<hr>
    <input type="text" name="uid" placeholder="Username/Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="submit" id="signUp">Login</button>
    <p>Don't have an account? <a href="SignUp.php">Sign up</a></p>
</form>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput") {
            echo "<p>Please fill in all fields!</p>";
        }
        else if ($_GET["error"] == "wrongLogin") {
            echo "<p>Incorrect login credientials, please try again!</p>";
        }
    }
    ?>
</div>

</body>