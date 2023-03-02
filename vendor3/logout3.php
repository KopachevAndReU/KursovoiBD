<?php
session_start();
unset($_SESSION['отзывы']);
header('Location: ../index.php');