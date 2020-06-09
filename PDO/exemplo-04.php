<?php

$conn = new PDO("mysql:dbname=dbphp7;local=localhost", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :PASSWORD WHERE idusuario = :ID");

$login = "jose";
$password = "qwerty";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$smtm->execute();

echo "Alterado OK";
