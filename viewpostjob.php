<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body style="margin:50px;">
       <h1>JOB AVAILABLE</h1>
       <br>
       <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Company Address</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>Basic Salary</th>
                <th>Mode</th>
                <td>
                    <a class="btn btn-primary btn-sm" href="postjob.php">close</a>
                </td>
            </tr>
        </thead>
        <?php
        $conn = mysqli_connect('127.0.0.1:3307','root','','ldb');
        if($conn-> connect_error){
            die("connection:" . $conn-> connect_error);
        }
        $sql = "SELECT * FROM pj";
        $result = $conn-> query($sql);

        if($result-> num_rows >0)
        {
            while($row = $result-> fetch_assoc()){
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["cname"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["caddress"]."</td>
                <td>".$row["qual"]."</td>
                <td>".$row["exp"]."</td>
                <td>".$row["bsalary"]."</td>
                <td>".$row["mode"]."</td>
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
   