<?php
    include("conexao.php");

    $strcon = mysqli_connect('localhost','root','','logistica') or die('Erro ao conectar ao banco de dados requisitado');
    $id = $_POST['id'];
    $sql = "DELETE FROM estoque WHERE id='$id'"; 
    mysqli_query($strcon,$sql) or die("Erro ao tentar excluir registro");
    echo "Produto excluído"."<br>";
    echo "<a href='estoque_funcionario.php'>Voltar para o estoque.</a>";
    mysqli_close($strcon);
?>
