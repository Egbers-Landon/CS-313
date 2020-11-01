<?php
    require "dbconnect.php";
        $db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</head>
    <body>
        <h1>Checking Out</h1>
        <p><button style="float:right;" onclick="document.location='https://salty-lake-55999.herokuapp.com/Week5/cart.php'">View Cart</button></p><br>
        <p><button style="float:right;" onclick="document.location='https://salty-lake-55999.herokuapp.com/Week5/VGS.html'">Return to Shopping</button></p>
        <form action="Confirm.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname"><br>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname"><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br>
            <label for="city">City:</label>
            <input type="text" id="city" name="city"><br>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age"><br>
            
            <input type="submit" value="Submit">
        </form>

    </body>
</html>