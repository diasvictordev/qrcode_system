<?php 
session_start();
include('conexao.php');

if(empty($_POST['cpf']) || empty($_POST['senha'])){
  header('Location: login_aluno.php');
  exit();
}

$cpf = mysqli_real_escape_string($connection, $_POST['cpf']);
$senha = mysqli_real_escape_string($connection, $_POST['senha']);

$query = "SELECT cpf, senha FROM aluno WHERE cpf = '{$cpf}' and senha = '{$senha}'";
$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if ($row == 1){
  $_SESSION['cpf'] = $cpf;
  header('Location: home_aluno.php');
  exit();
}
else{
  header('Location: login_aluno.php');
  exit();
}
exit;
?>