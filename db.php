<?php

$host = "database";
$dbname = "product";
$username = "root";
$password = "tiger";

return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

?>