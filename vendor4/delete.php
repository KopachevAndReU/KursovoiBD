<?php
if(isset($_POST["id_comment"]))
{
    $conn = mysqli_connect("localhost", "root", "", "test");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $id_comment = mysqli_real_escape_string($conn, $_POST["id_comment"]);
    $sql = "DELETE FROM comment WHERE id_comment = '$id_comment'";
    if(mysqli_query($conn, $sql)){
         
        header("Location: ../index4.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);    
}
?>
