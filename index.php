<?php

require_once("config.php");


$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

foreach ($usuarios as $usuario) {

	echo json_encode($usuario);
	echo "<br>";
}


?>