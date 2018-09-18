<?php
 session_start();
?>

<!DOCTYPE html>

<html>
<body>

<?PHP
$host = "localhost";
$username = "hnuthalapati1";
$pwd = "hnuthalapati1";
$db_name = "hnuthalapati1";
$conn = mysql_connect("$host","$username","$pwd");

if(!$conn)
 {
	die('cannot connect to server');
	
 }
else
 {
	mysql_select_db("$db_name");
	//echo "connection established";
 }



	$u_name = $_POST["username"];
	$pass   = $_POST["password"];
	$pass_2 = $_POST["confirm_password"];
	$name    = $_POST["name"];
	$question = $_POST["security"];
	$ans     = $_POST["answer"];
	$to1     = $_POST["Topic1"];
	$to2     = $_POST["Topic2"];
	$to3     = $_POST["Topic3"];
	$to4     = $_POST["Topic4"];
	$to5     = $_POST["Topic5"];
	$sql = "SELECT * FROM user";
	$_SESSION["username"] = $u_name;
	$_SESSION["score"] = 0;
	 
	$_SESSION["Topics"] = array($to1, $to2, $to3, $to4, $to5);
	
	
	



	/*
	$slquery = "SELECT 1 FROM user WHERE Username = '$u_name'";
    $selectresult = mysql_query($slquery);
    if(mysql_num_rows($selectresult)>0)
    {
         $msg = 'email already exists';
		 echo "$msg";
		 
    }
    elseif($pass != $pass_2){
         $msg = "passwords doesn't match";
		 echo "$msg";
    }
    */
else{
	$query = "INSERT INTO user(Username,Password,Name,Security_question,Answer,Topic_1,TOPIC_2,Topic_3,Topic_4,Topic_5) 
	            VALUES('$u_name','$pass','$name','$question','$ans','$to1','$to2','$to3','$to4','$to5')";
	
	if(mysql_query($query)){
	header('Location:user_home.php');
		
	}
	else
	{
		echo "<h4> fail </h4>";
	}
	}




?>


</body>
</html>