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
<form action = "resh.php" method = "post">
<p class="question_1">1. What does HTML stand for?</p>
<ul class="answers_1">
<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Hyperlinks and Text Markup Language</label><br/>
<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">Hyper Text Markup Language</label><br/>
<input type="radio" name="q1" value="c" id="q1c"><label for="q1c"> Home Tool Markup Language</label><br/>
<input type="radio" name="q1" value="d" id="q1d"><label for="q1d"> Home Text Markup Language</label><br/>
</ul>

<p class="question_2">2. Who is making the Web standards?</p>
<ul class="answers_2">
<input type="radio" name="q2" value="a" id="q2a"><label for="q2a"> The World Wide Web Consortium</label><br/>
<input type="radio" name="q2" value="b" id="q2b"><label for="q2b">Microsoft</label><br/>
<input type="radio" name="q2" value="c" id="q2c"><label for="q2c"> Mozilla</label><br/>
<input type="radio" name="q2" value="d" id="q2d"><label for="q2d"> google</label><br/>
</ul>
 

 <p class="question_3">3. Choose the correct HTML element for the largest heading:<....></p>
<ul class="answers_3">
<input type="radio" name="q3" value="a" id="q3a"><label for="q3a"> h1</label><br/>
<input type="radio" name="q3" value="b" id="q3b"><label for="q3b">head</label><br/>
<input type="radio" name="q3" value="c" id="q3c"><label for="q3c"> h6</label><br/>
<input type="radio" name="q3" value="d" id="q3d"><label for="q3d"> heading</label><br/>
</ul>
 
 <p class="question_4">4.What is the correct HTML element for inserting a line break? <...></p>
<ul class="answers_4">
<input type="radio" name="q4" value="a" id="q4a"><label for="q4a"> break</label><br/>
<input type="radio" name="q4" value="b" id="q4b"><label for="q4b">br</label><br/>
<input type="radio" name="q4" value="c" id="q4c"><label for="q4c"> lb</label><br/>
<input type="radio" name="q4" value="d" id="q4d"><label for="q4d"> rb</label><br/>
</ul>

<p class="question_5">5.  Choose the correct HTML element to define important text? <..></p>
<ul class="answers_5">
<input type="radio" name="q5" value="a" id="q5a"><label for="q5a"> i </label><br/>
<input type="radio" name="q5" value="b" id="q5b"><label for="q5b">important</label><br/>
<input type="radio" name="q5" value="c" id="q5c"><label for="q5c"> imp</label><br/>
<input type="radio" name="q5" value="d" id="q5d"><label for="q5d"> im</label><br/>
</ul>

 <p id="submission"><input type="submit" value="Submit"></p>
</form>
 
</body>
</html>
