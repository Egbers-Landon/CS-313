<!DOCTYPE html>
<html>
<head>
<title>personal homepage</title>
<style>
body {
  background-image: url('https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,f_auto,fl_progressive,h_533,q_auto,w_800/v1561550231/article/R16641_image1');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

p {
  color: white;
  font-size: 30px;
  text-align: center;
  margin: 70px;
}

.hidden {
  display: none;
}

h1 {
  color: white;
  text-align: center;
}

.column {
  float: left;
  width: 23%;
  padding: 10px;
  height: 300px;
  text-align: center;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

#one:hover #family {
  display: block;
  transition: 2s;
}

#one:hover #fam {
  opacity: .8;
}

#two:hover #occupation {
  display: block;
  transition: 2s;
}

#two:hover #occ {
  opacity: .8;
}

#three:hover #recreation {
  display: block;
  transition: 2s;
}

#three:hover #rec {
  opacity: .8;
}

#four:hover #dream {
  display: block;
  transition: 2s;
}

#four:hover #dre {
  opacity: .8;
}

</style>
</head>

<body>

<h1>WELCOME TO MY WEBSITE!</h1>

<?php
?>
<p>My name is Landon Egbers and my favorite way of getting to know people is through a method known as "The FORD method".  FORD is an acronym for Family, Occupation, Recreation, and Dreams.  This website contains those four labels below.  Mousing over each section will reveal a little bit more about who I am.</p>

<div class="row">
  <div class="column" id="one";>
    <h1 id="fam">Family</h1>
    <p class="hidden" id="family">I have a Mother, a father, a sister and 2 brothers.
    We grew up in Fairfax, Virginia (which explains the background).</p>
  </div>
  <div class="column" id="two";>
    <h1 id="occ">Occupation</h1>
    <p class="hidden" id="occupation">I don't currently have a job, but I hope to work
    with HTML, CSS and JavaScript in web design in the very near future.</p>
  </div>
  <div class="column" id="three";>
    <h1 id="rec">Recreation</h1>
    <p class="hidden" id="recreation">I have always had a hard time describing what I like to do for fun,
    but to put it simply, I love competition.  I love any kind of card game, board game, video game, riddle
    or anything where I can win.</p>
  </div>
  <div class="column" id="four";>
    <h1 id="dre">Dreams</h1>
    <p class="hidden" id="dream">If money was never an issue for me, I would want to help people who
    struggle with addiction.  If I still had time and money, I would want to open up a scare house.
    </p>
  </div>
</div>

</body>
</html>
