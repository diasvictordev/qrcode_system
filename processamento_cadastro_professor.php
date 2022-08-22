<?php 
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$resultado_professor = "INSERT INTO professor (nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";
$insercao_professor = mysqli_query($connection, $resultado_professor);

if(mysqli_insert_id($connection)){
    header("Location: login_professor.php");
}
else{
    header("Location: login_professor.php");
}

?>