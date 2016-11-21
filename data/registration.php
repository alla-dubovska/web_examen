<h1>L'inscription</h1>
<p>Remplissez les informations suivantes:</p>

<form action="?route=new_user" method="post" class="auth-form">
    <p>Votre nom: <input name="name" type="text" required="required"/></p>
    <p>Email: <input name="login" type="text" required="required"/></p>
    <p>Mot de passe: <input name="pass" type="password" required="required" pattern=".{5,}"   required title="5 characters minimum"/></p>
    <input value="S'inscrire" type="submit" />
</form>