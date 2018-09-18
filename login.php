<!--
<!DOCTYPE html>
<html>
<body>

<
<?PHP
/*
include("conn.php");
$u_name = $_POST["username"];
$password =$_POST["password"];

//$_SESSION["username"] = $u_name;

$sql = "SELECT user WHERE Username = '$u_name'";
$auth = "SELECT user WHERE Password = '$password'";
if(mysql_query($sql)){
	if(mysql_query($auth)){
		
		/*echo "<h3> success </h3>";*/
		/*header('Location:user_home.php');
		
	}
	
		
}	
	else
	{
		echo "<h4> fail </h4>";
	}

*/
?> 

</body>
</html>
-->
<?php
include 'conn.php';

if(isset($_POST["username"], $_POST["password"])) 
{     

        $name = $_POST["username"]; 
        $password = $_POST["password"]; 

        $query = "SELECT * FROM user WHERE Username = '$name' AND Password = '$password'";
         $result = mysql_query($query);

        // *** Error checking, what if !$result? eg query is broken

        $row = mysqli_fetch_array($result);

        if(!$row){
            echo "<script type='text/javascript'> 
                    alert('Sorry the user and password does not match.');
                    window.location = '../Home.html';
            </script>";
            
        }
        else {

            session_start();
        $_SESSION["username"] = $name;
        $_SESSION["password"] = $password; 
        header("Location: user_home.php");
            // *** My PERSONAL preference is to use {} every where, it just makes it easier if you add  
            // code into the condition later
            $loggedIn = true;
            // redirect to shopping cart
        }
}
   ?>
