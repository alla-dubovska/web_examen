<?php 
$is_read = 0;
if($_POST['is_read']) {
    $is_read = 1;
}
$query = 'INSERT INTO books VALUES (NULL, "' . $_POST['name'] . ''
        . '", "' . $_POST['author'] . '", "' . $_POST['comm'] .'", "-1", "' . $_SESSION['id'] . '", "'
        . $is_read . '");';
 
$res = mysqli_query($link, $query);
if($res) {
   echo '<h1>Ajouté réussie.</h1><p><a href="?route=page2">Mes livres</a></p>'; 
} else {
    echo '<h1>Erreur!</h1>'; 
}