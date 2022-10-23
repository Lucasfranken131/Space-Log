<?php
include("conexao.php");
$id= $_POST['id'];
$nome_produto= $_POST['nome_produto'];
$sql= "INSERT INTO estoque(id,nome_produto)
            VALUES('$id','$nome_produto')";
			   
        if(mysqli_query($conexao, $sql)){

			$atualizar = "UPDATE estoque SET status = 'disponivel' WHERE id = '$id'"; 
			if(mysqli_query($conexao, $atualizar)){
				echo "Produto inserido com sucesso. <br>";
				echo "Status atualizado com sucesso. <br>";
				echo "<a href='estoque_funcionario.php'>Voltar para a Home</a><br>";
			}	
			else{
				echo "ERRO".mysqli_connect_error($conexao);
			}
        }

    else{
        echo "ERRO".mysqli_connect_error($conexao);
    }
?>
