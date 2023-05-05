<?php
	include_once 'header.php';
?>

<div class="login">
    <h2>Login</h2>
    <form action="includes/loginInc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
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

<?php
	include_once 'footer.php';
?>