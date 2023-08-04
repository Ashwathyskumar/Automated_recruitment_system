<!DOCTYPE html>
<html>
<html>
<head>
    <title> Shortlisted candidates </title>
<style >
   div {
  align: center;
  position: absolute;
  top: 40%;
  left: 40%;
}
input.text {
  width: 120%;
  height: 300%;
}
input[type=submit] {  
    background-color: #008CBA;
    padding: 12px 30px;
    border-radius: 2px;
    background-color: white;
    color: black;
    border: 1px solid #008CBA;
    align:center;
}  

body{
background-image: url(shortlist.jpg);
background-repeat: no-repeat;
background-size:cover;
        

}
    </style>

</head>
<body>

<?php 

if ($_SERVER["REQUEST_METHOD"]=="POST"){
$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "ldb";
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connection established <br>";
}

$Userid = $_POST["userid"];
echo $Userid;

$sql = "SELECT * from  registration where uniqueid='".$Userid."'";
$results=mysqli_query($conn,$sql);
if(mysqli_num_rows($results)>0)
{
    while($row=mysqli_fetch_array($results)){
        $sql2= "INSERT into sel (uniqueid,name,qualification,experience,phone,email,filename) values ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]')";
        if(mysqli_query($conn, $sql2)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        echo $row[0]."  ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]." ".$row[6];
    }
}
}
 
?>
<div>
    <form method ="post"  action="shortlist.php">
        USER ID:<input type = "text" name ="userid"><br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</div>