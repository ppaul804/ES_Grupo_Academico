<?php

//linha para tirar advertência
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

//conexão com o servidor
$conexao = mysql_connect("localhost", "root", "") or die("Erro ao conectar com o servidor!");

//conexão com o banco
$db = mysql_select_db("academico", $conexao) or die("Banco não encontrado!");
?>