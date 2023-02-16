<?php 

	include_once 'cad.php';

	//cabeçalho
	include_once 'incluir/header.php';

	include_once 'incluir/mensagem.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Fieis</h3>
			<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>E-ndereço Celestial</th>
					<th>Telefone Santo</th>
				</tr>				
			</	>
			
			<tbody>
				<?php 

					$sql = "SELECT * FROM Fiel";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>				
			
						<tr>
							<td><?php echo $dados['nome']; ?></td>
							<td><?php echo $dados['cpf']; ?></td>
							<td><?php echo $dados['email']; ?></td>
							<td><?php echo $dados['telefone']; ?></td>

							<td><a href="alterar.php?id=<?php echo $dados['idFiel']; ?>" class="btn-floating orange"><i class="material-icons">Consagrar</i></a></td>

							<td><a href="#modal<?php echo $dados['idFiel']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure in Materializecss -->
							  <div id="modal<?php echo $dados['idFIel']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Ele Blasfemou ??</p>
							    </div>
							    <div class="modal-footer">
							      

							      <form action="php_action/excluir_cliente.php" method="POST">
							      	<input type="hidden" name="codCli" value="<?php echo $dados['idFiel']; ?>">

							      	<button type="submit" name="btn-excluir" class="btn red">Blasfemia!</button>

							      	<a href="#!" class="modal-close waves-effect waves-green btn">Interceder</a>

							      </form>
							    </div>
							  </div>

						</tr>
						
					<?php }

					?>
					
			</tbody>

			</table>
			<br>
			<a href="cadastro.php" class="btn">Nova Conversão</a>
		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'incluir/footer.php';


 ?>