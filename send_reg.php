<?php

$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'petreg';

$mysqli = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($mysqli->connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

if (isset ($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
{
    $login = htmlentities($_POST['login']);
    $password = htmlentities($_POST['password']);
    $first_name = htmlentities($_POST['first_name']);
    $last_name = htmlentities($_POST['last_name']);
    $phone = htmlentities($_POST['phone']);
    $email = htmlentities($_POST['email']);

    if (!empty($name) && !empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($mysqli, "INSERT INTO `users` (`login`,`password`,`first_name`,`last_name`,`phone`, `email`) VALUES('$login', '$password', '$first_name', '$last_name', '$phone', '$email')");
            if($sql)
            {
                echo '<p> Данные успешно добавлены в таблицу.</p>';
            }
            else
            {
                echo '<p>Ошибка:'.mysqli_error($mysqli).'</p>';
            }
        }
        else {
            echo '<p>email не прошел валидацию, форма не отправлена</p>';
        }
    }



}