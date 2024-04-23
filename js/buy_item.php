<?php
    include "database-connection.php";

    $item_name = $_GET['name']; 

    $sql = "UPDATE store_items SET quantity=quantity-1 WHERE name=:item;";
    $statement = $pdo->prepare($sql);
    $statement->execute(['item'=>$item_name]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchased</title>
</head>
<body>

<p>Item purchased! Click <a href="../shop.php">here</a> to go back!</p>
    
</body>
</html>