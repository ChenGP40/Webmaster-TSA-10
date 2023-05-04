<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbhInc.php';
    require_once 'functionsInc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../SignUp.php?error=emptyInput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../SignUp.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../SignUp.php?error=invalidEmail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../SignUp.php?error=pwdNonmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../SignUp.php?error=usernameTaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
}

else {
    header("location: ../SignUp.php");
    exit();
}