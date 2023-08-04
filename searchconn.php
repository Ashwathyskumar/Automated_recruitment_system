<?php
  
  $servername = "127.0.0.1:3307";
  $username = "root";
  $password = "";
  $databasename = "ldb";
  
  // CREATE CONNECTION
  $conn = mysqli_connect($servername, 
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  $filter = $_POST["filter"];
  echo $filter;

  $sql = "SELECT * from pj where id='".$filter."'";
  $results=mysqli_query($conn,$sql);
    echo $row[0]."  ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]." ".$row[6];
  

 // SQL QUERY
  $query = "SELECT id,cname FROM pj";
  // FETCHING DATA FROM DATABASE
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
      // OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)) {
          echo "Roll No: " . $row["id"]
          . " - Name: " . $row["cname"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  
  $conn->close();