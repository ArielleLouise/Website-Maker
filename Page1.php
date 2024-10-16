<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">

        <title> AlanPress </title>

        <meta name = "description" content="">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

    </head>
    
    <style>

        *
        {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: 0.2s linear;
        }

        body
        {
            background-color: #eeeeee;
        }

        /* NAV BAR */

        .Header
        {
            position: absolute;
            top: 30px;
            left: 50px;
        }

        .Header img
        {
            width: 300px;
            height: auto;
        }

        .Home
        {
            position: absolute;
            top: 60px;
            right: 200px;
        }

        .Home a
        {
            font-weight: bold;
            font-size: 17px;
            color: #141414;
            text-decoration: none;
        }

        /* NAV BAR ANIMATION */

        .Home a::before
        {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 0%;
            height: 3px;
            background-color: #141414;
            transition: all .5s;
        }

        .Home a:hover::before
        {
            width: 100%;
        }

        /* ---------------- */

        h2
        {
            color: #141414;
            text-align: center;
            margin-top: 200px;
            margin-bottom: -70px;
            font-size: 30px;
        }

        .Name_Input
        {
            background-color: #141414;
            height: 500px;
            width: 1000px;
            border-radius: 50px;

            margin: auto;
            margin-top: 100px;

            text-align: center;
            padding-top: 50px;
        }

        .Name_Input label
        {
            color: #eeeeee;
            font-size: 25px;
        }

        .Name_Input input
        {
            margin-top: 50px;
            width: 600px;
            padding: 15px;
            border-radius: 50px;
        }

        input[type = 'text']
        {
            font-size: 20px;
            text-align: center;
            border: none;
        }

        input[type = 'submit']
        {
            background-color: #212121;
            border: solid;
            color: #eeeeee;
            font-size: 20px;
            font-weight: bold;
            width: 150px;
            cursor: pointer;
        }

        input[type = 'submit']:hover
        {
            color: gray;
        }

    </style>

    <body>

        <!-- NAV BAR -->

        <div class = "Header">

            <a href = "Index.php"> <img src = "IMGs/AP1.png" href = "Index.php"> </a>

        </div>

        <div class = "Home">
            
            <a href = "Index.php"> HOME </a>

        </div>

        <h2> Input your name </h2>

        <div class = "Name_Input">

            <form action = "Page2.php" method = "POST">

                <div class = "Fname_input">

                    <label for = "fname"> First name </label>
                    </br>
                    <input type = "text" name = "fname" id = "fname" required>

                </div>

                </br></br>

                <div class = "Lname_input">

                    <label for = "lname"> Last name </label>
                    </br>
                    <input type = "text" name = "lname" id = "lname" required>

                </div>

                </br>

                <div class = "Submit_btn">

                    <input type = "submit" value = "Next">

                </div>

            </form>

        </div>

    </body>

</html>