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
                    <li><a href="?route=page1">Accuil</a></li>
                    <li><a href="?route=page2">Mes livres</a></li>
                    <li><a href="?route=page3">Qui sommes-nous ?</a></li>
                </ul>
            </nav>
            
            <?php
                echo '<article>';
                if(isset($_GET['route'])){
                    $file_name = $_GET['route'] . '.php';
                    include 'data/' . $file_name;
                } else {
                    require 'data/page1.php';
                }
                echo '</article>';
            ?>
            
            <footer>Alla Dubovska & Iryna Balatiuk, 2016</footer>
        </div>
    </body>
</html>
