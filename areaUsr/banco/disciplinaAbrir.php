<?php

require_once ('../../banco/configuracao.php');

session_start();

$_SESSION["grupos"] = $_POST['grupos'];

echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php'>";

?>