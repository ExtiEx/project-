<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$admissions = $pdo->query("SELECT admissions.*,products.name as product_name FROM admissions JOIN products on admissions.product_article=products.article")->fetchAll(PDO::FETCH_ASSOC);
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
<h1>Характеристики поступления</h1>
<a href="/admissions/create.php">Добавить</a>
<a href="/Product/index.php">На главную страницу</a>
<table>
    <thead>
    <tr>
        <th>Дата поступления</th>
        <th>Товар</th>
        <th>Кол-во товара</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($admissions as $admission): ?>
        <tr>
            <td><?= $admission["date"] ?></td>
            <td><?= $admission["product_name"]?></td>
            <td><?= $admission["quantity"] ?></td>
            <td><a href="/admissions/edit.php?id=<?= $admission["id"] ?>">Изменить</a></td>
            <td><a href="/admissions/actions/delete.php?id=<?= $admission["id"] ?>">Удалить</a></td>


        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>