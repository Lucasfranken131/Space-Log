<?php
    include("conexao.php");
	
	if(isset($_POST['cnpj_cpf']) || isset($_POST['senha'])){
		
		if (strlen($_POST['cnpj_cpf']) == 0){
			echo "Preencha o campo de CNPJ/CPF"."<br>";
			if(strlen($_POST['senha']) == 0){
				echo "Preencha o campo de senha";
			}
		}
		else if(strlen($_POST['senha']) == 0){
			echo "Preencha o campo de senha"."<br>";
			if(strlen($_POST['cnpj_cpf']) == 0){
				echo "Preencha o campo de CNPJ/CPF";
			}
		}

		else{
			$cnpj_cpf = $conexao->real_escape_string($_POST['cnpj_cpf']);
			$senha = $conexao->real_escape_string($_POST['senha']);
			
			$sql_code = "SELECT * FROM cliente WHERE cnpj_cpf = '$cnpj_cpf' AND senha = '$senha'";
			$sql_query = $conexao->query($sql_code) or die("Falha na execução de código SQL ".$conexao->error);
			
			$quantidade = $sql_query->num_rows;
			
			if($quantidade == 1){
				$usuario = $sql_query->fetch_assoc();
				
				if(!isset($_SESSION)){
					session_start();
				}
				$_SESSION['id_cliente'] = $usuario['id_cliente'];
				$_SESSION['cnpj_cpf'] = $usuario['cnpj_cpf'];
				
				header("Location: home_cliente.php");
				
			}
			else{
				echo "Falha ao logar! CNPJ/CPF ou senha incorretos!";
			}
		}
	}
?>

