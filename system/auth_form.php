<?php 
if(isset($_SESSION['role'])){?>
    <div class="login">
    <form align="right" name="form1" method="post" action="?logout">
        <label for="username"> <?php echo $_SESSION['user_name']; ?> </label>
        <label class="logoutLblPos">
        <input name="submit2" type="submit" id="submit2" value="Se dèconnecter">
    </label>
    </form>
</div>
<?php } else {?>
<div class="login">
    <form method="post" class="auth-form">
        <input name="login" type="text" placeholder="Email" />
        <input name="pass" type="password" placeholder="Mot de passe" />
        <input value="Se connecter" type="submit" />
    </form>
    <a href="?route=registration">Pas encore enregistré?</a>
</div>
<?php } ?>

