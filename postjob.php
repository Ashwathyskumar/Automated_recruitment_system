<?php 
session_start();

if ((isset($_SESSION['roles']))== 'admin') {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>POSTJOB</title>
	<link rel="stylesheet" type="text/css" href="postjob.css">
</head>
<body>
     <form action="postjobcheck.php" method="post">
     	<h2>POSTJOB</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <label>Company Name</label>
          <?php if (isset($_GET['cname'])) { ?>
               <input type="text" 
                      name="cname" 
                      placeholder="cname"
                      value="<?php echo $_GET['cname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="cname" 
                      placeholder="cname"><br>
          <?php }?>
          <label>email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="email"><br>
          <?php }?>
          <label>company address</label>
          <?php if (isset($_GET['caddress'])) { ?>
               <input type="text" 
                      name="caddress" 
                      placeholder="caddress"
                      value="<?php echo $_GET['caddress']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="caddress" 
                      placeholder="caddress"><br>
          <?php }?>
          <label>qualification</label>
          <?php if (isset($_GET['qual'])) { ?>
               <input type="text" 
                      name="qual" 
                      placeholder="qual"
                      value="<?php echo $_GET['qual']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="qual" 
                      placeholder="qual"><br>
          <?php }?>
          <label>Experience</label>
          <?php if (isset($_GET['exp'])) { ?>
               <input type="number" 
                      name="exp" 
                      placeholder="exp"
                      value="<?php echo $_GET['exp']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="exp" 
                      placeholder="exp"><br>
          <?php }?>
          <label>Basic Salary</label>
          <?php if (isset($_GET['bsalary'])) { ?>
               <input type="number" 
                      name="bsalary" 
                      placeholder="bsalary"
                      value="<?php echo $_GET['bsalary']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="bsalary" 
                      placeholder="bsalary"><br>
          <?php }?>
          <label>MODE:</label>
          <select name="mode">
               <option selected value="intern">INTERNSHIP</option>
               <option value="fullt">FULL TIME</option>
          </select>
          <br>
          <br>
     	<button type="submit" class="post">POST</button>
          <a href="viewpostjob.php" class="post">VIEWPOST</a>
          <a href="home1.php" class="sup">Cancel</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: home1.php");
     exit();
}
 ?>