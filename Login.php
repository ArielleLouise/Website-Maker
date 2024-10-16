<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = trim($_POST['uname']);
        $password = trim($_POST['passwd']);
    
        if (!empty($username) && !empty($password))
        {
            if (isset($_SESSION['reg_user']))
            {
                $registeredUser = $_SESSION['reg_user'];
    
                if ($registeredUser['uname'] == $username && $registeredUser['passwd'] == $password)
                {
                    $_SESSION['logged_in'] = true;

                    date_default_timezone_set('Asia/Taipei');
                    $_SESSION['login_time'] = date('m/d/Y h:i:s A l');

                    header('Location: Index.php');
                    exit();
                }
                
                else
                {
                    $error = "Invalid username or password!";
                }
            }
            
            else
            {
                $error2 = "Accont doesn't exist!";
            }
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
            height: 530px;
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

        .Reg
        {
            margin-top: 20px;
        }

        .Reg a
        {
            color: #eeeeee;
            font-weight: bold;
            font-size: 15px;
            text-decoration: none;
        }

        .Reg a:hover
        {
            color: gray;
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

        <h2> Login </h2>

        <div class = "User_Input">

            <form action = "Login.php" method = "POST">

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

                <div class = "Err_msg">

                    <?php

                        if(isset($error))
                        {
                            echo "<p style = 'color: red; margin-bottom: -20px'> $error </p>";
                        }

                        if(isset($error2))
                        {
                            echo "<p style = 'color: red; margin-bottom: -20px'> $error2 </p>";
                        }

                    ?>

                </div>

                <div class = "Submit_btn">

                    <input type = "submit" value = "Login">

                </div>

                <div class = "Reg">

                    <a href = "Register.php"> Sign Up </a>

                </div>

            </form>

        </div>

    </body>

</html>