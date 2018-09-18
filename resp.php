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

  
</style>
<body>

<?php

   if($_POST["q1"] == "b" ){ $_SESSION["score"]++; }
   if($_POST["q2"] == "a" ){ $_SESSION["score"]++  ;}
   if($_POST["q3"] == "a" ){ $_SESSION["score"]++  ;}
   if($_POST["q4"] == "c"){ $_SESSION["score"]++  ;}
   if($_POST["q5"] == "b"){ $_SESSION["score"]++  ;}
   
   echo "<p> Hi " .$_SESSION["username"]. "</p>";
   echo "<p> Congrats your score is ".$_SESSION["score"]."</p>";
   
?>
  <a href="user_home.php">Home</a>
</html>
</body>
