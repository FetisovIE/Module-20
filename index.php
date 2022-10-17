<?php

try {
    $connection = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');
} catch (\PDOException $e) {
    echo $e->getMessage();
}

$statement = $connection->prepare("SELECT * FROM user");

$queryResult = $statement->execute();

$dataResult = $statement->fetch();

print_r($dataResult);