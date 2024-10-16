<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    $username = $_SESSION['reg_user']['uname'];
    $password = $_SESSION['reg_user']['passwd'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    date_default_timezone_set('Asia/Taipei');
    $time = $_SESSION['login_time'];
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

        .Details
        {
            background-color: #141414;
            height: 500px;
            width: 1200px;
            border-radius: 50px;

            margin: auto;
            margin-top: 300px;
            padding-top: 50px;
        }

        .Details h2
        {
            color: #eeeeee;
            margin-top: 15px;
            margin-bottom: 90px;
            font-size: 35px;
            text-align: center;
        }

        .Details p
        {
            color: #eeeeee;
            font-size: 27px;
            margin-left: 70px;
            margin-right: 70px;
            font-weight: bold;
        }

        .Details span
        {
            font-weight: normal;
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

        <div class = "Details">

            <h2> Account Details </h2>

            <p> Username: <span> <?php echo htmlspecialchars($username) ?> </span> </p>

            <br>

            <p> Password: <span> <?php echo htmlspecialchars($password_hash) ?> </span> </p>

            <br>

            <p> Time Logged In: <span> <?php echo htmlspecialchars($time) ?> </span> </p>

        </div>

    </body>

</html>