<?php 
	
	$server_nome = 'localhost';
	$user_name = 'reverendo';
	$password = 'deoseudizmo';
	$db_name = 'dbFieis';
	
	$connection = mysqli_connect($server_nome,$user_name,$password,$db_name);


	mysqli_set_charset($connection,"utf8");

	if(mysqli_connect_error()){
		echo "Conexão com a Padaria perdida".mysqli_connect_error();
	}
?>