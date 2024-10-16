<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['header_txt'] = $_POST['header_txt'];
        $_SESSION['dscrptn'] = $_POST['dscrptn'];
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
            margin-top: 200px;
            margin-bottom: -70px;
            font-size: 30px;
        }

        .Font_Input
        {
            display: flex;
            align-items: center;
            justify-content: center;

            margin-top: 40px;
        }

        .Header_Txt
        {
            background-color: #141414;
            height: 500px;
            width: 600px;
            border-radius: 50px;

            margin: auto;
            margin-right: 50px;
            margin-top: 100px;

            text-align: center;
            padding-top: 50px;
        }

        select
        {
            width: 400px;
            padding: 15px;
            border-radius: 50px;

            font-size: 22px;
            text-align: center;
            border: none;

            margin-right: auto;
            margin-left: auto;
            margin-top: 50px;
        }

        .Select_Opt
        {
            border-radius: 50px;
            overflow: hidden;
        }

        .Header_Txt h3
        {
            color: #eeeeee;
            text-decoration: underline;
            font-size: 25px;
            line-height: -100px;
        }


        .Header_Txt label
        {
            color: #eeeeee;
            font-size: 25px;
        }

        .Header_Txt input
        {
            margin-top: 50px;
            width: 400px;
            padding: 15px;
            border-radius: 50px;
        }

        .Dscrptn_Txt
        {
            background-color: #141414;
            height: 500px;
            width: 600px;
            border-radius: 50px;

            margin: auto;
            margin-left: 50px;
            margin-top: 100px;

            text-align: center;
            padding-top: 50px;
        }

        .Dscrptn_Txt h3
        {
            color: #eeeeee;
            text-decoration: underline;
            font-size: 25px;
            line-height: -100px;
        }

        .Dscrptn_Txt label
        {
            color: #eeeeee;
            font-size: 25px;
        }

        .Dscrptn_Txt input
        {
            margin-top: 50px;
            width: 400px;
            padding: 15px;
            border-radius: 50px;
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

        input[type = 'text']
        {
            font-size: 20px;
            text-align: center;
            border: none;
        }

        input[type = 'number']
        {
            font-size: 20px;
            text-align: center;
            width: 100px;
            border: none;
        }

        input[type = 'submit']
        {
            display: flex;
            justify-content: center;
            align-items: center;
            
            background-color: #212121;
            border-radius: 50px;
            border: solid;
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

        <h2> Input the font style and font size </h2>

        <div class = "Input">

            <form action = "Page4.php" method = "POST">

                <div class = "Font_Input">

                    <div class = "Header_Txt">

                        <h3> Header Text </h3>
                        <br>

                        <label for = "fontStyle_header"> Header Font Style </label>
                        <br>
                        <select name = "fontStyle_header" id = "fontStyle_header">

                            <option value = "Calibri"> Calibri </option>
                            <option value = "Times New Romans"> Times New Romans </option>
                            <option value = "Arial"> Arial </option>


                        </select>

                        <br><br>

                        <label for = "fontSize_header"> Header Font Size </label>
                        <br>
                        <input type = "number" name = "fontSize_header" id = "fontSize_header" required>

                    </div>

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

                        <label for = "fontStyle_dscrptn"> Header Font Style </label>
                        <br>
                        <select name = "fontStyle_dscrptn" id = "fontStyle_dscrptn">

                            <option value = "Calibri"> Calibri </option>
                            <option value = "Times New Romans"> Times New Romans </option>
                            <option value = "Arial"> Arial </option>


                        </select>

                        <br><br>

                        <label for = "fontSize_dscrptn"> Description Font Size </label>
                        <br>
                        <input type = "number" name = "fontSize_dscrptn" id = "fontSize_dscrptn" required>

                    </div>

                </div>  

            </form>

        </div>

    </body>

</html>