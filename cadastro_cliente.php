<?php
include("conexao.php");
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$cnpj_cpf=$_POST['cnpj_cpf'];
$cep=$_POST['cep'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$senha=$_POST['senha'];

$sql= "INSERT INTO cliente(nome,sobrenome,cnpj_cpf,cep,estado,cidade,bairro,rua,numero,complemento,senha)
        VALUES('$nome','$sobrenome','$cnpj_cpf','$cep','$estado','$cidade','$bairro','$rua','$numero','$complemento','$senha')";
    
    if(mysqli_query($conexao, $sql)){
        echo "Informações cadastradas com sucesso"."<br>";
    }

    else{
        echo "ERRO".mysqli_connect_error($conexao);
    }
?>
