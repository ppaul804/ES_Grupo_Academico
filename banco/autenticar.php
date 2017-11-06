<?php

require "configuracao.php";

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//$senha = md5($_POST['senha']);

$query = mysql_query("SELECT id_usuario, usr_usuario, nme_usuario FROM tb_usuario WHERE usr_usuario='$usuario' AND pwd_usuario='$senha'") or die(mysql_error());
$total = mysql_num_rows($query);

if ($total == 1) {
    $dados = mysql_fetch_array($query);
    $_SESSION["id_usuario"] = $dados["id_usuario"];

    echo "ENTROU!";
    #header("Location: areaUsuario\\calendario.php"); 
    exit;
} else {
    echo "<script>alert('Login e/ou senha incorreto(s)'); history.back();</script>";
}
?>