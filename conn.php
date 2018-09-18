<?php
 session_start();
?>

<!DOCTYPE html>

<html>
<body>

<?php 
include("config.php");
$u_name = $_POST["username"];
$pwd = $_POST["password"];
$sql = "SELECT * FROM user Where Username = '$u_name'";
$result = mysql_query($sql);
if(mysql_num_rows($result) > 0)
{
	while( $row = mysql_fetch_assoc($result))
	{
		
		if($pwd == $row["Password"]){
			
		header('Location:user_home.php');
		}
		else {
		  echo "login unsuccessful";
		}
	}
}
else{
	echo "no user exists";
}
$_SESSION["username"] = $u_name;
?>

</body>
</html>

