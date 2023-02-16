<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$tel = mysqli_escape_string($connection,$_POST['tel']);
		$idFiel = mysqli_escape_string($connection,$_POST['idFiel']);

		$sql = "UPDATE tbClientes SET nomeCli = '$nome', sobreNomeCli = '$cpf', emailCli = '$email', idadeCli = '$tel' WHERE idFiel = '$idFiel'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "A Consagração foi consumada.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Não foi Fiel o bastante para a consagração.";

			header('Location: ../index.php');	
		}
	}
