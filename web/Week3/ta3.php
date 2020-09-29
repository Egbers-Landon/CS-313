<!DOCTYPE html>
<html>
<body>

Welcome <?php echo $_POST["fname"]; ?>
<?php echo $_POST["lname"]; ?><br>
Email: <a href="mailto:<?php echo $_POST["maile"]; ?>"><?php echo $_POST["maile"]; ?></a><br>
Major: <?php echo $_POST["major"]; ?><br>
Comments: <?php echo $_POST["comments"]; ?><br>
Countries Visited: <?php echo $_POST["continent"]; ?><br>


</body>
</html>