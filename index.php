<?php 

	require_once("config.php");

	$walter = new usuario();
	$walter->loadbyId(1);

	echo $walter;

	/**

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

	**/

 ?>