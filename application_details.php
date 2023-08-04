<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
  border: 1px solid black;
  
 
}        
body{
background-image: url(ap_det.jpeg);
background-repeat: no-repeat;
background-size:cover;
        

}
        </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body style="margin:50px;">
       <h1>Application details</h1>
       <br>
       <table class="table">
        <thead>
            <tr>
                <th>uniqueid</th>
                <th>name</th>
                <th>qualification</th>
                <th>experience Address</th>
                <th>phone</th>
                <th>email</th>
                <th> filename</th>
                <th>Select</th>
                <td>
                    <a class="btn btn-primary btn-sm" href="postjob.php">close</a>
                    <a class="btn btn-primary btn-sm" href="shortlist.php">Shortlist</a>
                </td>
            </tr>
        </thead>
        <?php
        $conn = mysqli_connect('127.0.0.1:3307','root','','ldb');
        if($conn-> connect_error){
            die("connection:" . $conn-> connect_error);
        }
        $sql = "SELECT * FROM registration" ;
        $result = $conn-> query($sql);

        if($result-> num_rows >0)
        {
            while($row = $result-> fetch_assoc()){
                echo "<tr>
                <td>".$row["uniqueid"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["qualification"]."</td>
                <td>".$row["experience"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["filename"]."</td>
                </tr>";
            }
            echo"</table>";
        }
        else{
            echo "0 result";
        }
        $conn->close();
        ?>

       </table>
    </body>
</html>