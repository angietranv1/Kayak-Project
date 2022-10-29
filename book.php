
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
        <!-- <div class="menu">
            <nav class="main-menu">  
                <div class="main-nav-menu">
                    <a href="/">Home</a>
                    <a href="book.php">Book an Adventure</a>
                    <a href="admin.html">Admin</a>
                </div>
            </nav>
        </div>
        <div class="hamMenu">
           
            <img src="img/hamburger.png" width="40" height="40">
        
            <div class="nav-menu">
                <div class="nav-item"><a href="/">Home</a></div>
                <div class="nav-item"><a href="book.php">Book an Adventure</a></div>
                <div class="nav-item"><a href="admin.html">Admin</a></div>
            </div>
        </div> -->
    </header>
    <main class="container">

       

            <div id="header-banner">
                <h1>Book an Adventure</h1>
            </div>
            <div class="form-content">
                <h1>Adventure Reservation</h1>
                <p>Just Some Quick Details:</p>

                <?php
        $test = "before form";
        
        if (isset($_GET["submit_x"])) {
                $email = htmlspecialchars($_GET["email"] ?? "", ENT_QUOTES);
                $location = htmlspecialchars($_GET["location"] ?? "", ENT_QUOTES);
                $date = htmlspecialchars($_GET["tripDate"] ?? "", ENT_QUOTES);

        }
    ?>
            </div>
            <div class="form-fields">
                <form  id="booking" action="thankyou.php" method="get">
                <label for="email">Email:</label>    
                <input type="text" id="email" name="email"><br>
                    <label for="location">Location</label>
                    <select id="location" name="location">
                        <option value="">Select an option</option>
                        <option value="Halifax Adventure">Halifax Adventure</option>
                        <option value="Sydney Adventure">Sydney Adventure</option>
                        <option value="PEI Adventure">PEI Adventure</option>
                    </select><br>
                    <label for="tripDate">Trip Date:</label>
                    <input type="date" id="tripDate" name="tripDate"><br>
                    <input type="submit" value="submit" id="submit">
                </form>
            </div>
    </main>

    <footer>
        &copy; 2022 - All rights reserved.
    </footer>
    <script src="main.js"></script>
</body>
</html> 