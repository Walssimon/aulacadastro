<?php 

	session_start();

	require_once 'cad.php';

	if (isset($_POST['btn-converter'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$tel = mysqli_escape_string($connection,$_POST['tel']);

		$sql = "INSERT INTO Fiel(nome,CPF,email,telefone)VALUES('$nome','$cpf','$email','$tel')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
