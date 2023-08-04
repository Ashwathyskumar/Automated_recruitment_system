<?php 
session_start();

if ((isset($_SESSION['roles']))== 'admin') {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="login.css">
      <style>
body { background-image: url("home.png");
         background-repeat: NO-REPEAT, repeat;
         background-color: #CCCCCC;
}
</style>
</head>
<body>
     <h1>Hello Admin</h1>
     <a href="postjob.php" class="post">POST JOB</a>
     <br></br>
     <a href="view_applicants.php" class="post">VIEW CANDIDATE</a>
</body>
</html>

<?php 
}else{
     header("Location: h1.php");
     exit();
}
 ?>