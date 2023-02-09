<?php 
$con = mysqli_connect("localhost","root","");
//Checando a conexão

if (mysqli_connect_errno($con)){
echo "Erro ao conectar com a base de dados: ".

mysqli_connect_error();
} else {

	$sql = "CREATE DATABASE seitapam";
	if (mysqli_query($con,$sql)){

	echo "Conexão Aberta";		
	}else{

		echo "<br/> Erro: ".mysqli_error($con);
	}
	
	echo "Conexão Aberta";

}

?>