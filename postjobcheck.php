<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['cname']) && isset($_POST['email'])  && isset($_POST['caddress']) && isset($_POST['qual']) && isset($_POST['exp']) && isset($_POST['bsalary']) && isset($_POST['mode']) )
 {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$cname = validate($_POST['cname']);
	$email = validate($_POST['email']);
	$caddress = validate($_POST['caddress']);
	$qual = validate($_POST['qual']);
	$exp = validate($_POST['exp']);
    $bsalary = validate($_POST['bsalary']);
	$mode = validate($_POST['mode']);
	$job_data = 'cname='. $cname. '&name='. $name;

	if (empty($cname)) {
		header("Location: postjob.php?error=Company Name is required");
	    exit();
	}
	if(!preg_match("/[a-zA-Z\s]+$/",$cname)){
		header("Location: postjob.php?error=Company Name is invalid");
	    exit();

	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: postjob.php?error=invalid Email");
	    exit();
	}
	else if(empty($email)){
        header("Location: postjob.php?error=email is required");
	    exit();
	}
	else if(empty($caddress)){
        header("Location: postjob.php?error=company address is required");
	    exit();
	}
	else if(empty($qual)){
        header("Location: postjob.php?error=qualification is required");
	    exit();
	}
	else if(($exp)<0){
        header("Location: postjob.php?error=invalid experience");
	    exit();
	}
    else if(empty($bsalary)){
        header("Location: postjob.php?error=basic salary is required");
	    exit();
	}
	else if(($bsalary)<1000){
		header("Location: postjob.php?error= invalid salary(>1000)");
	    exit();
	}
    else
	{

        $sql = "SELECT * FROM pj  ";
		$result = mysqli_query($conn, $sql);
           $sql2 = "INSERT INTO pj (cname, email,caddress,qual,exp,bsalary,mode) VALUES('$cname', '$email', '$caddress','$qual','$exp','$bsalary','$mode')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: postjob.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: postjob.php?error=unknown error occurred");
		        exit();
           }
		}
	}

else{
	header("Location: viewpostjob.php");
	exit();
}