<?php
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['roles']) )

{
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
    $uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $roles = validate($_POST['roles']);
    if(empty($pass) && empty($uname) )
        {
           header("Location: index.php?error=Password UserName is required");
           exit(); 
        }
    else if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
    }
   

    
    else{
        $sql = "SELECT * FROM login WHERE uname='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['password'] === $pass && $row['roles'] === $roles) {
            	$_SESSION['uname'] = $row['uname'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                $_SESSION['roles'] = $row['roles'];
            	header("Location: home1.php");      
        }
        else{
            header("Location: index.php?error=Incorect User name or password");
                exit();
        }
    }
    else{
        header("Location: index.php?error=Incorect User name or password");
	        exit();
    }

    }
}
    

			/*$row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['password'] === $pass) {
            	$_SESSION['uname'] = $row['uname'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }
    }
    else{
        header("Location: index.php?error=Incorect User name or password");
	        exit();
    }
}

}else{
    header("Location: index.php");
    exit();
}*/