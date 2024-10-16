<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['bold_header'] = isset($_POST['bold_header']) ? $_POST['bold_header'] : 'normal';
        $_SESSION['italic_header'] = isset($_POST['italic_header']) ? $_POST['italic_header'] : 'normal';
        $_SESSION['underline_header'] = isset($_POST['underline_header']) ? $_POST['underline_header'] : 'none';
        
        $_SESSION['bold_dscrptn'] = isset($_POST['bold_dscrptn']) ? $_POST['bold_dscrptn'] : 'normal';
        $_SESSION['italic_dscrptn'] = isset($_POST['italic_dscrptn']) ? $_POST['italic_dscrptn'] : 'normal';
        $_SESSION['underline_dscrptn'] = isset($_POST['underline_dscrptn']) ? $_POST['underline_dscrptn'] : 'none';
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
            margin-top: 250px;
            margin-bottom: -70px;
            font-size: 30px;
        }

        .Img_Input
        {
            background-color: #141414;
            height: 400px;
            width: 500px;
            border-radius: 50px;

            margin: auto;
            margin-top: 100px;

            text-align: center;
            padding-top: 50px;
        }

        .Img_Input label
        {
            color: #eeeeee;
            font-size: 25px;
        }

        .Img_Input input
        {
            margin-top: 100px;
        }

        button
        {
            background-color: #212121;
            width: 150px;
            padding: 15px;
            margin-top: 50px;

            border: solid;
            border-radius: 50px;

            text-align: center;
            text-decoration: none;
            color: #eeeeee;
            font-weight: bold;
            font-size: 20px;

            cursor: pointer;
        }

        button:hover
        {
            color: gray;
        }

        input[type = 'file']
        {
            font-size: 20px;
            color: #eeeeee;
            margin-left: 100px;
        }

        input[type = 'submit']
        {
            background-color: #212121;
            border: solid;
            border-radius: 50px;
            margin-top: 20px;
            padding: 15px;
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

        <h2> Input your image </h2>

        <div class = "Img_Input">

            <form action = "Page8.php" method = "POST" enctype = "multipart/form-data">

                <label for = "img"> Picture </label>

                <br>

                <input type = "file" id = "Image" name = "image" accept = "image/*">
                
                <br>

                <div class = "Opt">

                        <div class = "Submit_btn">

                            <button type = "button" onclick = "history.back()"> Back </button>

                        </div>

                        <div class = "Submit_btn">

                            <input type = "submit" value = "Next">

                        </div>

                    </div>

            </form>

        </div>

    </body>

</html>