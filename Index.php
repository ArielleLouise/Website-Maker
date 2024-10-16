<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    $username = $_SESSION['reg_user']['uname'];
    $password = $_SESSION['reg_user']['passwd'];

?>

<html>

    <head>

        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">

        <title> AlanPress </title>

        <meta name = "description" content="">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <style> <?php include 'Style.css'; ?> </style>
        <script defer src = "Script.js"> </script>

    </head>

    <body>

        <header class = "Nav_Bar">

            <a href = "Index.php" class = "Logo">

                <img src = "IMGs/AP1.png"> 

            </a>

            <nav class = "Nav_Menu">

                <ul>

                    <li> 

                        <a href = "#Home"> HOME </a>

                    </li>

                    <li> 

                        <a href = "#About"> ABOUT </a>

                    </li>

                    <li> 

                        <a href = "#Contact"> CONTACT </a>

                    </li>

                    <li>

                        <a href = "Profile.php" id = "User"> <?php echo htmlspecialchars($username); ?> </a>

                    </li>
                    

                    <li>

                        <a href = "Logout.php"> LOGOUT </a>

                    </li>

                </ul>

            </nav>

        </header>

        <div class = "Container">

            <section id = "Home">

                <div class = "One_txt">

                    <h1> Portfolio for Everyone </h1>

                    <div class = "Animated">

                        <p> Make your own portfolio with a blink of an eye </p>

                    </div>

                </div>

                <div class = "Animated">

                    <div class = "Create">
                
                        <a href = "Page1.php"> Create your Website </a>

                    </div>

                </div>

                

            </section>

            <section id = "About">

                <div class = "Two_txt">

                    <h1> About Us </h1>

                    <p class = "Animated">

                        At AlanPress, we make it easy for you to create a personalized portfolio page.

                        <br><br>
                        
                        With simple tools, you can choose your own background & foreground color, font style, text size, and more, no coding needed!

                        <br><br>

                        Start building your portfolio today and make it truly yours with just a few clicks.
                    
                    </p>

                </div>

            </section>

            <section id = "Contact">

                <div class = "Three_txt">

                    <h1> Contact Us </h1>

                    <div class = "Animated">

                        <p> Email us </p>
                        <p> alanpress@hotmail.com </p>

                        <br>

                        <p> Telephone </p>
                        <p> 6969-XXX </p>

                    </div>

                    <div class = "Three_links Animated">
                    
                        <div class = "IG">
    
                            <a href = "" target = "_blank"> <img src = "IMGs/IG.png" width = "70px";> </a>
    
                        </div>
                        
                        <div class = "X">
    
                            <a href = "" target = "_blank"> <img src = "IMGs/X.png" width = "70px";> </a>
    
                        </div>
    
                        <div class = "FB">
    
                            <a href = "" target = "_blank"> <img src = "IMGs/FB.png" width = "70px";> </a>
    
                        </div>
                    
                    </div>

                </div>
            
            </section>

            <footer>

                <p> 2024 © AlanPress PH | All Rights Reserved </p>
                
            </footer>

        </div>

    </body>

</html>