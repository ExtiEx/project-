<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$name = $_POST['name'];
$price = $_POST['price'];
$products = $pdo->query("INSERT INTO `products`(`name`, `price`) VALUES ('$name','$price')");

header('Location: ../index.php');

?>
