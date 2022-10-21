<?php
    include("conexao.php");
	
	if(isset($_POST['email']) || isset($_POST['senha'])){
		
		if (strlen($_POST['email']) == 0){
			echo "Preencha o campo de email"."<br>";
			if(strlen($_POST['senha']) == 0){
				echo "Preencha o campo de senha";
			}
		}
		else if(strlen($_POST['senha']) == 0){
			echo "Preencha o campo de senha"."<br>";
			if(strlen($_POST['email']) == 0){
				echo "Preencha o campo de email";
			}
		}

		else{
			$email = $conexao->real_escape_string($_POST['email']);
			$senha = $conexao->real_escape_string($_POST['senha']);
			
			$sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
			$sql_query = $conexao->query($sql_code) or die("Falha na execução de código SQL ".$conexao->error);
			
			$quantidade = $sql_query->num_rows;
			
			if($quantidade == 1){
				$usuario = $sql_query->fetch_assoc();
				
				if(!isset($_SESSION)){
					session_start();
				}
				$_SESSION['id'] = $usuario['id'];
				$_SESSION['email'] = $usuario['email'];
				
				header("Location: home.php");
				
			}
			else{
				echo "Falha ao logar! email ou senha incorretos!";
			}
		}
	}
?>

