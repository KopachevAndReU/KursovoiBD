<?php

    session_start();
    require_once 'connect2.php';

    $login = $_POST['имя'];


    $check_user = mysqli_query($connect, "SELECT * FROM `отзывы` WHERE `имя` = '$login' AND ");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['отзывы'] = [
            "id" => $user['id'],
            "имя" => $user['имя'],
            "отзывы" => $user['отзывы']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
