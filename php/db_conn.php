<?php

$sname= "db";
$unmae= "registration_form";
$password = "password";

$db_name = "registration_form";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}




