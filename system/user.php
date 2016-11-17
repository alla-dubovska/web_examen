<?php
$user = array();
$link = mysqli_connect('localhost', 'root', 'root');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
mysqli_select_db($link, 'web_exam');
mysqli_set_charset($link, "utf8");
$res = mysqli_query($link, 'SELECT * FROM user');
while ($row = mysqli_fetch_assoc($res)) {
    $user += array($row['login'] => array('pass' => $row['pass'], 
        'role' => $row['role'], 'user_name' => $row['name']));
}




