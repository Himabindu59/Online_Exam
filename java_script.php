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
<form action = "resj.php" method = "post">
<p class="question_1">1.Inside which HTML element do we put the JavaScript? <..></p>
<ul class="answers_1">
<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">script</label><br/>
<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">javascript</label><br/>
<input type="radio" name="q1" value="c" id="q1c"><label for="q1c">js</label><br/>
<input type="radio" name="q1" value="d" id="q1d"><label for="q1d">scripting</label><br/>
</ul>

<p class="question_2">2.Where is the correct place to insert a JavaScript?</p>
<ul class="answers_2">
<input type="radio" name="q2" value="a" id="q2a"><label for="q2a">in head section</label><br/>
<input type="radio" name="q2" value="b" id="q2b"><label for="q2b">in body section</label><br/>
<input type="radio" name="q2" value="c" id="q2c"><label for="q2c">at the end of document</label><br/>
<input type="radio" name="q2" value="d" id="q2d"><label for="q2d">in both head and body section</label><br/>
</ul>
 

 <p class="question_3">3.How do you write "Hello World" in an alert box? ....("Hello World");</p>
<ul class="answers_3">
<input type="radio" name="q3" value="a" id="q3a"><label for="q3a">alert</label><br/>
<input type="radio" name="q3" value="b" id="q3b"><label for="q3b">alertboxing</label><br/>
<input type="radio" name="q3" value="c" id="q3c"><label for="q3c">pop</label><br/>
<input type="radio" name="q3" value="d" id="q3d"><label for="q3d">push</label><br/>
</ul>
 
 <p class="question_4">4.How can you add a comment in a JavaScript? </p>
<ul class="answers_4">
<input type="radio" name="q4" value="a" id="q4a"><label for="q4a">'This is a comment'</label><br/>
<input type="radio" name="q4" value="b" id="q4b"><label for="q4b"> "This is a comment"</label><br/>
<input type="radio" name="q4" value="c" id="q4c"><label for="q4c">//This is a comment</label><br/>
<input type="radio" name="q4" value="d" id="q4d"><label for="q4d">comment()</label><br/>
</ul>

<p class="question_5">5.How do you round the number 7.25, to the nearest integer?</p>
<ul class="answers_5">
<input type="radio" name="q5" value="a" id="q5a"><label for="q5a">Math.round(7.25);</label><br/>
<input type="radio" name="q5" value="b" id="q5b"><label for="q5b">round(7.25);</label><br/>
<input type="radio" name="q5" value="c" id="q5c"><label for="q5c">rnd(7.25);</label><br/>
<input type="radio" name="q5" value="d" id="q5d"><label for="q5d">Math.rnd(7.25);</label><br/>
</ul>

 <p id="submission"><input type="submit" value="Submit"></p>
</form>
 
</body>
</html>
