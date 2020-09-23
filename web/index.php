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

.column:hover {opacity: 0}

.row:after {
  content: "";
  display: table;
  clear: both;
}



</style>
</head>

<body>

<h1>WELCOME TO MY WEBSITE!</h1>

<?php
?>
<p>My name is Landon Egbers and my favorite way of getting to know people is through a method known as "The FORD method".  FORD is an acronym for Family, Occupation, Recreation, and Dreams.  This website contains those four labels below.  Mousing over each section will reveal a little bit more about who I am.</p>

<div class="row">
  <div class="column">
    <h1>Family</h2>
    <p>Some text..</p>
  </div>
  <div class="column">
    <h1>Occupation</h2>
    <p>Some text..</p>
  </div>
  <div class="column">
    <h1>Recreation</h2>
    <p>Some text..</p>
  </div>
  <div class="column">
    <h1>Dreams</h2>
    <p>Some text..</p>
  </div>
</div>

</body>
</html>
