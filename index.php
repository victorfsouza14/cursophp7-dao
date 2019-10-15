<?php

require_once("config.php");
//--------------------------------------------------------------------------------//
//carrega um usuário//

/*$root = new Usuario();

	$root->loadById(3);

	echo $root;
*/

//--------------------------------------------------------------------------------//

//carrega um usuário com pula linha

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

foreach ($usuarios as $usuario) {

	echo json_encode($usuario);
	echo "<br>";
}
*/

//--------------------------------------------------------------------------------//

//carrega uma lista de usuario//

/*$lista = usuario::getList();

foreach ($lista as $list){

echo json_encode($list);
echo "<br>";
}
*/

//--------------------------------------------------------------------------------//

//carrega um usuario de procura//

/*$search = usuario::search("jo");

foreach ($search as $procura){

	echo json_encode($procura);
	echo "<br>";

}
*/

//--------------------------------------------------------------------------------//

//carrega um login validado//

/*$loginValidado = new usuario();
$loginValidado->login("joao", "qwerty");

echo $loginValidado;
*/

//--------------------------------------------------------------------------------//

//criando um novo usuário com Procedure

/*$aluno = new usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

//--------------------------------------------------------------------------------//

// alterar um usuário 

/*$usuario = new usuario();
$usuario->loadById(8);

$usuario->update("professor", "oioioi");

echo $usuario;
*/

//--------------------------------------------------------------------------------//

//

$usuario = new usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;
?>