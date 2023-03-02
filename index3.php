<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
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
        <main class="page">
            <div>
                <div class="main-block__container _container">
                    <section class="page__services services">
                        <div class="services__container _container">
                            <div class="services__header header-block">
                                <h2 class="header-block__title">Контакты</h2>
                                <div class="contact-list contact">
                                    <h1>Контакты: <br> ЧПУП АлюмаТехно (УНП 590729464) <br> МТС/Viber +375 (33)
                                        333-666-5 Николай <br> МТС/Viber +375 (29) 8-666-444 Виктор</h1>
                                    <h1>Адрес: <br> улица Карского, 2А / Гродно <br> Email: <br> 8666444@mail.ru</h1>
                                </div>
                            </div>
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5014b0d4650d97ae2997c078778100c84ab8ec19ff9d1e26a8947588cea1bb05&amp;
                            width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </section>
                    <div id="popup" class="popup">
                        <a href="#header" class="popup__area"></a>
                        <div class="popup__body">
                            <div class="popup__content">
                                <a href="#header" class="popup__close">X</a>
                                <div class="popup__title">Заказ услуги / звонка: </div>
                                <div class="popup__text">
                                    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                                        <label style="font-size:20px">ФИО</label><br><br>
                                        <input type="text" style="width:300px; height:50px" name="full name"
                                            placeholder="Введите свое полное имя"><br><br>
                                        <label style="font-size:20px">Email</label><br><br>
                                        <input type="text" style="width:300px; height:50px" name="email"
                                            placeholder="Введите свой email"><br><br>
                                        <label style="font-size:20px">Телефон</label><br><br>
                                        <input type="text" style="width:300px; height:50px" name="phone"
                                            placeholder="Введите номер телефона"><br><br>
                                        <button type="submit">Отправить</button>
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

        </main>
        <footer class="footer">
            Подвал
        </footer>
    </div>


    <script src="js/script.js"></script>
</body>

</html>