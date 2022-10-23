<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="estiloitens.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentação</title>
</head>
<body>
    <div>
	<?php
		include("conexao.php");	
		$results_cadastro = 'SELECT * FROM estoque WHERE status = "disponivel"';
		$resultados_cadastros = mysqli_query($conexao, $results_cadastro);

	    	while($rows_cadastros = mysqli_fetch_array($resultados_cadastros)){
			echo '<form action="pedido.php" method="post">';
			echo '<div class="conteiner">';
			echo '<div class="id">'.$rows_cadastros['id'].'</div>'.'<div class="produto">'.'Nome Produto = '.$rows_cadastros['nome_produto'].'</div>';
			echo '<input type="submit" value="Comprar">';
			echo '<br>';
			echo '</div>';
			echo '</form>';
		}
	?>	
</body>
</html>
