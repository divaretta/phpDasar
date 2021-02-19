<?php

$username = "root";
$password = "";
$host = "localhost";
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$result = mysqli_query($db, "SELECT * FROM t_foods");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Today's Meals </h1>
    <table border="1" cellpadding="15" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Preview</th>
        <th>Name</th>
        <th>Type</th>
        <th>Brand</th>
        <th>Price</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)):?>
    <tr>
        <td>1</td>
        <td><img src="images/<?= $row["preview_foods"] ?>" width="50"></td>
        <td><?= $row["name_foods"];?></td>
        <td><?= $row["type_foods"];?></td>
        <td><?= $row["brand_foods"];?></td>
        <td><?= $row["price_foods"];?></td>
    </tr>
   
    <?php endwhile;?>
    </table>
</body>
</html>