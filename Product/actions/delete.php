<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$article = $_GET['article'];
$products = $pdo->query("DELETE FROM `products` WHERE article=$article");

header('Location: ../index.php');

?>
