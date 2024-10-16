<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['txt_color'] = $_POST['txt_color'];
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

        .FontDecor_Input
        {
            display: flex;
            align-items: center;
            justify-content: center;

            margin-top: 40px;
        }

        .Header_Txt
        {
            background-color: #141414;
            height: 400px;
            width: 500px;
            border-radius: 50px;

            margin: auto;
            margin-right: 50px;
            margin-top: 100px;
            padding-top: 50px;
        }

        .Header_Txt h3
        {
            color: #eeeeee;
            font-size: 30px;
            text-align: center;
            line-height: -100px;
        }


        .Header_Txt label
        {
            color: #eeeeee;
            font-size: 30px;
            text-align: left;
            margin-left: 250px;
        }

        .Header_Txt input
        {
            margin-top: 30px;
            margin-left: 140px;
            margin-right: -200px;
            width: 400px;
        }

        .Dscrptn_Txt
        {
            background-color: #141414;
            height: 400px;
            width: 500px;
            border-radius: 50px;

            margin: auto;
            margin-left: 50px;
            margin-top: 100px;
            padding-top: 50px;
        }

        .Dscrptn_Txt h3
        {
            color: #eeeeee;
            font-size: 30px;
            text-align: center;
            line-height: -100px;
        }

        .Dscrptn_Txt label
        {
            color: #eeeeee;
            font-size: 30px;
            text-align: left;
            margin-left: 250px;
        }

        .Dscrptn_Txt input
        {
            margin-top: 30px;
            margin-left: 140px;
            margin-right: -200px;
            width: 400px;
        }

        button
        {
            background-color: #212121;
            width: 200px;
            height: 100px;
            margin-top: 100px;

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

        input[type = 'checkbox']
        {
            height: 25px;
            width: 25px;
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

        <h2> Choose your font decoration </h2>

        <div class = "Input">

            <form action = "Page7.php" method = "POST">   

                <div class = "FontDecor_Input">

                    <div class = "Header_Txt">

                        <h3> Header Text </h3>
                        <br>
                                  
                        <input type = "checkbox" name = "bold_header" value = "bold">
                        <label for = "bold_header"> Bold </label>
                                        
                        <br>

                        <input type = "checkbox" name = "italic_header" value = "italic">
                        <label for = "italic_header"> Italic </label>

                        <br>
                        
                        <input type = "checkbox" name = "underline_header" value = "underline"> 
                        <label for = "underline_header"> Underlined </label>   

                        <br>

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

                    <div class = "Dscrptn_Txt">

                        <h3> Description </h3>
                        <br>

                        <input type = "checkbox" name = "bold_dscrptn" value = "bold">
                        <label for = "bold_dscrptn"> Bold </label>
                                        
                        <br>

                        <input type = "checkbox" name = "italic_dscrptn" value = "italic">
                        <label for = "italic_dscrptn"> Italic </label>
                        
                        <br>

                        <input type = "checkbox" name = "underline_dscrptn" value = "underline"> 
                        <label for = "underline_dscrptn"> Underlined </label>   

                        <br>

                    </div>

                </div>

            </form>

        </div>

    </body>

</html>