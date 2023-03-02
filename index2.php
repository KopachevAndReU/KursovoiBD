<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании</title>
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
            <div class="main-block__container _container">

                <section class="page__services services">
                    <div class="services__container _container">

                        <div class="services__header header-block">
                            <h2 class="header-block__title">О Компании</h2>
                            <div class="header-block-sub-title">
                                Мы прожили более 15 лет, производя остекление из ПВХ профилей и помогая Вам создавать
                                дома свой мечты.
                                Мы первый производитель в СНГ, который реализовал производство окна с «бесшовной»
                                технологией сварки и
                                сделал доступным новый уровень эстетики изделия для своего клиента. <br> <br> <br>
                                В 2018 году мы сделали следующий шаг и создали ЧПУП «АлюмаТехно» - отдельную компанию,
                                которая производит комплекс высокоэффективных элементов остекления из алюминиевых
                                систем.
                                В новом начинании мы остались верным старым принципам и решили предложить своему клиенту
                                преимущества,
                                ранее отсутствующие на рынке.
                            </div>
                        </div>
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