<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$article = $_GET['article'];
$product = $pdo->query("SELECT * FROM products WHERE article = $article")->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5;
        color: #333;
    }

    form {
        width: 500px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 5px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 5px;
        background-color: #008CBA;
        color: #fff;
        border: none;
    }
</style>
<body>
<form action="/Product/actions/update.php" method="post">
    <input name="article" type="hidden" value="<?= $article ?>">
    <input name="name" type="text" placeholder="Название" value="<?= $product['name'] ?> ">
    <input name="price" type="number" placeholder="Стоимость" value="<?= $product['price'] ?>">
    <input  type="submit">
</form>
</body>
</html>