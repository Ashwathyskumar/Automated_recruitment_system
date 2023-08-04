<?php 
session_start();

if ((isset($_SESSION['roles']))== 'user') {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello user</h1>
</body>
</html>

<?php 
}else{
     header("Location: h1.php");
     exit();
}
 ?>