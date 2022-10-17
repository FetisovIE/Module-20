<?php

try {
    $connection = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');

    $statement = $connection->query("SELECT * FROM user");

    $statement->execute();

    /* while ($result = $statement->fetch()) {
        print_r($result);
    }*/

    /*$result = $statement->fetchAll();
    print_r($result);*/

    $result = $statement->fetchColumn(3);
    print_r($result);

} catch (\PDOException $e) {
    echo $e->getMessage();
}

