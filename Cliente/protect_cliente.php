<?php
    if(!isset($_SESSION)){
        session_start();
    }
	if(!isset($_SESSION['id_cliente'])){
		die("Você não está logado. <p><a href=\"login.html\">Entrar</a></p>");
	}
?>
