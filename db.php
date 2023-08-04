<?php

$sname= "127.0.0.1:3307";
$unmae= "root";
$password = "";

$db_name = "ldb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
else{
	echo "success connection"; 
}