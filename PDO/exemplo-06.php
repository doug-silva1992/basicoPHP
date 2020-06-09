<?php

$conn = new PDO("mysql:dbname=dbphp7;local=localhost", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Delete OK";
