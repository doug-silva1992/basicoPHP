<?php

$conn = new PDO("mysql:dbname=dbphp7;local=localhost", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$smtm->execute();

echo "Delete OK";
