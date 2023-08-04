<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])  && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['roles']) )
 {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$name = validate($_POST['name']);
	$age = validate($_POST['age']);
	$roles = validate($_POST['roles']);
	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}
	if(!preg_match("/[a-zA-Z\s]+$/",$uname)){
		header("Location: signup.php?error=User Name is invalid&$user_data");
	    exit();

	}
	if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(strlen($pass)<6){
		header("Location: signup.php?error= password is invalid(6-8)&$user_data");
	    exit();
	}
	else if(strlen($pass)>8){
		header("Location: signup.php?error= password is invalid(6-8)&$user_data");
	    exit();
	}
	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if(!preg_match("/[a-zA-Z\s]+$/",$name)){
		header("Location: signup.php?error= Name is invalid&$user_data");
	    exit();
	}
	else if(empty($age)){
        header("Location: signup.php?error=age is required&$user_data");
	    exit();
	}
	else if(($age)<19){
		header("Location: signup.php?error= invalid age&$user_data");
	    exit();
	}
	else

	{

		// hashing the password
        $sql = "SELECT * FROM login WHERE uname='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO  login(uname, password, name,age, roles) VALUES('$uname', '$pass', '$name','$age','$roles')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
}
	
else{
	header("Location: signup.php");
	exit();
}