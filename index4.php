<?php
$connect = mysqli_connect("localhost", "root", "", "test");

?>

<?php
session_start();
if ($_SESSION['отзывы']) {
    header('Location: profile.php');
}
?>
<?php
    require_once('config/connect.php');

    $product_id = $_GET['id'];
    $query1 = "SELECT * FROM `comment` WHERE `id_comment` = $product_id";
    $product = mysqli_query($connect, $query1);
    $product = mysqli_fetch_assoc($product);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
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
                            <a href="#popup" class="menu__link">Оставить отзыв</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- ПОПАП -->

        <div id="popup" class="popup">
            <a href="#header" class="popup__area"></a>
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#header" class="popup__close">X</a>
                    <div class="popup__title">Заказ звонка: </div>
                    <div class="popup__text">
                        <form action="vendor3/signup3.php" method="post" enctype="multipart/form-data">
                            <label style="font-size:20px">ФИО</label><br><br>
                            <input type="text" style="width:300px; height:50px" name="full name"
                                placeholder="Введите свое полное имя"><br><br>
                            <label style="font-size:20px">Email</label><br><br>
                            <input type="text" style="width:300px; height:50px" name="email"
                                placeholder="Введите свой email"><br><br>
                            <label style="font-size:20px">Отзыв</label><br><br>
                            <textarea name="comment" type="textarea"
                                style="width:300px; height:100px; resize:none; font-family:Calibri; font-size: 15px;"
                                placeholder="Оставьте отзыв"></textarea><br><br>
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
        
       
        <?php
$conn = mysqli_connect("localhost", "root", "", "test");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM comment";
if($result = mysqli_query($conn, $sql)){
    echo "<table style = 'margin-top:100px; width:1400px; color: #043873; font-family:Times New Roman;'><th>Имя</th><th>Отзыв</th>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["full name"] . "</td>";
            echo "<td>" . $row["comment"] . "</td>";
            echo "<td><form action='vendor4/delete.php' method='post'>
                        <input type='hidden' name='id_comment' value='" . $row["id_comment"] . "' />
                        <input type='submit' value='Удалить'>
                   </form></td>";
                   
    }
    echo "</table>";
mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
    </div>
</body>

</html>