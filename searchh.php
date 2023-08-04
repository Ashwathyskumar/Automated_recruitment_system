<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body style="margin:50px;">
       <h1> DETAILS</h1>
       <br>
       <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>cname</th>
                <th>email</th>
                <th>caddress</th>
                <th>qual</th>
                <th>exp</th>
                <th> bsalary</th>
                <th>mode</th>
               
            </tr>
        </thead>
<style>
body { background-image: url("BG.png");
         background-repeat: NO-REPEAT, repeat;
         background-color: #CCCCCC;
         background-size: 1300px 700px;
}
</style>


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
     $filter = $_POST["cname"];
    
    $sql = "SELECT * from  pj where cname='".$filter."'";
$results=mysqli_query($conn,$sql);
if(mysqli_num_rows($results)>0)
{
   
  while($row=mysqli_fetch_array($results)){
		echo "<tr>
                <td>".$row["0"]."</td>
                <td>".$row["1"]."</td>
                <td>".$row["2"]."</td>
                <td>".$row["3"]."</td>
                <td>".$row["4"]."</td>
                <td>".$row["5"]."</td>
                <td>".$row["6"]."</td>
                <td>".$row["7"]."</td>
                </tr>";
            }
            echo"</table>";
        }
        else{
            echo "0 result";
}
}		


?>