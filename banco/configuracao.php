<?php

//linha para tirar advertência
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

//conexão com o servidor
$conexao = mysqli_connect("localhost", "root", "") or die("Erro ao conectar com o servidor!");

//conexão com o banco
$db = mysqli_select_db($conexao, "academico") or die("Banco não encontrado!");
?>