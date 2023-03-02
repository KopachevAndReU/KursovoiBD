<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Изменение</title>
<meta charset="utf-8" />
</head>
<body>
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id_yslugi"]))
{
    $id_yslugi = mysqli_real_escape_string($conn, $_GET["id_yslugi"]);
    $sql = "SELECT * FROM yslugi WHERE id_yslugi = '$id_yslugi'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $name = $row["name"];
                $price = $row["price"];
            }
            echo "<h3>Обновление пользователя</h3>
                <form method='post'>
                    <input type='hidden' name='id_yslugi' value='$id_yslugi' />
                    <p>Имя:
                    <input type='text' name='name' value='$name' /></p>
                    <p>Возраст:
                    <input type='number' name='price' value='$price' /></p>
                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
elseif (isset($_POST["id_yslugi"]) && isset($_POST["name"]) && isset($_POST["price"])) {
      
    $id_yslugi = mysqli_real_escape_string($conn, $_POST["id_yslugi"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
      
    $sql = "UPDATE yslugi SET name = '$name', price = '$price' WHERE id_yslugi = '$id_yslugi'";
    if($result = mysqli_query($conn, $sql)){
        header("Location: index1.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else{
    echo "Некорректные данные";
}
mysqli_close($conn);
?>
</body>
</html>