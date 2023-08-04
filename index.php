<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        
        <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <label><b>Name</b></label>
            <input type="text" name="uname" placeholder="User Name">
            <label><b>password</b></label></b>
            <input type="password" name="password" placeholder="password">
            <label>User Type:</label>
          <select name="roles">
               <option selected value="user">User</option>
               <option value="admin">Admin</option>
          </select>
            <b>
            <button type="submit">LOGIN</button>
            </b>
            <br>
            <a href="signup.php">Create an account</a>
            </br>
        </form>     
    </body>
</html>