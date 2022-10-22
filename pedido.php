<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="estilo_itens.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    <div>
		<?php
			include("conexao.php");
			include("protect_cliente.php");
			
			$usuario = $_SESSION['id_cliente'];
			$local = "SELECT * FROM cliente WHERE id_cliente = '$usuario'";
			$local_pull = mysqli_query($conexao, $local);
			while($local_pull_get = mysqli_fetch_array($local_pull)){
				echo "Seu endereço: ".$local_pull_get['cep']." - ".$local_pull_get['estado']." - ".$local_pull_get['cidade']." - ".$local_pull_get['bairro']." - ".$local_pull_get['rua']." - ".$local_pull_get['numero'];
			}
		?>	
    </div>
</body>
</html>
