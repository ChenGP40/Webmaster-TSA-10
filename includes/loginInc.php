<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbhInc.php';
    require_once 'functionsInc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../Login.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else {
    header("location: ../Login.php");
    exit();
}