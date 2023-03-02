<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];



        $path = 'uploads/' . time() . $_FILES['email'];
        if (!move_uploaded_file($_FILES['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `user` (`id_user`, `full name`, `email`, `phone`) VALUES (NULL, '$full_name', '$email', '$phone')");

        $_SESSION['message'] = 'Ваш заказ принят';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Ошибка';
        header('Location: ../register.php');
    }

?>
