<?php

require_once("config.php");

$root = new Usuario();

	$root->loadById(3);

	echo $root;

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

foreach ($usuarios as $usuario) {

	echo json_encode($usuario);
	echo "<br>";
}
*/

?>