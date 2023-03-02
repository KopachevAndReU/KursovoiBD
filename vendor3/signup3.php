<?php

    session_start();
    require_once 'connect3.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];



        $path = 'uploads/' . time() . $_FILES['email'];
        if (!move_uploaded_file($_FILES['tmp_name'], '../' . $path)) {
            //$_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `comment` (`id_comment`, `full name`, `email`, `comment`) VALUES (NULL, '$full_name', '$email', '$comment')");

        header('Location: ../index4.php');


    } else {
        $_SESSION['message'] = 'Ошибка';
        header('Location: ../register.php');
    }

?>
