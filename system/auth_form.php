<?php 
if(isset($_SESSION['role'])){?>
    <div class="login">
    <form align="right" name="form1" method="post" action="?logout">
        <label for="username"> <?php echo $_SESSION['user_name']; ?> </label>
        <label class="logoutLblPos">
        <input name="submit2" type="submit" id="submit2" value="log out">
        </label>
    </form>
</div>
<?php } else {?>
<div class="login">
    <form method="post" class="auth-form">
        <input name="login" type="text" placeholder="Логин" />
        <input name="pass" type="password" placeholder="Пароль" />
        <input value="Вход" type="submit" />
    </form>
</div>
<?php } ?>

