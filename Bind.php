<?php

/**
 * Не именованные параметры
**/
/*$connect = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');

$stm = $connect->prepare('SELECT * FROM user WHERE id in (?) or email LIKE ?');

$stm->execute([1, 'petrov@yandex.ru']);

print_r($stm->fetchAll());*/

/**
 * Именованные параметры
 **/

/*$connect = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');

$stm = $connect->prepare('SELECT * FROM user WHERE id = :id or email LIKE :email');

$stm->execute(['email' => 'petrov@yandex.ru', 'id' => 1]);

print_r($stm->fetchAll());*/

/**
 * Биндинг
 */

/**
 * bindValue
*/
/*$connect = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');

$stm = $connect->prepare('SELECT * FROM user WHERE id = :id or email LIKE :email');

$id = 1;
$email = 'petrov@yandex.ru';

$stm->bindValue('id', $id);
$stm->bindValue('email', $email);

$stm->execute();

print_r($stm->fetchAll());*/



/**
 * bindParam
 */
$connect = new PDO("mysql:host=localhost; dbname=example; charset=utf8", 'root', 'root');

$stm = $connect->prepare('SELECT * FROM user WHERE id = :id or email LIKE :email');

$id = 1;
$email = 'petrov@yandex.ru';

$stm->bindParam('id', $id);
$stm->bindParam('email', $email);

$id = 2;

$stm->execute();

print_r($stm->fetchAll());