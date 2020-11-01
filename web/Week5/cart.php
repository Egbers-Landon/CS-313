<?php
    require "dbconnect.php";
        $db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <h1>Here are the items you have added to your cart</h1>
    <p><button style="float:right;" onclick="document.location='https://salty-lake-55999.herokuapp.com/Week5/checkout.php'">Checkout</button></p><br>
    <p><button style="float:right;" onclick="document.location='https://salty-lake-55999.herokuapp.com/Week5/VGS.html'">Return to Shopping</button></p><br><br>
    <table class="table table-striped">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Description</th>
        </tr>
    <?php
                try {
                    $statement = $db->prepare('Select * FROM Products ORDER BY ProductID');
                    $statement->execute();
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        $ProductID = $row['ProductID'];
                        $Productname = $row['Productname'];
                        $ProductPrice = $row['ProductPrice'];
                        $ProductDescription = $row['ProductDescription'];
                        echo "<tr> <td> $ProductID </td> <td>$Productname</td> <td>$ProductPrice</td> <td>$ProductDescription</td> </tr>";
                    }
                    } catch (Exception $ex) {
                    echo "$ex";
                    }
    ?>
    </table>
    </body>
</html>