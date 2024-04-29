
<?php

class NavBar{
    public function __construct(){

    }

    public function show_navbar(){
        echo '
        <ul class="navbar">
            <li><a href="index.php" class="tab">Home</a></li>
            <li><a href="shop.php" class="tab">Shop</a></li>
            <li><a href="index.php" class="logo"><img src="./images/PK_Logo_Transparent.png" width="60" height="70" alt="The Pirate Knight Logo"></a></li>
            <li><a href="about.php" class="tab">About</a></li>
            <li><a href="contact.php" class="tab">Contact</a></li>
        </ul>';
    }
    
}

$navbar = new NavBar();
?>