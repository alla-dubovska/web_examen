<?php 
$query = 'INSERT INTO user (`login`, `pass`, `role`, `name`) VALUES ("' . $_POST['login'] . ''
        . '", "' . $_POST['pass'] . '", "user", "' . $_POST['name'] . '");';

$res = mysqli_query($link, $query);
if($res) {
   echo '<h1>Inscription réussie.</h1><p>Vous pouvez vous connecter.</p>'; 
} else {
    echo '<h1>Erreur!</h1>'; 
}