<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_POST['id'];
$date = $_POST['date'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$admissions= $pdo->query("UPDATE `admissions` SET `date`='$date',`product_article`='$product',`quantity`='$quantity' WHERE id=$id");

header('Location: ../index.php');



