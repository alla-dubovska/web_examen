<?php
if(isset($_SESSION['role'])) {
    if(isset($_GET['logout'])) {
        unset($_SESSION['role']);
    }
} else {
    if(isset($_POST['login']) && isset($_POST['pass'])) {
        require 'user.php';
        if(isset($user[$_POST['login']]) && $user[$_POST['login']]['pass'] == $_POST['pass']) {
            $_SESSION['role'] = $user[$_POST['login']]['role'];
            $_SESSION['user_name'] = $user[$_POST['login']]['user_name'];
        }
    }
}