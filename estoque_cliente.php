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
		<?php
			include("conexao.php");
	    		include("protect_cliente.php");
		
			$results_cadastro = 'SELECT * FROM estoque WHERE status = "disponivel"';
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
