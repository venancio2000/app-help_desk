<?php

	session_start();


	//variavel que verifica se a autenticacao foi realizada
	$usuario_autenticado = false;


	// usuario do sistema
	$usuario_app = array(
		['email' => 'jbrunogvenancio@gmail.com', 'senha' => '12345678'],
		['email' => 'brunovenancio@gmail.com', 'senha' => '12345678'],
		['email' => 'brunovenancio-25@outlook.com', 'senha' => '12345678']

	);
	/*
	echo '<pre>';
	print_r($usuario_app);
	echo '<pre>';
	*/

	foreach ($usuario_app as $user) {
		
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
		}

	}

	if ($usuario_autenticado) {
		echo 'Usuario autenticado';
		$_SESSION['autenticado'] = 'sim';
	}else{
		//ele vai força redirecionamento

		$_SESSION['autenticado'] = 'nao';
		header('Location: index.php?login=erro');
	}
	/*
	print_r($_GET);

	echo '<br/>';

	echo $_GET['email'];

	echo '<br/>';

	echo $_GET['senha'];
	*/
	/*
	print_r($_POST);
	echo '<br/>';

	echo $_POST['email'];

	echo '<br/>';

	echo $_POST['senha'];
	*/
?>