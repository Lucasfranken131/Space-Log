<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estiloitens.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icone.png">
    <img src="logopng.png"  alt="Logo" class="img" />
    <title>Movimentação</title>
</head>

<body>
  <div class="container">
  <div class="box">
    <div class="formulario">
  	<form action="enviar.php" method="post">
		<input type="text" name="id_estoque" placeholder="Id produto">
		<br>
		<input type="text" name="nome_produto" placeholder="Nome produto">
		<br>
        	<br>
		<input type="submit" value="Enviar" class="botao">
	</form>
	<br>
	<form action="excluir.php" method="post">
		<input type="text" name="id_estoque" placeholder="Id produto">
		<br>
                <br>
		<input type="submit" value="Excluir" class="botao">
      		<br>
    	</form>
    	<form action="acrescentar.php" method="post">
		<input type="text" name="id" placeholder="Id produto">
		<br>
		<input type="text" name="nome_produto" placeholder="Nome produto">
		<br>
		<input type="number" name="quantidade" placeholder="Quantidade">
		<br>
		<input type="submit" value="Acrescentar quantidade">
	</form>
	<br>
	<form action="subtrair.php" method="post">
		<input type="text" name="id" placeholder="Id produto">
		<br>
		<input type="text" name="nome_produto" placeholder="Nome produto">
		<br>
		<input type="number" name="quantidade" placeholder="Quantidade">
		<br>
		<input type="submit" value="Subtrair Quantidade">
	</form>
</div>
<br>
		<?php
			include("conexao.php");
	    		include("protect.php");

			$results_cadastro = 'SELECT * FROM estoque';
			$resultados_cadastros = mysqli_query($conexao, $results_cadastro);

			while($rows_cadastros = mysqli_fetch_array($resultados_cadastros)){
				echo "<div class='conteiner'>";
				echo "<div class='conteiner'>"."<div class='id'>".$rows_cadastros['id']."</div>"."<div class='produto'>".$rows_cadastros['nome_produto']."</div>"."<div class='status'>".$rows_cadastros['status']."</div>";
				echo '</div>';
			}
		?>
  </div>
</div>
</body>
</html>
