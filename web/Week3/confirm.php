<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <h1>Thank you for shopping!</h1>
        <p>Your order will be shipped to: </p><?php echo $_POST["address"] ?><br>
        <?php echo $_POST["city"] ?><br>
        <?php echo $_POST["state"] ?>
        <p>, </p>
        <?php echo $_POST["zip"] ?><br>
    </body>
</html>
