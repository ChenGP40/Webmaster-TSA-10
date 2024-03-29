<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Sign Up | Horizon";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<body id="info" style="background-image:url(images/galaxy-3608029_1920.jpg);">
<br/><br/><br/><br/><br/><br/>

<form class="signUp" action="includes/signupInc.php" method="post">
    <h2>Sign Up</h2>
    <hr>
    <input type="text" name="name" placeholder="Full Name...">
    <input type="text" name="email" placeholder="Email...">
    <hr>
    <input type="text" name="uid" placeholder="Username...">
    <input type="password" name="pwd" placeholder="Password...">
    <input type="password" name="pwdRepeat" placeholder="Repeat Password...">
    <button type="submit" name="submit" id="signUp">Sign Up</button>
    <p>Already have an account? <a href="Login.php">Login</a></p>
</form>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput") {
            echo "<p>Please fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalidUid") {
            echo "<p>Invalid username format (aphabet and numerals only!).</p>";
        }
        else if ($_GET["error"] == "invalidEmail") {
            echo "<p>Invalid email address.</p>";
        }
        else if ($_GET["error"] == "pwdNonmatch") {
            echo "<p>Entered passwords do not match.</p>";
        }
        else if ($_GET["error"] == "stmtFailed") {
            echo "<p>Something went wrong. Try again.</p>";
        }
        else if ($_GET["error"] == "usernameTaken") {
            echo "<p>This username is already taken.</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>Signup successful!</p>";
        }
    }
    ?>
</div>

</body>