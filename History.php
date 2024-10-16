<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    if (isset($_SESSION['fname'], $_SESSION['lname'], $_SESSION['header_txt'], $_SESSION['dscrptn'], $_SESSION['fontStyle_header'], $_SESSION['fontSize_header'], $_SESSION['fontStyle_dscrptn'], $_SESSION['fontSize_dscrptn'], $_SESSION['color'], $_SESSION['txt_color'], $_SESSION['bold_header'], $_SESSION['italic_header'], $_SESSION['underline_header'], $_SESSION['bold_dscrptn'], $_SESSION['italic_dscrptn'], $_SESSION['underline_dscprtn']))
    {
        //
    }

    $username = $_SESSION['reg_user']['uname'];
    $password = $_SESSION['reg_user']['passwd'];
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

        h2
        {
            color: #141414;
            text-align: center;
            margin-top: 200px;
            margin-bottom: -250px;
            font-size: 35px;
        }

        /* ---------------- */

        .Details_Cont
        {
            display: flex;
            gap: 1px;
        }

        .Details
        {
            background-color: #141414;
            height: 600px;
            width: 600px;
            border-radius: 50px;

            margin: auto;
            margin-top: 300px;

            text-align: center;
            padding-top: 50px;
        }

        .Details h2
        {
            color: #eeeeee;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 90px;
            font-size: 35px;
        }

        .Details p
        {
            color: #eeeeee;
            text-align: center;
            font-size: 17px;
            margin-left: 30px;
            margin-right: 30px;
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

        <h2> History </h2>

        <div class = "Details_Cont">

            <div class = "Details">

                <p> Name: <?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?> </p>

                <br>

                <p> Header Text: <?php echo $_SESSION['header_txt'] ?> </p>

                <p> Header Text: <?php echo $_SESSION['dscrptn'] ?> </p>

                <br>

                <p> Font Style (Header): <?php echo $_SESSION['fontStyle_header'] ?> </p>

                <p> Font Size (Header): <?php echo $_SESSION['fontSize_header'] ?> </p>

                <br>

                <p> Font Style (Description): <?php echo $_SESSION['fontStyle_dscrptn'] ?> </p>

                <p> Font Size (Description): <?php echo $_SESSION['fontSize_dscrptn'] ?> </p>

            </div>

            <div class = "Details">

                <p> Background Color: <?php echo $_SESSION['color'] ?> </p>

                <p> Foreground Color: <?php echo $_SESSION['txt_color'] ?> </p>

                <br>

                <p> Font Decoration (Header) </p>

                <p> Bold: <?php echo ($_SESSION['bold_header'] === 'bold') ? 'Yes' : 'No'; ?> </p>
                <p> Italic: <?php echo ($_SESSION['italic_header'] === 'italic') ? 'Yes' : 'No'; ?> </p>
                <p> Underline: <?php echo ($_SESSION['underline_header'] === 'underline') ? 'Yes' : 'No'; ?> </p>

                <br>

                <p> Font Decoration (Description) </p>

                <p> Bold: <?php echo ($_SESSION['bold_dscrptn'] === 'bold') ? 'Yes' : 'No'; ?> </p>
                <p> Italic: <?php echo ($_SESSION['italic_dscrptn'] === 'italic') ? 'Yes' : 'No'; ?> </p>
                <p> Underline: <?php echo ($_SESSION['underline_dscrptn'] === 'underline') ? 'Yes' : 'No'; ?> </p>

            </div>
        
        </div>

    </body>

</html>