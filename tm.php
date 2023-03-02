<?php
session_start();
require_once "config/connect.php";

$querysql = mysqli_query($connect, "SELECT * FROM `yslugi`");




// Поиск 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-text'])){
 
  $products = searchRooms($_POST['search-text'], 'yslugi');

}
 else {
  $products = mysqli_fetch_all($querysql);
}

function searchRooms($text, $table){
  global $connect;
  $text = trim(strip_tags(stripcslashes(htmlspecialchars($text))));
  $search = mysqli_query($connect, "SELECT * FROM $table WHERE name LIKE '%$text%'");
  return mysqli_fetch_all($search);
}



?>



<div class="container">
  <h1 class="my-4">Товары</h1>
  <form action="tm.php" class="search_form" method="post">
                            <input type="search" name="search-text" placeholder="Поиск...">
                        </form>
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <!-- <img src="img/product.jpg" class="card-img-top"> -->
        <pre style="font-size:20px; margin-top: 150px; color: #043873; font-family:Times New Roman;">
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
        </div>
      </div>
    </div>



  </div>

</div>