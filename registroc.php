<?php
include("conexao.php");
$nome=$_GET['nome'];
$sobrenome=$_GET['sobrenome'];
$cnpj_cpf=$_GET['cnpj_cpf'];
$cep=$_GET['cep'];
$estado=$_GET['estado'];
$cidade=$_GET['cidade'];
$bairro=$_GET['bairro'];
$rua=$_GET['rua'];
$numero=$_GET['numero'];
$complemento=$_GET['complemento'];

$sql= "INSERT INTO cliente(nome,sobrenome,cnpj_cpf,cep,estado,cidade,bairro,rua,numero,complemento)
        VALUES('$nome','$sobrenome','$cnpj_cpf','$cep','$estado','$cidade','$bairro','$rua','$numero','$complemento')";
    
    if(mysqli_query($conexao, $sql)){
        echo "Informações cadastradas com sucesso"."<br>";
    }

    else{
        echo "ERRO".mysqli_connect_error($conexao);
    }
?>