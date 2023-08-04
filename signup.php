<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="name"><br>
          <?php }?>
          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="uname"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="uname"><br>
          <?php }?>
          <label>Password</label>
          <?php if (isset($_GET['password'])) { ?>
               <input type="text" 
                      name="password" 
                      placeholder="password"
                      value="<?php echo $_GET['password']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="password" 
                      placeholder="password"><br>
          <?php }?>
          
     	
          <label>Age</label>
          <?php if (isset($_GET['age'])) { ?>
               <input type="number" 
                      name="age" 
                      placeholder="age"
                      value="<?php echo $_GET['age']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="age" 
                      placeholder="age"><br>
          <?php }?>
          <label>User Type:</label>
          <select name="roles">
               <option selected value="user">User</option>
               <option value="admin">Admin</option>
          </select>
     	<button type="submit">Sign Up</button>
          <a href="index.php" class="sup">Already have an account?</a>
     </form>
</body>
</html>