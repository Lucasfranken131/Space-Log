<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="estilo_itens.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentação</title>
</head>
<body>
    <div>
		<form action="enviar.php" method="post">
			<input type="text" name="id" placeholder="Id produto">
			<br>
			<input type="text" name="nome_produto" placeholder="Nome produto">
			<br>
			<input type="submit" value="Enviar">
			</form>
			<br>
		<form action="excluir.php" method="post">
			<input type="text" name="id" placeholder="Id produto">
			<br>
			<input type="submit" value="Excluir">
		</form>
	
		<?php
			include("conexao.php");
		
			$results_cadastro = 'SELECT * FROM estoque';
			$resultados_cadastros = mysqli_query($conexao, $results_cadastro);

			while($rows_cadastros = mysqli_fetch_array($resultados_cadastros)){
				echo '<div class="itens">';
				echo $rows_cadastros['id']." - ".$rows_cadastros['nome_produto'];
				echo '</div>';
			}
		?>	
    </div>
</body>
</html>