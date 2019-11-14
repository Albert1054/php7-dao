<?php

require_once("config.php");
//carrega os dados diretamento do banco
//$sql = new Sql();
//$result = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($result);

//carrega um usuario pelo ID
/*$login = new Usuario();
$login->loadById(5);
echo $login;*/

//carrega a lista dos usuarios
//$list = Usuario::getList();
//echo json_encode($list);

//carrega os dados de um usuario pelo login
//$login = Usuario::getLogin("name");
//echo json_encode($login);

//carrega os dados de um usuario pelo login e senha
//$at = new Usuario();
//$at->login("name", "25");
//echo $at;

//Isere um novo usuario
//$aluno = new Usuario("aluno2", "852");
//$aluno->insert();
//echo $aluno;

/*
atualiza um usuario
$att = new Usuario();
$att->loadById(8);
$att->update("aluno", "753");
echo $att;*/

$del = new Usuario();

$del->loadById(8);

$del->delete();

echo $del;

?>