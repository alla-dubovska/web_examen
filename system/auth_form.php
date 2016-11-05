<?php if(isset($_SESSION['role'])){ ?>
<div class="logout">
    <?php echo $_SESSION['user_name']; ?>
    <a href="/?logout">Выход</a>
</div>
<?php } else { ?>
<div class="login">
    <form method="post" class="auth-form">
        <input name="login" type="text" placeholder="Логин" />
        <input name="pass" type="password" placeholder="Пароль" />
        <input value="Вход" type="submit" />
    </form>
</div>
<?php } ?>

