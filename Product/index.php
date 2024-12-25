<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
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
    <h1>Каталог товаров</h1>
    <a href="/Product/create.php">Добавить</a>
<table>
    <thead>
    <tr>
        <th>Артикул</th>
        <th>Название</th>
        <th>Стоимость</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product["article"] ?></td>
        <td><?= $product["name"] ?></td>
        <td><?= $product["price"] ?></td>
        <td><a href="/Product/edit.php?article=<?= $product["article"] ?>">Изменить</a></td>
        <td><a href="/Product/actions/delete.php?article=<?= $product["article"] ?>">Удалить</a></td>
        <td><a href="/admissions/index.php?id=<?= $product["article"] ?>">Подробнее</a></td>

    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
