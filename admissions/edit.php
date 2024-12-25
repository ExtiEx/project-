<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$admission = $pdo->query("SELECT * FROM admissions WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
$products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
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
<body>
<form action="/admissions/actions/update.php" method="post">
    <input name="id" type="hidden" value="<?= $id?>">
    <input name="date" type="date" placeholder="Дата поступления" value="<?= $admission['date'] ?> ">
    <select name="product">
        <?php foreach ($products as $product):?>
            <option value="<?= $product['article'] ?>"><?= $product['name'] ?></option>
        <?php endforeach ?>
    </select>
    <input name="quantity" type="number" placeholder="Кол-во товара" value="<?= $admission['quantity'] ?>">
    <input  type="submit">
</form>
</body>
</html>