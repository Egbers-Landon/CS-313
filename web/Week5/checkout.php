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
    <body>
        <h1>Checking Out</h1>
        <p><button style="float:right;" onclick="document.location='https://salty-lake-55999.herokuapp.com/Week5/cart.php'">View Cart</button></p><br>
        <p><button style="float:right;" onclick="document.location='https://salty-lake-55999.herokuapp.com/Week5/VGS.html'">Return to Shopping</button></p>
        <form action="confirm.php" method="post">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br>
            <label for="city">City:</label>
            <input type="text" id="city" name="city"><br>
            <label for="state">State:</label>
            <input type="text" id="state" name="state"><br>
            <label for="zip">Zip Code:</label>
            <input type="text" id="zip" name="zip"><br>
            
            <input type="submit" value="Submit">
        </form>

    </body>
</html>