<?php include 'js/store_item.php'?>
<?php include 'js/database-connection.php'?>

<?php 

    $sql = "SELECT * FROM store_items;";
    //$statement = $pdo->prepare($sql);
    //$statement->execute(['sign'=>$sign]);
    //$zodiac = $statement->fetch();

    $statement2 = $pdo->query($sql);
	$items = $statement2->fetchAll();

    $item1 = new Item($items[0]['name'], $items[0]['price'], $items[0]['quantity'],"the_pirate_knight.png");
    $item2 = new Item($items[2]['name'], $items[2]['price'], $items[2]['quantity'],"PK_color.JPEG");
    $item3 = new Item($items[3]['name'], $items[3]['price'], $items[3]['quantity'],"PK_Logo_Transparent.png");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Pirate Knight Store</title>
</head>
<body>
    
    <ul class="navbar">
        <li><a href="index.html" class="tab">Home</a></li>
        <li><a href="shop.php" class="tab">Shop</a></li>
        <li><a href="index.html" class="logo"><img src="images/PK_Logo_Transparent.png" width="60" height="70" alt="The Pirate Knight Logo"></a></li>
        <li><a href="about.html" class="tab">About</a></li>
        <li><a href="contact.html" class="tab">Contact</a></li>
    </ul>

    <h1 class="text-border" id="main-heading">Store</h1>
    
    <p>Order Pirate Knight here!</p>    

    <h1 id="availability"></h1>
    <p></p>

    <!-- Display Shop Items Available -->
    <div id="cards">
        <a href="js/show_item.php?name=<?= $item1->get_name() ?>">
            <div class="card">
            <img src= <?= "images/".$item1->get_image() ?> height="100">
            <h3><?= $item1->get_name() ?></h3>
            <h3>Price: $<?= $item1->get_price() ?></h3>
            <h3>Quantity: <?= $item1->get_quantity() ?></h3>
            </div>
        </a>

        <a href="js/show_item.php?name=<?= $item2->get_name() ?>">
        <div class="card">
        <img src= <?= "images/".$item2->get_image() ?> height="100">
        <h3><?= $item2->get_name() ?></h3>
        <h3>Price: $<?= $item2->get_price() ?></h3>
        <h3>Quantity: <?= $item2->get_quantity() ?></h3>
        </div></a>

        <a href="js/show_item.php?name=<?= $item3->get_name() ?>">
        <div class="card">
        <img src= <?= "images/".$item3->get_image() ?> height="100">
        <h3><?= $item3->get_name() ?></h3>
        <h3>Price: $<?= $item3->get_price() ?></h3>
        <h3>Quantity: <?= $item3->get_quantity() ?></h3>
        </div></a>
    </div>

    <h2 id="footnote"></h2>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Check if jQuery is loaded from CDN, if not, load it from local
        if (typeof jQuery == 'undefined') {
            document.write('<script src="js/jquery-3.7.1.min.js"><\/script>');
        }
    </script>

    <!--<script src="js/store.js"></script> 
    <script src="js/load-html-data.js"></script>
    <script src="js/load-xml-data.js"></script>
    <script src="js/load-json-data.js"></script>
    <script src="js/load-html2-data.js"></script>-->

    
</body>
</html>

<?php 

function show_item($clicked_item){
    header('Location: ./show_item.php');
}
/*
<div class="card">
        <img src= <?= "images/".$item1->get_image() ?> height="100">
        <h3><?= $item1->get_name() ?></h3>
        <h3><?= $item1->get_price() ?></h3>
        </div>

        <div class="card">
        <img src= <?= "images/".$item2->get_image() ?> height="100">
        <h3><?= $item2->get_name() ?></h3>
        <h3><?= $item2->get_price() ?></h3>
        </div>

        <div class="card">
        <img src= <?= "images/".$item3->get_image() ?> height="100">
        <h3><?= $item3->get_name() ?></h3>
        <h3><?= $item3->get_price() ?></h3>
        </div>
*/

?>