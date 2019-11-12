<?php

require_once("config.php");

//carrega 1 usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//carrega varios usuarios
//$list = Usuario::getList(); 
//echo json_encode($list);

//carrega uma lista de usuarios pelo login
//$search = Usuario::search("root");
//echo json_encode($search);

//Carrega usuario por login e senha

$login = new Usuario();

$login->login("name", "258");

echo $login;

?>