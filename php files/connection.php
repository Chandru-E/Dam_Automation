<?php
$username = "iac-dam";
$pass = "iac-dam";
$host = "172.23.10.10";
$db_name = "iac-dam";
$db = mysqli_connect($host, $username, $pass,$db_name) or die(mysqli_error());
?>
