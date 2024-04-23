
<?php include "./filter_string.php"; ?>

<?php  
        session_start();
        $username = $_SESSION["username"] ?? "";
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

    <title>Contact Pirate Knight</title>
</head>
<body>
    
    <ul class="navbar">
        <li><a href="index.html" class="tab">Home</a></li>
        <li><a href="shop.html" class="tab">Shop</a></li>
        <li><a href="index.html" class="logo"><img src="images/PK_Logo_Transparent.png" width="60" height="70" alt="The Pirate Knight Logo"></a></li>
        <li><a href="about.html" class="tab">About</a></li>
        <li><a href="contact.php" class="tab">Contact</a></li>
    </ul>

    <h1 class="text-border" id="main-heading">Contact</h1>

    <?php
        $initialVal = ["name" => "", "fav_num" => '', "message" => ""];
        $errors = ["name" => "", "fav_num" => '-1', "message" => ""];
        $message = "";

        //post form to email service
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $initialVal["name"] = $_POST["name"];
            $initialVal["fav_num"] = $_POST["fav_num"];
            $initialVal["message"] = $_POST["message"];

            $errors["name"] = check_string($initialVal['name'],12) ? "" : "Name must be between 1 and 12 characters";
            $errors["fav_num"] = check_number($initialVal['fav_num'],1,5) ? "" : "Number must be between 1 and 5";
            $errors["message"] = check_string($initialVal['message'],200) ? "" : "Message must be between 1 and 200 characters";

            if(!$errors["name"]) setcookie("user_name",$initialVal["name"]);

            $invalid = implode($errors);
            if($invalid){
                $message = "Correct the following errors: ";
            }
            else{
                $message = "Form Submitted!";
            }
        }


        if($_COOKIE["user_name"]){
            echo "Welcome back, ".htmlspecialchars( $_COOKIE["user_name"] )."!<br>";
        }
        if($message == "Form Submitted!"){
            echo $message;
        }
        else {?>

    <span class="errors" style="color: red;"><?= $message?></span><br>
    <form class="text_input" action="#" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name ="name" class="text_input" value=<?= htmlspecialchars($initialVal["name"])?>><br>
            <span class="errors" color="red"><?= $errors['name']?></span><br>
        <label for="fav_num" >Favorite Number:</label><br>
        <input type="number" id="fav_num" name = "fav_num" class="text_input" value=<?= htmlspecialchars($initialVal["fav_num"])?>><br>
            <span class="errors" color="red"><?= $errors['fav_num']?></span><br>
        <label for="message_input" >Message:</label><br>
        <textarea id="message_input" value=<?= htmlspecialchars($initialVal["message"])?> class="text_input" name="message" rows="4" cols="50" maxlength="210"></textarea><br>
            <span class="errors" color="red"><?= $errors['message']?></span><br>
        <input type="submit"><br>
    </form>

    <?php } ?>

    <!-- Text input box 
    <br>
    <textarea id="message_input" class="text_input" name="freeform" rows="4" cols="50" maxlength="210"></textarea>
    <br>
    <button class="text_input" id="send_mail_button">Send!</button>
    -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Check if jQuery is loaded from CDN, if not, load it from local
        if (typeof jQuery == 'undefined') {
            document.write('<script src="js/jquery-3.7.1.min.js"><\/script>');
        }
    </script>

    <script type="module" src="js/contact.js"></script>

    
</body>
</html>