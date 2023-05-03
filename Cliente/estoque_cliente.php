<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="estilocadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estiloitens.css">
    <title>Movimentação</title>
</head>
<body>
    <div>
	<center><h1>Selecione o produto para compra</h1>
	<form action="pedido.php" method="post">
		<input type="text" placeholder="ID PRODUTO" name="id">
		<br>
		<input type="text" placeholder="Nome do produto" name="nome_produto">
		<br>
		<input type="submit" value="Comprar">
	</form></center>
	<?php
		include("conexao.php");	
		$results_cadastro = 'SELECT * FROM estoque WHERE status = "disponivel"';
		$resultados_cadastros = mysqli_query($conexao, $results_cadastro);

	    	while($rows_cadastros = mysqli_fetch_array($resultados_cadastros)){
			echo '<div class="conteiner">';
			echo '<div class="id">'."ID do produto = ".$rows_cadastros['id'].'</div>'.'<div class="produto">'.'Nome Produto = '.$rows_cadastros['nome_produto'].'</div>';
			echo '<br>';
			echo '</div>';
		}
	?>	
</body>
</html>
