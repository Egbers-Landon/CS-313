<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <h1>Thank you for shopping!</h1>
        <p>
            Your order will be shipped to <?php echo $_post["address"] ?><br>
            <?php echo $_post["city"] ?><br>
            <?php echo $_post["state"] ?><br>
            <?php echo $_post["zip"] ?><br>
        </p>
    </body>
</html>
