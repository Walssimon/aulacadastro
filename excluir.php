<?php 

	session_start();

	require_once 'cad.php';

	if (isset($_POST['btn-excluir'])) {
				
		$idFiel = mysqli_escape_string($connection,$_POST['idFiel']);

		$sql = "DELETE FROM tbClientes WHERE idFiel = '$idFiel'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Blasfêmos foram condenados a torradeira da predição.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "O Santo Pão não se ofendeu com essa blasfêmia.";

			header('Location: ../index.php');	
		}
	}
