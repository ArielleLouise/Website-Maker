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

    if (!isset($_SESSION['fname'], $_SESSION['lname'], $_SESSION['header_txt'], $_SESSION['dscrptn'], $_SESSION['fontStyle_header'], $_SESSION['fontSize_header'], $_SESSION['fontStyle_dscrptn'], $_SESSION['fontSize_dscrptn'], $_SESSION['color'], $_SESSION['txt_color']))
    {
        header('Location: Index.php');
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

        <style> <?php include 'Style2.css'; ?> </style>
        <style>

            html::-webkit-scrollbar
            {
                width: .8rem;
            }

            html::-webkit-scrollbar-thumb
            {
                background: gray;
            }

            *
            {
                transition: 0.2s linear;
            }

            body
            {
                background-color: <?php echo $_SESSION['color'] ?>;
            }

            /* NAV BAR */

            .Nav h1
            {
                font-size: 20px;
                margin-top: 40px;
                color: <?php echo $_SESSION['txt_color'] ?>;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                cursor: pointer;
            }

            .Nav h1::before
            {
                content: '';
                position: absolute;
                bottom: 0px;
                left: 0;
                width: 0%;
                height: 3px;
                background-color: <?php echo $_SESSION['txt_color'] ?>;
                transition: all .5s;
            }

            .Nav h1:hover::before
            {
                width: 100%;
            }

            .Name
            {
                position: absolute;
                top: 20px;
                left: 225px;
            }

            .Name h1
            {
                text-transform: capitalize;
            }

            .About_Me
            {
                position: absolute;
                top: 20px;
                left: 500px;
            }

            .Contact
            {
                position: absolute;
                top: 20px;
                left: 650px;
            }

            /* RIGHT NAV BAR */

            .Txt_File2
            {
                margin: 0;
                position: absolute;
                top: 47px;
                left: 73%;
            }

            .History2
            {
                margin: 0;
                position: absolute;
                top: 47px;
                left: 62%;
            }

            button
            {
                background-color: #212121;
                height: 50px;
                width: 200px;

                border: solid;
                border-radius: 50px;

                text-align: center;
                text-decoration: none;
                color: #eeeeee;

                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;
                font-size: 17px;

                cursor: pointer;
            }

            button:hover
            {
                color: gray;
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
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 17px;
                color: <?php echo $_SESSION['txt_color'] ?>;
                text-decoration: none;
            }

            /* RIGHT NAV BAR ANIMATION */

            .Home a::before
            {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 0;
                width: 0%;
                height: 3px;
                background-color: <?php echo $_SESSION['txt_color'] ?>;
                transition: all .5s;
            }

            .Home a:hover::before
            {
                width: 100%;
            }

            .Output
            {
                margin-top: 500px;
                display: flex;
                justify-content: center;
            }

            /* IMAGE INPUT */

            .User_img
            {
                width: 550px;
                height: 550px;
                margin-top: -250px;
                margin-bottom: 120px;
                margin-left: -700px;
                margin-right: 100px;
            }

            .User_img img
            {
                border-radius: 50%;
                max-width: 100%;
                max-height: 100%;
            }

            /* TEXT INPUT */

            .User_Text
            {
                max-width: 550px;
                margin-top: -250px;
                margin-right: -500px;
            }

            /* HEADER TEXT INPUT */

            .User_Text h1
            { 
                font-family: <?php echo $_SESSION['fontStyle_header']; ?>;
                font-size: <?php echo $_SESSION['fontSize_header']; ?>px;

                color: <?php echo $_SESSION['txt_color'] ?>;

                font-weight: <?php echo ($_SESSION['bold_header'] === 'bold') ? 'bold' : 'normal'; ?>;
                font-style: <?php echo ($_SESSION['italic_header'] === 'italic') ? 'italic' : 'normal'; ?>;
                text-decoration: <?php echo ($_SESSION['underline_header'] === 'underline') ? 'underline' : 'none'; ?>;
            }

            /* DESCRIPTION TEXT INPUT */

            .User_Text p
            { 
                font-family: <?php echo $_SESSION['fontStyle_dscrptn']; ?>;
                font-size: <?php echo $_SESSION['fontSize_dscrptn']; ?>px;

                color: <?php echo $_SESSION['txt_color'] ?>;

                font-weight: <?php echo ($_SESSION['bold_dscrptn'] === 'bold') ? 'bold' : 'normal'; ?>;
                font-style: <?php echo ($_SESSION['italic_dscrptn'] === 'italic') ? 'italic' : 'normal'; ?>;
                text-decoration: <?php echo ($_SESSION['underline_dscrptn'] === 'underline') ? 'underline' : 'none'; ?>;
            }

        </style>

        <script defer src = "Script.js"> </script>

    </head>

    <body>

        <div class = "Nav">

            <div class = "Name">

                <h1> <?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?> </h1>

            </div>

            <div class = "About_Me">

                <h1> ABOUT ME </h1>

            </div>

            <div class = "Contact">

                <h1> CONTACT </h1>

            </div>

        </div>

        <div class = "Txt_File">

            <div class = "Txt_File2">

                <script>

                    function generateHTMLFile()
                    {
                        var doctype = "<!DOCTYPE html>\n";

                        var clonedDocument = document.documentElement.cloneNode(true);

                        var button = clonedDocument.getElementsByTagName('button');
                        for (var i = button.length - 1; i >= 0; i--)
                        {
                            button[i].parentNode.removeChild(button[i]);
                        }

                        var script = clonedDocument.getElementsByTagName('script');
                        for (var i = script.length - 1; i >= 0; i--)
                        {
                            script[i].parentNode.removeChild(script[i]);
                        }

                        var a = clonedDocument.getElementsByTagName('a');
                        for (var i = a.length - 1; i >= 0; i--)
                        {
                            a[i].parentNode.removeChild(a[i]);
                        }
                        
                        var htmlContent = clonedDocument.outerHTML;

                        var fullHTMLContent = doctype + htmlContent;

                        var blob = new Blob([fullHTMLContent], { type: 'text/plain' });

                        var link = document.createElement('a');

                        link.href = URL.createObjectURL(blob);
                        link.download = 'Output.html';
                        link.click();

                        URL.revokeObjectURL(link.href);
                    }

                </script>

                <button onclick = "generateHTMLFile()"> GENERATE CODE </button> 

            </div>

        </div>

        <div class = "History">

            <div class = "History2">

                <a href = "History.php">

                    <button> HISTORY </button> 

                </a>

            </div>

        </div>

        <div class = "Home">
            
            <a href = "Index.php"> HOME </a>

        </div>

        <div class = "Output">

            <div class = "User_img">

                <?php
                
                    if (isset($_SESSION['uploaded_image']))   
                    {
                        $image = $_SESSION['uploaded_image'];
                        $imagePath = 'Uploads/' . $image;
                    
                        if (file_exists($imagePath))
                        {
                            echo "<img src = '{$imagePath}' alt = 'Uploaded Image'>";
                        }
                        
                        else
                        {
                            //
                        }
                    }
                    
                    else
                    {
                        //
                    }

                ?>

            </div>

            <div class = "User_Text">

                <h1 class = "Animated"> <?php echo $_SESSION['header_txt']; ?> </h1>

                <p class = "Animated"> <?php echo $_SESSION['dscrptn']; ?> </p>

            </div>

        </div>

    </body>

</html>