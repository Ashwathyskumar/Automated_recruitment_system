<?php

$sname= "127.0.0.1:3307";
$uname= "root";
$password = "";
$db_name = "ldb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}