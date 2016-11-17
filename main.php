<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/main.css" >
        <title></title>
    </head>
    <body>
            <div class="container">
            <header>
                <img src="img/logo.ico" alt="it's logotype">
                <h1 class="title">Ma bibliothèque</h1>
                <?php include ('system/auth_form.php');?>
            </header>
            
            <nav>
                <ul>
                    <li><a href="?route=page1">Item 1</a></li>
                    <li><a href="?route=page2">Item 2</a></li>
                    <li><a href="?route=page3">Item 3</a></li>
                </ul>
            </nav>
            
            <?php
                if(isset($_GET['route'])){
                    $file_name = $_GET['route'] . '.php';
                    require 'data/' . $file_name;
                } else {
                    require 'data/main.php';
                }
                echo '<article>';
                //include ('system/auth_form.php');
                echo $header;
                echo $text;
                echo '</article>';
            ?>
            
            <footer>Copyright 2016</footer>
        </div>
    </body>
</html>
