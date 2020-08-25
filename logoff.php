<?php
	session_start();
	/*
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	//remover indices do array de sessão 
	//unset()
	unset($_SESSION['x']);//para remover o índice apenas se existir

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a avariavel de sessão
	//sesseion_destroy()
	
	session_destroy(); //será destruída
	//forçar i, redirecionamento
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	*/
	session_destroy();
	header('Location: index.php');

?>