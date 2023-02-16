<?php

	include_once 'incluir/header.php';
?>

<div class="row">
	<div class= "col s12 m6 push-m3">
		<h3 class="light">Novo Convertido</h3>

		<form action="novofiel.php" method="POST">
			
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Fiel</label>				
			</div>

			<div class="input-field col s12">
				<input type="text" name="cpf" id="cpf">
				<label for="cpf">CPF</label>				
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Endereço Celestial</label>				
			</div>

			<div class="input-field col s12">
				<input type="text" name="tel" id="tel">
				<label for="tel">Número Santo</label>				
			</div>
<button type="submit" name="btn-converter" class="btn">
	Converter-se
</button>
	<a href="index.php" class="btn green"> Livro de Recitas Celestes </a>
		</form>
		
	</div>
</div>

<?php
include_once 'incluir/footer.php'
	?>