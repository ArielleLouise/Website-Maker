<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = trim($_POST['uname']);
        $password = trim($_POST['passwd']);
    
        if (!empty($username) && !empty($password))
        {
            $_SESSION['reg_user'] = ['uname' => $username, 'passwd' => $password];
    
            header('Location: Login.php');
            exit();
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

        h2
        {
            color: #141414;
            text-align: center;
            margin-top: 30px;
            margin-bottom: -70px;
            font-size: 30px;
        }

        .User_Input
        {
            background-color: #141414;
            height: 500px;
            width: 600px;
            border-radius: 50px;

            margin: auto;
            margin-top: 100px;

            text-align: center;
            padding-top: 50px;
        }

        .User_Input label
        {
            color: #eeeeee;
            font-size: 25px;
        }

        .User_Input input
        {
            margin-top: 50px;
            width: 300px;
            padding: 15px;
            border-radius: 50px;
        }

        input[type = 'text']
        {
            font-size: 20px;
            padding-left: 20px;
            border: none;
        }
        
        input[type = 'password']
        {
            font-size: 20px;
            padding-left: 20px;
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

        <div class = "Header">

            <img src = "IMGs/AP1.png">

        </div>

        <h2> Register </h2>

        <div class = "User_Input">

            <form action = "Register.php" method = "POST">

                <div class = "Uname_input">

                    <label for = "uname"> Username </label>
                    </br>
                    <input type = "text" name = "uname" id = "uname" required>

                </div>

                </br></br>

                <div class = "Passwd_input">

                    <label for = "passwd"> Password </label>
                    </br>
                    <input type = "password" name = "passwd" id = "passwd" required>

                </div>

                <div class = "Submit_btn">

                    <input type = "submit" value = "Sign Up">

                </div>

            </form>

        </div>

    </body>

</html>