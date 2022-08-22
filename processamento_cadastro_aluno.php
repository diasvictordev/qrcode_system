<?php 
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$resultado_aluno = "INSERT INTO aluno (nome, matricula, cpf, senha) VALUES ('$nome', '$matricula', '$cpf', '$senha')";
$insercao_aluno = mysqli_query($connection, $resultado_aluno);

if(mysqli_insert_id($connection)){
    header("Location: login_aluno.php");
}
else{
    header("Location: login_aluno.php");
}

?>