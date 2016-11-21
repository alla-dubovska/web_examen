<?php
$header = "<h1>Ma bibliothèque  ou comment faire facilement un catalogue de sa bibliothèque</h1>";
$text = ' <p>To change the visual style of a table you need to supply custom cells for it to display. The custom cell can have different colors and control layouts.
    The CellCustomTable example implements a UITableViewCell subclass that defines a custom layout of UILabels and a UIImage with different fonts and colors. The resulting cells look like this:
</p>

<p>To change the visual style of a table you need to supply custom cells for it to display. The custom cell can have different colors and control layouts.
    The CellCustomTable example implements a UITableViewCell subclass that defines a custom layout of UILabels and a UIImage with different fonts and colors. The resulting cells look like this:
</p>

<p>To change the visual style of a table you need to supply custom cells for it to display. The custom cell can have different colors and control layouts.
    The CellCustomTable example implements a UITableViewCell subclass that defines a custom layout of UILabels and a UIImage with different fonts and colors. The resulting cells look like this:
</p>';

echo $header;
echo $text;
if(!$_SESSION['role']) {
    echo '<h3>Pour ajouter un livre s\'il vous plaît ouvrir une session.</h3>';
} else {
?>

<form action="?route=new_book" method="post">
    <h1>Ajouter un nouveau livre</h1>
    <p>Le nom: <input name="name" type="text" required="required"/></p>
    <p>Le auteur: <input name="author" type="text" required="required"/></p>
    <p>Vous avez déjà lu ce livre? <input type="checkbox" name="is_read" value="no"></>
    <p>Le commentaire (peut être une référence à l'Internet): </p>
        <p><textarea name="comm" type="text" cols="100" rows="5"></textarea></p>
    <input value="Ok" type="submit" />
</form>
<?php
}

