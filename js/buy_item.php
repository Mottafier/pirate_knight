<?php
    include "database-connection.php";

    $item_name = $_GET['name']; 

    $sql = "UPDATE store_items SET quantity=quantity-1 WHERE name=:item;";
    $statement = $pdo->prepare($sql);
    $statement->execute(['item'=>$item_name]);

    header('Location: ../shop.php');

?>