<?php 
    include "database-connection.php";

    
    $item_name = $_GET['name']; 

    $sql = "SELECT * FROM store_info WHERE name=:item;";
    $statement = $pdo->prepare($sql);
    $statement->execute(['item'=>$item_name]);
    $item_data = $statement->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Item</title>
</head>
<body>

    <h1><?= $item_data['name']; ?></h1>
    <p><?= $item_data['description']; ?></p>
    <br>
    <a href="buy_item.php?name=<?= $item_data['name'] ?>">
    <input type="button" value="Purchase">
    </a>
    
</body>
</html>