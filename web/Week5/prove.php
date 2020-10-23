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
    <table class="table table-striped">
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Age</th>
        </tr>
    <?php
        try {
            $statement = $db->prepare('Select * FROM Users ORDER BY lastname');
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $lastname = $row['lastname'];
                $firstname = $row['firstname'];
                $addresss = $row['addresss'];
                $city = $row['city'];
                $age = $row['age'];
                echo "<tr> <td> $lastname </td> <td>$firstname</td> <td>$addresss</td> <td>$city</td> <td>$age</td> </tr>";
            }
            } catch (Exception $ex) {
            echo "$ex";
            }

            try {
                $statement = $db->prepare('Select * FROM Orders ORDER BY OrderID');
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $OrderID = $row['OrderID'];
                    $UserID = $row['UserID'];
                    echo "<tr> <td> $OrderID </td> <td>$UserID</td> </tr>";
                }
                } catch (Exception $ex) {
                echo "$ex";
                } 

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