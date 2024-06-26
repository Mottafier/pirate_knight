<?php include "js/navbar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">

    <title>The Pirate Knight</title>
</head>
<body>

    <?php $navbar->show_navbar(); ?>

    <h1 class="text-border" id="main-heading">The Pirate Knight</h1>
    <img src="images/the_pirate_knight.png" alt="The Pirate Knight title with speech-bubble text that reads  'In those days...'" class="mySlides">
    <img src="images/PK_color.JPEG" alt="The Pirate Knight title with a colored image of Tirose" class="mySlides">

    <p class="text-border">Welcome to the official Pirate Knight website! Here you can check out the latest Pirate Knight news and updates, order The Pirate Knight comics, and more!</p>

    <p class="author-signature">Site created by: David Motta <a href="mailto:david_motta@uri.edu">david_motta@uri.edu</a></p>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Check if jQuery is loaded from CDN, if not, load it from local
        if (typeof jQuery == 'undefined') {
            document.write('<script src="js/jquery-3.7.1.min.js"><\/script>');
        }
    </script>
    
    <script src="js/slideshow.js"></script>
</body>
</html>