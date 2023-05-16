<?php

$serverName = "sql200.epizy.com";
$dBUsername = "epiz_34136559";
$dBPassword = "rsd13252";
$dBName = "epiz_34136559_webmaster";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}