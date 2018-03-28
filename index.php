<?php 

	require_once("config.php");

	/**
	---------------------------------------------------
	
	//retorna um usuario
	$walter = new usuario();
	$walter->loadbyId(1);
	echo $walter;
	
	---------------------------------------------------

	//retorna a lista
	$lista = Usuario::getList();

	echo json_encode($lista);

	/**

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

	---------------------------------------------------

	//carrega umna lista de usuarios buscando pelo login
	$busca = Usuario::search("magni");

	echo json_encode($busca);
	
	---------------------------------------------------

	//carrega um usuario atráves do login e senha

	//$usuario = new Usuario();
	//$usuario->login("walter","123456");
	//echo $usuario;

	---------------------------------------------------

	//criando um novo usuario
	$aluno = new Usuario("aluno", "senha");

	$aluno->insert();

	echo $aluno;

	---------------------------------------------------
	**/


	//atualizando novo usuario
	$usuario = new Usuario();

	$usuario->loadbyId(5);

	$usuario->update("professor","professor");

	echo $usuario;



 ?>