<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style type = "text/css">

p{
	text-align : center;
}
h1{
  text-align : center;
} 
body {
    background-image: url(bg2.jpg);
    background-attachment: fixed;
    }
  
a:link, a:visited {
    background-color:black;
    color: white;
    padding: 12px 20px;
    text-align:center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: black;
}
</style>
</head>
<body>
<?php
//include("config.php");

echo "<h1>Hello " . $_SESSION["username"]. "</h1>"; 
echo  "<p>Welcome to your home page </p>";
echo "Your score is " . $_SESSION["score"];
echo "<p> Here are your topics </p>";
	$arrlength = count($_SESSION["Topics"]);

for($x = 0; $x < $arrlength; $x++) {
    if($_SESSION["Topics"][$x] != "None"){
		switch($_SESSION["Topics"][$x]){
			case "Html":
				echo "<a href=\"h_tml.php\">HTML</a>";
				
				break;
			case "Css":
				echo "<a href=\"c_ss.php\">CSS</a>";
				
				break;
			case "js":
				echo "<a href=\"java_script.php\">JavaScript</a>";
				break;
			case "php":
				echo "<a href=\"p_hp.php\">PHP</a>";
				break;
				
			case "mysql":
				echo "<a href=\"my_sql.php\">SQ</a>";
				break;
				
			default:
			echo "It still works";
			
		}
    echo "<br>";
	}
	
	
}
?>


</body>
</html>