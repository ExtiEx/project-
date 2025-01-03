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
<style>
    body {
        font-family: Arial, sans-serif;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    input,
    select {
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<body>
    <form action="/admissions/actions/store.php" method="post">
        <input name="date" type="date" placeholder="Дата поступления">
        <input name="quantity" type="number" placeholder="Кол-во поступления">
        <select name="product">
        <?php foreach ($products as $product):?>
            <option value="<?= $product['article'] ?>"><?= $product['name'] ?></option>
            <?php endforeach ?>
        </select>
        <input  type="submit">
    </form>
</body>
</html>