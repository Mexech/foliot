<?php
include_once('../crypt/encode.php');
//выбираем страницу на которую необходимо отправить запрос
$url = 'https://tooking.ga/API/auth.php';
//параметры которые необходимо передать
$password = 'qwerty12';
$username = 'Кирилл';
$params = array(
    'username' => encoder($username),
    'password' => encoder($password)
);

$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($params)
    )
)));

echo $result;
?>
