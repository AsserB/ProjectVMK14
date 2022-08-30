<?php

$connect = mysqli_connect(
    'localhost',
    'root',
    '',
    'vmk_db'
);

if (!$connect) {
    die('Ошибка при подключении к базе данных');
}

?>