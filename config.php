


<!DOCTYPE html>
<html>
<body>
<?PHP
 
$host = "localhost";
$username = "hnuthalapati1";
$pwd ="hnuthalapati1";
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



?>

</html>
</body>



