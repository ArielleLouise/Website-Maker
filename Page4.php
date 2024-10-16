<?php

    session_start();
    
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['fontStyle_header'] = $_POST['fontStyle_header'];
        $_SESSION['fontSize_header'] = $_POST['fontSize_header'];
        $_SESSION['fontStyle_dscrptn'] = $_POST['fontStyle_dscrptn'];
        $_SESSION['fontSize_dscrptn'] = $_POST['fontSize_dscrptn'];
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

        <link rel= "stylesheet" href = "Style.css">

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
            margin-top: 250px;
            margin-bottom: -70px;
            font-size: 30px;
        }

        .TxtColor_slct
        {
            display: flex;
            align-items: center;
            justify-content: center;
            
            margin-top: 150px;
        }

        .Color_opt1
        {
            background-color: #141414;
            height: 350px;
            width: 400px;
            border-radius: 50px;
            color: #eeeeee;
            font-size: 25px;

            margin: auto;
            margin-right: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .Color_opt2
        {
            background-color: #141414;
            height: 350px;
            width: 400px;
            border-radius: 50px;
            color: #eeeeee;
            font-size: 25px;

            margin: auto;
            margin-left: 50px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .color-option
        {
            margin-bottom: 20px;
            margin-left: 100px;
        }

        .color-circle
        {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .red
        {
            background-color: red;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .green
        {
            background-color: green;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .blue
        {
            background-color: blue;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .cyan
        {
            background-color: cyan;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .magenta
        {
            background-color: magenta;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .yellow
        {
            background-color: yellow;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .pink
        {
            background-color: pink;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .violet
        {
            background-color: purple;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .white
        {
            background-color: white;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        .black
        {
            background-color: black;
            margin-left: 20px;
            border: 1px solid #eeeeee;
        }

        button
        {
            background-color: #212121;
            width: 200px;
            height: 100px;

            display: flex;
            justify-content: center;
            align-items: center;

            border: solid;
            border-radius: 50px;

            text-align: center;
            text-decoration: none;
            color: #eeeeee;

            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            font-size: 30px;

            cursor: pointer;
        }

        button:hover
        {
            color: gray;
        }

        input[type = "radio"]
        {
            margin-right: 20px;
            transform: scale(1.5);
        }

        input[type = 'submit']
        {
            display: flex;
            justify-content: center;
            align-items: center;
            
            background-color: #212121;
            border: solid;
            border-radius: 50px;
            color: #eeeeee;
            line-height: 10px;
            font-size: 30px;
            font-weight: bold;
            width: 200px;
            height: 100px;
            margin-top: 20px;
            cursor: pointer;
        }

        input[type = 'submit']:hover
        {
            color: gray;
        }

    </style>

    <script>

        if(window.history.replaceState)
        {
            window.history.replaceState(null, null, window.location.href);
        }

    </script>

    <body>

        <!-- NAV BAR -->

        <div class = "Header">

            <a href = "Index.php"> <img src = "IMGs/AP1.png" href = "Index.php"> </a>
        
        </div>

        <div class = "Home">
            
            <a href = "Index.php"> HOME </a>

        </div>

        <h2> Choose your background color </h2>

        <div class = "Input">

            <form action = "Page5.php" method = "POST">

                <div class = "TxtColor_slct">

                    <div class = "Color_opt1">

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Red" required> Red
                            <span class = "color-circle red"></span>

                        </div>

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Green"> Green
                            <span class="color-circle green"></span>

                        </div>

                        <div class = "color-option">
                                
                            <input type = "radio" name = "color" value = "Blue"> Blue
                            <span class = "color-circle blue"></span>

                        </div>

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Cyan"> Cyan
                            <span class = "color-circle cyan"></span>

                        </div>

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Magenta"> Magenta
                            <span class = "color-circle magenta"></span>

                        </div>

                    </div>

                    <br>

                    <div class = "Opt">

                        <div class = "Submit_btn">

                            <button type = "button" onclick = "history.back()"> Back </button>

                        </div>

                        <div class = "Submit_btn">

                            <input type = "submit" value = "Next">

                        </div>

                    </div>

                    <br>

                    <div class = "Color_opt2">

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Yellow"> Yellow
                            <span class = "color-circle yellow"></span>

                        </div>

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Pink"> Pink
                            <span class = "color-circle pink"></span>

                        </div>

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Purple"> Violet
                            <span class = "color-circle violet"></span>

                        </div>

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "White"> White
                            <span class = "color-circle white"></span>

                        </div>

                        <div class = "color-option">

                            <input type = "radio" name = "color" value = "Black"> Black
                            <span class = "color-circle black"></span>
                            
                        </div>

                    </div>

                </div>

            </form>

        </div>

    </body>

</html>