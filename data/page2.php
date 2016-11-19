<?php
if(!$_SESSION['role']) {
    echo '<h1>Mes livres</h1>';
    echo '<p>Please login first</p>';
} else {
    
$book = array();
$res = mysqli_query($link, "SELECT * FROM book WHERE user_id = \"" . $_SESSION['id'] . "\"");
echo '<table><caption><h1>Mes livres</h1></caption>
                    <tr><th></th>
                    <th>Le nom</th> 
                    <th>Le auteur</th> 
                    <th>L\'évaluation</th>
                    <th>Le commentaire</th> </tr>';
while ($row = mysqli_fetch_assoc($res)) {
    if($row[is_read]) {
        echo "<tr><td><img class=\"done\" src=\"img/ic_done_black_24dp_2x.png\" alt=\"done\"></td>";
    } else {
        echo "<tr><td></td>";
    }
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "<td>" . $row['mark'] . "</td>";
    echo "<td>" . $row['comment'] . "</td></tr>";
    $book += array($row['id']);
}
echo "</table>";
}
