<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
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
<STYLE>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 400px;
        padding: 20px;
        margin: 0 auto;
    }

    input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #008CBA;
        color: #fff;
        cursor: pointer;
    }
</STYLE>
<body>
    <form action="/Product/actions/store.php" method="post">
        <input name="name" type="text" placeholder="Название">
        <input name="price" type="number" placeholder="Стоимость">
        <input  type="submit">
    </form>
</body>
</html>