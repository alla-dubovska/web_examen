<?php
$header = "<h1>Ma bibliothèque  ou comment faire facilement un catalogue de sa bibliothèque</h1>";
$text = ' <p>Vous avez des dizaines de livres que vous voulez lire,et cette liste 
    est mise à jour tous les jours? Vous ne voulez pas manquer un seul livre, et 
    vous avez besoin d\'un moyen de stocker cette liste?</p>
    <p> Alors, notre site web c\'est 
    ce dont vous avez besoin. Sur ce site vous pouvez ajouter un nouveau livre, 
    le modifier, marquer comme lu et laisser votre évaluation. </p>';

echo $header;
echo $text;
if(!$_SESSION['role']) {
    echo '<h3>Pour ajouter un livre, vous devez d\'abord vous enregistrer. </h3>';
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

