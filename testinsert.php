<?php

$connection = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');

//$connection->exec("INSERT INTO user (first_name,last_name,email) VALUES ('Grigory','Pupkin','pupkin@list.ru')");

//$statement = $connection->prepare("INSERT INTO user (first_name,last_name,email) VALUES (:first_name, :last_name, :email)");

/*$statement = $connection->prepare("UPDATE user SET email = :email WHERE id = :id");
$statement->execute(['id' => 3, 'email' => 'NewTestEmail@gmail.com']);*/

/*$statement = $connection->prepare("UPDATE user SET age = :age WHERE id = :id");

$i = 0;

$statement->bindParam('id', $i);
$statement->bindParam('age', $i);

while ($i < 3) {
    $i++;
    $statement->execute();
}*/

$insertOrderStatement = $connection->prepare("INSERT INTO orders (id,user_id,order_details) VALUES (null,:user_id,:order_details)");
$updateUser = $connection->prepare("UPDATE user SET orders_number = :orders_number WHERE id = :id");
$getUserOrdersNumber = $connection->prepare("SELECT orders_number FROM user WHERE id = :id");

$getUserOrdersNumber->execute(['id' => 1]);

$ordersNumber = $getUserOrdersNumber->fetchColumn();

$connection->beginTransaction();

$insertOrderStatement->execute(['user_id' => 1, 'order_details' => 'Kitchen book']);
$updateUser->execute(['id' => 1, 'orders_number' => $ordersNumber]);

$connection->commit();