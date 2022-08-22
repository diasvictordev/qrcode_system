<?php 
session_start();
include('conexao.php');

if(empty($_POST['cpf']) || empty($_POST['senha'])){
  header('Location: login_professor.php');
  exit();
}

$cpf = mysqli_real_escape_string($connection, $_POST['cpf']);
$senha = mysqli_real_escape_string($connection, $_POST['senha']);

$query = "SELECT cpf, senha FROM professor WHERE cpf = '{$cpf}' and senha = '{$senha}'";
$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if ($row == 1){
  header('Location: qrcode_professor.html');
  exit();
}
else{
  header('Location: login_professor.php');
  exit();
}
exit;
?>