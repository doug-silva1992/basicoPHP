<?php
require_once("auotload.php");

$sql = new sql();

$usuario = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);