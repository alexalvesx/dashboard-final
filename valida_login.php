<?php

//Dados de acesso "chumbados"

$userMaster = "admin@blog.com";
$passMaster = "123456";

// Recebendo via POST

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email = $userMaster && $senha == $passMaster) {
    // Sucesso: vai para o Dashboard
    header ("Location: index.php");
} else {
    // Erro: Volta para o login com um sinalizador
    header ("Location: login.php?erro=1");
}
exit();

?>