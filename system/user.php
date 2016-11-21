<?php
$user = array();
$res = mysqli_query($link, 'SELECT * FROM users');
while ($row = mysqli_fetch_assoc($res)) {
    $user += array($row['login'] => array('pass' => $row['pass'], 
        'role' => $row['role'], 'user_name' => $row['name'], 'id' => $row['id']));
}




