<?php 

if(!isset($_SESSION)){
session_start();
}

if(!isset($_SESSION['cpf'])){
    die('Você não pode acessar esta página pois não está logado');
}

?>