<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$admissions = $pdo->query("DELETE FROM `admissions` WHERE id=$id");

header('Location: ../index.php');

?>
