<?php
    include("conexao.php");
	
	if(isset($_POST['cpf']) || isset($_POST['senha'])){
		
		if (strlen($_POST['cpf']) == 0){
			echo "Preencha o campo de CPF"."<br>";
			if(strlen($_POST['senha']) == 0){
				echo "Preencha o campo de senha";
			}
		}
		else if(strlen($_POST['senha']) == 0){
			echo "Preencha o campo de senha"."<br>";
			if(strlen($_POST['cpf']) == 0){
				echo "Preencha o campo de CPF";
			}
		}

		else{
			$cpf = $conexao->real_escape_string($_POST['cpf']);
			$senha = $conexao->real_escape_string($_POST['senha']);
			
			$sql_code = "SELECT * FROM cliente WHERE cnpj_cpf = '$cpf' AND senha = '$senha'";
			$sql_query = $conexao->query($sql_code) or die("Falha na execução de código SQL ".$conexao->error);
			
			$quantidade = $sql_query->num_rows;
			
			if($quantidade == 1){
				$usuario = $sql_query->fetch_assoc();
				
				if(!isset($_SESSION)){
					session_start();
				}
				$_SESSION['id'] = $usuario['id'];
				$_SESSION['cpf'] = $usuario['cpf'];
				
				header("Location: home_cliente.php");
				
			}
			else{
				echo "Falha ao logar! CPF ou senha incorretos!";
			}
		}
	}
?>

