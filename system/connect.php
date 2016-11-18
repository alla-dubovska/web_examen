<?php
if(!$link) {
    $link = mysqli_connect('localhost', 'root', 'root');
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
    mysqli_select_db($link, 'web_exam');
    mysqli_set_charset($link, "utf8");
}
