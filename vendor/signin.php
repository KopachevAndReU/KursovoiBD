<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];


    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND ");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id_user" => $user['id_user'],
            "full name" => $user['full name'],
            "email" => $user['email'],
            "phone" => $phone['phone']
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
