<?php 
$con = mysqli_connect("localhost","root","","db_seitapam");

if (mysqli_connect_errno($con)){
echo "Erro: ".mysqli_connect_error();

} else {
	$sql = "INSERT INTO Pessoa(VALUES('$_POST[nome]', '$_POST[CPF]','$_POST[email]','$_POST[telefone]'))"
	if (mysqli_query($con,$sql)){
		echo "Fiel convertido com sucesso!! :)"
	}else
	echo "Erro ao inserir: ".mysqli_error($con);
}



?>