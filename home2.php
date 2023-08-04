<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>HELLO, <?php echo $_SESSION['name']; ?></h1>
     <h2>THIS PAGE DIRECTS YOU TO YOUR RIGHT WEB PAGE</h2>
     <form action="home1.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
     <div class='ut'>
          <label>User Type:</label>
     </div>
    <select>
     <option selected value="user">user</option>
     <option value="admin">Admin</option>
     </select>
     <button type="submit">LOGIN</button>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>