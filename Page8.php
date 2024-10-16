<?php

    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        header('Location: Login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image']))
    {
        $uploadDir = 'Uploads/';

        if (!is_dir($uploadDir))
        {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = basename($_FILES['image']['name']);
        $targetFilePath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath))
        {
            $_SESSION['uploaded_image'] = $fileName;
        }

        else
        {
            //
        }
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

        <link rel = "stylesheet" href = "Style.css">

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

        .Header
        {
            margin: auto;
            margin-top: 75px;
            text-align: center;
        }

        .Header img
        {
            width: 500px;
            height: auto;
        }

        .Options
        {
            margin-top: 150px;
        }

        .Output
        {
            margin: auto;
            
            background-color: #141414;

            height: 100px;
            width: 400px;

            text-align: center;
            vertical-align: middle;
            line-height: 100px;
            cursor: pointer;

            border: solid;
            border-radius: 50px;
        }

        .Restart
        {
            margin: auto;
            margin-top: 70px;
            
            background-color: #141414;

            height: 100px;
            width: 400px;

            text-align: center;
            vertical-align: middle;
            line-height: 100px;
            cursor: pointer;

            border: solid;
            border-radius: 50px;
        }
 
        .Back
        {
            display: flex;
            justify-content: center;
        }

        button
        {
            margin-top: 70px;
            
            background-color: #141414;

            height: 100px;
            width: 250px;

            text-align: center;
            vertical-align: middle;

            border: solid;
            border-radius: 50px;

            text-decoration: none;
            color: #eeeeee;
            font-weight: bold;
            font-size: 30px;
            cursor: pointer;
        }

        a
        {
            text-decoration: none;
            color: #eeeeee;
            font-weight: bold;
            font-size: 30px;
        }

        .Output:hover
        {
            color: gray;
        }

        .Restart:hover
        {
            color: gray;
        }

        .Output:hover a
        {
            color: gray;
        }

        .Restart:hover a
        {
            color: gray;
        }

        button:hover
        {
            color: gray;
        }

    </style>

    <body>

        <div class = "Header">

            <a href = "Index.php"> <img src = "IMGs/AP1.png" href = "Index.php"> </a>

        </div>

        <div class = "Options">
            
            <div class = "Output">

                <a href = "Output.php"> Generate Website </a>

            </div>
        
            <div class = "Restart">

                <a href = "Page1.php"> Restart </a>
                
            </div>

            <div class = "Back">

                <button type = "button" onclick = "history.back()"> Back </button>
                
            </div>

        </div>
        
    </body>

</html>