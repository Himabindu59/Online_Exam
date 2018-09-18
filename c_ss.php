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
<form action = "resc.php" method = "post">
<p class="question_1">1. What does CSS stand for?</p>
<ul class="answers_1">
<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Colorful Style Sheets</label><br/>
<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">Cascading Style Sheets</label><br/>
<input type="radio" name="q1" value="c" id="q1c"><label for="q1c">Computer Style Sheets</label><br/>
<input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Creative Style Sheets </label><br/>
</ul>

<p class="question_2">2. Where in an HTML document is the correct place to refer to an external style sheet?</p>
<ul class="answers_2">
<input type="radio" name="q2" value="a" id="q2a"><label for="q2a">in head section</label><br/>
<input type="radio" name="q2" value="b" id="q2b"><label for="q2b">in body section</label><br/>
<input type="radio" name="q2" value="c" id="q2c"><label for="q2c">at the end of document</label><br/>
<input type="radio" name="q2" value="d" id="q2d"><label for="q2d"> in the beginning of document</label><br/>
</ul>
 

 <p class="question_3">3. Which HTML tag is used to define an internal style sheet?<....></p>
<ul class="answers_3">
<input type="radio" name="q3" value="a" id="q3a"><label for="q3a">style</label><br/>
<input type="radio" name="q3" value="b" id="q3b"><label for="q3b">head</label><br/>
<input type="radio" name="q3" value="c" id="q3c"><label for="q3c">script</label><br/>
<input type="radio" name="q3" value="d" id="q3d"><label for="q3d">css</label><br/>
</ul>
 
 <p class="question_4">4.Which HTML attribute is used to define inline styles? </p>
<ul class="answers_4">
<input type="radio" name="q4" value="a" id="q4a"><label for="q4a">font</label><br/>
<input type="radio" name="q4" value="b" id="q4b"><label for="q4b">styles</label><br/>
<input type="radio" name="q4" value="c" id="q4c"><label for="q4c">style</label><br/>
<input type="radio" name="q4" value="d" id="q4d"><label for="q4d">class</label><br/>
</ul>

<p class="question_5">5.Which property is used to change the background color?</p>
<ul class="answers_5">
<input type="radio" name="q5" value="a" id="q5a"><label for="q5a">color</label><br/>
<input type="radio" name="q5" value="b" id="q5b"><label for="q5b">background-color</label><br/>
<input type="radio" name="q5" value="c" id="q5c"><label for="q5c">bgcolor</label><br/>
<input type="radio" name="q5" value="d" id="q5d"><label for="q5d">bcolor</label><br/>
</ul>

 <p id="submission"><input type="submit" value="Submit"></p>
</form>
 
</body>
</html>
