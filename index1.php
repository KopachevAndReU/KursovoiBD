<?php
mysqli_connect("localhost", "root", "", "test") or die('Error');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <header id="header" class="header">
        <div class="header__container _container">
            <a href="index.php" class="header__logo">
                Мебель и <br> Аллюминий
            </a>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="index.php" class="menu__link">Главная</a>
                    </li>
                    <li class="menu__item">
                        <a href="index1.php" class="menu__link">Услуги</a>
                    </li>
                    <li class="menu__item">
                        <a href="index2.php" class="menu__link">О компании</a>
                    </li>
                    <li class="menu__item">
                        <a href="index3.php" class="menu__link">Контакты</a>
                    </li>
                    <li class="menu__item">
                        <a href="index4.php" class="menu__link">Отзывы</a>
                    </li>
                    <li class="menu__item">
                        <a href="#popup" class="menu__link">Заказ услуг</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="popup" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#header" class="popup__close">X</a>
                <div class="popup__title">Заказ услуги: </div>
                <div class="popup__text">
                    <form action="vendor2/signup2.php" method="post" enctype="multipart/form-data">
                        <label style="font-size:20px">Мебель</label><br><br>
                        <input type="text" style="width:300px; height:50px" name="order_name"
                            placeholder="Введите название мебели"><br><br>
                        <label style="font-size:20px">Почта</label><br><br>
                        <input type="text" style="width:300px; height:50px" name="email"
                            placeholder="Введите почту"><br><br>
                        <label style="font-size:20px">Телефон</label><br><br>
                        <input type="text" style="width:300px; height:50px" name="number"
                            placeholder="Введите свой телефон"><br><br>
                        <button type="submit">Отправить</button><br><br>
                        <?php
                        if ($_SESSION['message']) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <pre style="font-size:20px; margin-top: 150px; color: #043873; font-family:Times New Roman; display: flex; justify-content: center;">
    <?php
    $conn = new mysqli("localhost", "root", "", "test");
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM yslugi";
    if ($result = $conn->query($sql)) {
        echo "<table><tr><th>Название</th><th>Цена</th></tr>";
        foreach ($result as $row) {
            echo "<td><br>" . $row["name"] . "</td>";
            echo "<td><br>" . $row["price"] . "</td>";
            echo "<td><form action='vendor4/update.php' method='post'>
                        <input type='hidden' name='id_yslugi' value='" . $row["id_yslugi"] . "' />
                        <input type='submit' value='Изменить'>
                   </form></td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else {
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
    ?>
    </pre>
    

</body>

</html>