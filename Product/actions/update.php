<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];
$products = $pdo->query("UPDATE `products` SET `name`='$name',`price`='$price' WHERE article=$article");

header('Location: ../index.php');

?>
