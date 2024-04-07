<?php include 'js/store_item.php'?>

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