<?php
	include_once 'header.php';
?>

<div class="login">
    <h2>Login</h2>
    <form action="includes/loginInc.php" method="post">
        <input type="text" name="user" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form>
</div>

</body>

<?php
	include_once 'footer.php';
?>