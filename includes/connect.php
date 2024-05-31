<?php

$host = 'localhost';
$login = 'root';
$pass = '';
$db_name = 'azalka';

// $host = 'localhost';
// $login = 'x689';
// $pass = 'xcmK6YhHfjTbAWPi';
// $db_name = 'x689';

$conn = new mysqli($host, $login, $pass, $db_name);

if ($conn->connect_errno) {
    die("Ошибка: невозможно подключиться: " . $conn->connect_error);
} 
// else {
//     echo 'Подключено';
// }

?>