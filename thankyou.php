<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe & Kayak</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
</head>
<body>
    <header class="header-bg">
        <div id="logo">
            <img src="img/paddle-white.png"> 
            <h1>Halifax Canoe & Kayak</h1>
        </div>
        <?php
            $file = file_get_contents('menu.html', true);
            echo "$file";
        ?>
    </header>
    <main class="container">

            <div id="header-banner">
                <h1>Book an Adventure</h1>
            </div>
            <div class="form-content">
                

            <?php
               $email = htmlspecialchars($_GET["email"] ?? "", ENT_QUOTES);
               $location = htmlspecialchars($_GET["location"] ?? "", ENT_QUOTES);
               $date = htmlspecialchars($_GET["tripDate"] ?? "", ENT_QUOTES);

               echo "<div> 
               <h1>Thank you</h1>
               <p>Thank you: $email</p>
               <p>We will contact you about the $location trip on the $date</p> 
               </div>";
            ?>
                
    </main>

    <footer>
        &copy; 2022 - All rights reserved.
    </footer>
    <script src="main.js"></script>
</body>
</html>