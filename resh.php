<?php
 session_start();
?>
<html>
<style type ="text/css">
p{
	text-align : center;
}
h1{
  text-align : center;
} 
body {
    background-image: url(bg2.jpeg);
    background-attachment: fixed;
    }
  
</style>
<body>

<?php

   if($_POST["q1"] == "b" ){ $_SESSION["score"]++; }
   if($_POST["q2"] == "a" ){ $_SESSION["score"]++  ;}
   if($_POST["q3"] == "a" ){ $_SESSION["score"]++  ;}
   if($_POST["q4"] == "b"){ $_SESSION["score"]++  ;}
   if($_POST["q5"] == "a"){ $_SESSION["score"]++  ;}
   
   echo "<p> Hi " .$_SESSION["username"]. "</p>";
   echo "<p> Congrats your score is ".$_SESSION["score"]."</p>";
 
?>
<a href="user_home.php">Home</a>
</html>
</body>
