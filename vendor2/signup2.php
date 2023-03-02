<?php

    session_start();
    require_once 'connect2.php';

    $order_name = $_POST['order_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];



        $path = 'uploads/' . time() . $_FILES['email'];
        if (!move_uploaded_file($_FILES['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        

        $password = md5($password);			

        mysqli_query($connect, "INSERT INTO `order` (`id_order`, `email`, `number`, `order_name`) VALUES (NULL, '$email', '$number' ,'$order_name')");

        $_SESSION['message'] = 'Ваш заказ принят';
        header('Location: ../index1.php');


    } else {
        $_SESSION['message'] = 'Ошибка';
        header('Location: ../register.php');
    }

?>
