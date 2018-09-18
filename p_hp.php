<?php
 session_start();
?>

<!DOCTYPE html>

<html>
<style type ="text/css">

h1{
  text-align : center;
} 
body {
    background-image: url(bg2.jpg);
    background-attachment: fixed;
    }
 #submission {
  text-align: center;
  } 
</style>
<body>
<form action = "resp.php" method = "post">
<p class="question_1">1.How to insert values into table </p>
<ul class="answers_1">
<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">private home page</label><br/>
<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">Personal Hypertext processor</label><br/>
<input type="radio" name="q1" value="c" id="q1c"><label for="q1c">php:processor</label><br/>
<input type="radio" name="q1" value="d" id="q1d"><label for="q1d">private hypertext processor</label><br/>
</ul>

<p class="question_2">2.All variables in PHP start with which symbol?</p>
<ul class="answers_2">
<input type="radio" name="q2" value="a" id="q2a"><label for="q2a">!</label><br/>
<input type="radio" name="q2" value="b" id="q2b"><label for="q2b">"&"</label><br/>
<input type="radio" name="q2" value="c" id="q2c"><label for="q2c">$</label><br/>
<input type="radio" name="q2" value="d" id="q2d"><label for="q2d">?</label><br/>
</ul>
 

 <p class="question_3">3.What is the correct way to end a PHP statement?</p>
<ul class="answers_3">
<input type="radio" name="q3" value="a" id="q3a"><label for="q3a">:</label><br/>
<input type="radio" name="q3" value="b" id="q3b"><label for="q3b">;</label><br/>
<input type="radio" name="q3" value="c" id="q3c"><label for="q3c">end</label><br/>
<input type="radio" name="q3" value="d" id="q3d"><label for="q3d"></php></label><br/>
</ul>
 
 <p class="question_4">4.How can you add a comment in a php? </p>
<ul class="answers_4">
<input type="radio" name="q4" value="a" id="q4a"><label for="q4a">'This is a comment'</label><br/>
<input type="radio" name="q4" value="b" id="q4b"><label for="q4b"> "This is a comment"</label><br/>
<input type="radio" name="q4" value="c" id="q4c"><label for="q4c">//This is a comment</label><br/>
<input type="radio" name="q4" value="d" id="q4d"><label for="q4d">comment()</label><br/>
</ul>

<p class="question_5">5.How do we include a php file into another  </p>
<ul class="answers_5">
<input type="radio" name="q5" value="a" id="q5a"><label for="q5a">.inc</label><br/>
<input type="radio" name="q5" value="b" id="q5b"><label for="q5b">include(__.php);</label><br/>
<input type="radio" name="q5" value="c" id="q5c"><label for="q5c">(__.php).inc</label><br/>
<input type="radio" name="q5" value="d" id="q5d"><label for="q5d"> __.php include</label><br/>
</ul>

 <p id="submission"><input type="submit" value="Submit"></p>
</form>
 
</body>
</html>
