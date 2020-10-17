<?php
    require "dbconnect.php";
        $db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Age</th>
        </tr>
    <?php
        try {
            $statement = $db->prepare('Select * FROM users ORDERBY lastname');
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $lastname = $row['lastname'];
                $firstname = $row['firstname'];
                $address = $row['address'];
                $city = $row['city'];
                $age = $row['age'];
                echo "<tr> <td> $lastname </td> </tr>";
            }
            } catch (Exception $ex) {
            echo "$ex";
            }
    ?>
    </table>
</body>
</html>