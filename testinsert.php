<?php

$connection = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');

//$connection->exec("INSERT INTO user (first_name,last_name,email) VALUES ('Grigory','Pupkin','pupkin@list.ru')");

$statement = $connection->prepare("INSERT INTO user (first_name,last_name,email) VALUES (:first_name, :last_name, :email)");