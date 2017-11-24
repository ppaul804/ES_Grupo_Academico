<?php

require "configuracao.php";

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//$senha = md5($_POST['senha']);

$query = mysql_query("SELECT idt_usuario, usr_usuario FROM tb_usuario WHERE usr_usuario='$usuario' AND pwd_usuario='$senha'") or die(mysql_error());
$total = mysql_num_rows($query);

if ($total == 1) {
    $dados = mysql_fetch_array($query);
    $_SESSION["idt_usuario"] = $dados["idt_usuario"];
	$_SESSION["usr_usuario"] = stripslashes($dados["usr_usuario"]);

    header("Location: ..\\areaUsr\\index.php"); 
    exit;
} else {
    echo "<script>alert('Login e/ou senha incorreto(s)'); history.back();</script>";
}
?>