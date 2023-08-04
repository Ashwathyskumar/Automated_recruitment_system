<style>
body {
    background: #4c268f;
    color: #99eeb4;
    height: 100vh;
    text-align: center;
  }

.inputFields {
  margin: auto;
  display:block;
  font-size: 16px;
  font-family: "Dank Mono", ui-monospace, monospace;
  padding: 10px;
  width: 250px;
  height: 70px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
}


</style>
<?php
$name = $_POST['name'];
$uniqueid = $_POST['uniqueid'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$filename = $_POST['filename'];

$conn = new mysqli('127.0.0.1:3307','root','','ldb');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
    $query = mysqli_query($conn,"SELECT * FROM `registration` WHERE  email='$email'");
    $query12 = mysqli_query($conn,"SELECT * FROM `registration` WHERE  uniqueid='$uniqueid'");
  if(mysqli_num_rows($query) or mysqli_num_rows($query12)>0){
    echo "<h1>E-mail or Unique-id already in use</h1>
    <input type=button onClick=\"location.href='http://localhost/team11/userreg.php'\"
 value='click here to register again'>";
  }
  else{
		$stmt = $conn->prepare("insert into registration(name, uniqueid , qualification, experience,phone, email, filename) values(?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sisiiss", $name,$uniqueid, $qualification, $experience, $phone, $email, $filename);
		$execval = $stmt->execute();

        // echo header("Location:http://localhost/userreg/profile.php");
		// echo $execval;
		// echo "Registration successfully...";
        echo "<h1>User profile </h1> <br>
        <div class=\"inputfields\"><p> NAME : {$name}</p></div>
        <br></br>
        <div class=\"inputfields\"><p> UNIQUE ID : {$uniqueid}</p></div>
        <br></br>
        <div class=\"inputfields\"><p>QUALIFICATION : {$qualification}</p></div>
        <br></br>
        
        <div class=\"inputfields\"><p>E-MAIL : {$email}</p></div>
        <br></br>
        
        <div class=\"inputfields\"><p>PHONE :  {$phone}</p></div>
        <br></br>
       
        <input type=button onClick=\"location.href='http://localhost/team11/HTML.php'\"
 value='Search job'>
        <br></br>
        
        <input type=button onClick=\"location.href='http://localhost/team11/job_alert.php'\"
 value='Job alert'>";
		$stmt->close();
		$conn->close();}
	}

?>

<!-- margin: 15px 0;
  font-size: 16px;
  font-family: "Dank Mono", ui-monospace, monospace;
  padding: 10px;
  width: 250px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
  outline: none; -->