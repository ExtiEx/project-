<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$date = $_POST['date'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$admissions= $pdo->query("INSERT INTO `admissions`(`date`, `product_article`,`quantity`) VALUES ('$date','$product','$quantity')");

header('Location: ../index.php');

?>
