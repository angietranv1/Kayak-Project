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
        <div class="menu">
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
        </div>
    </header>
    <main class="container">

            <div id="header-banner">
                <h1>Book an Adventure</h1>
            </div>
            <div class="form-content">
                <h1>Adventure Reservation</h1>
                <p>Just Some Quick Details:</p>
            </div>
            <div class="form-fields">
                <form id="booking" name="booking" method="GET">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br>
                    <label for="location">Location</label>
                    <select id="location" name="location">
                        <option>Select an option</option>
                        <option>Halifax Adventure</option>
                        <option>Sydney Adventure</option>
                        <option>PEI Adventure</option>
                    </select><br>
                    <label for="tripDate">Trip Date:</label>
                    <input type="date" id="tripDate" name="tripDate"><br>
                    <input type="button" value="Submit" id="submit-button">
                </form>
            </div>
    </main>

    <footer>
        &copy; 2022 - All rights reserved.
    </footer>
    <script src="main.js"></script>
</body>
</html>