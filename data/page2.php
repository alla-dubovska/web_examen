<?php
if(!$_SESSION['role']) {
    echo '<h1>Mes livres</h1>';
    echo '<p>Pour utiliser le site, vous devez inscrire votre login et mot de passe.</p>';
} else {
    if(isset($_GET['mark_as_read'])) {
        $query = "UPDATE books SET is_read = \"1\" WHERE id = \"" . $_GET['mark_as_read'] . "\";";
        mysqli_query($link, $query);
    } else if(isset($_GET['mark_as_unread'])) {
        $query = "UPDATE books SET is_read = \"0\" WHERE id = \"" . $_GET['mark_as_unread'] . "\";";
        mysqli_query($link, $query);
    }
?> 
<form method="post" action="?route=page2">
    <select name="type_form">
<?php
    $selected = $_POST['type_form'];
    if(!$selected) {
        $selected = 0;
    }
    for ($i = 0; $i<3; $i++) {
        if($i == $selected) {
            echo '<option selected ';
        }
        else {
            echo '<option ';
        }
        switch ($i) {
            case 0:
                echo 'value="0">Tous mes livres</option>';
                break;
            
            case 1:
                echo 'value="1">Lire des livres</option>';
                break;
            
            case 2:
                echo 'value="2">Livres non lus</option>';
                break;
        }
    }
?>
    </select>
    <input type="submit" value="Ok" />
</form>
<?php       
$book = array();

$q = "SELECT * FROM books WHERE user_id = \"" . $_SESSION['id'] . "\"";

if($selected == 1) {
    $q = $q . ' AND is_read = 1';
} else if ($selected == 2) {
    $q = $q . ' AND is_read = 0';
}

$res = mysqli_query($link, $q);
echo '<table><caption><h1>Mes livres</h1></caption>
                    <tr><th></th>
                    <th>Le nom</th> 
                    <th>Le auteur</th> 
                    <th>L\'évaluation</th>
                    <th>Le commentaire</th> </tr>';
while ($row = mysqli_fetch_assoc($res)) {
    if($row[is_read]) {
        echo "<tr><td class=\"done\"><a href='?route=page2&mark_as_unread=" . $row[id] . "'><img class=\"done\" src=\"img/ic_add_black_24dp_2x.png\" alt=\"done\"></a></td>";
    } else {
        echo "<tr><td class=\"done\"><a href='?route=page2&mark_as_read=" . $row[id] . "'><img class=\"done\" src=\"img/ic_remove_black_24dp_2x.png\" alt=\"is not read yet\"></a></td>";
    }
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "<td>" . $row['mark'] . "</td>";
    echo "<td>" . $row['comment'] . "</td></tr>";
    $book += array($row['id']);
}
echo "</table>";
}