<?php
echo "<h1>Mes livres</h1>";
if(!$_SESSION['role']) {
    echo '<p>Please login first</p>';
} else {
$book = array();
$res = mysqli_query($link, "SELECT * FROM book WHERE user_id = \"" . $_SESSION['id'] . "\"");
while ($row = mysqli_fetch_assoc($res)) {
    printf($row['id'] . " " . $row['name']);
    $book += array($row['id']);
}
}

