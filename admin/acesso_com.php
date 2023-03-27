<?php 
session_name('GamerZone');

if(!isset($_SESSION)){
    session_start();

}

// segurança digital

// verificar se usuário está logado na sessão
if (!isset($_SESSION['username'])) {
    // Se não existir redirecionamos a sessão por segurança
    header('location: admin/login.php');
    exit;
}

$nome_da_sessao = session_name();


if (!isset($_SESSION['nome_da_sessao']) OR
($_SESSION['nome_da_sessao']!=$nome_da_sessao) ) {
    session_destroy();
    header('location: login.php');
}

if(!isset($_SESSION['username'])) {
    session_destroy();
    header('location: login.php');
}
?>