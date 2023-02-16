<?php 
	include_once 'cad.php';
	//cabeçalho
	include_once 'incluir/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM Fiel WHERE idFiel = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Consagrar Fiel</h3>
			
			<form action="alterarfiel.php" method="POST">

				<input type="hidden" name = "idFiel" value="<?php echo $dados['idFiel']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cpf" id="cpf" value="<?php echo $dados['CPF']; ?>"
					>
					<label for="cpf">CPF</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
					<label for="email">Endereço Celestial</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="tel" id="tel" value="<?php echo $dados['telefone']; ?>">
					<label for="tel">Telefone Santo</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Consagrar</button>
				
				<a href="index.php" class="btn green">Livro de Recitas Celestes</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'incluir/footer.php';


 ?>