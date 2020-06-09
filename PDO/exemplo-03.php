<?php

$conn = new PDO("mysql:dbname=dbphp7;local=localhost", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$smtm->execute();

echo "Inserido OK";
