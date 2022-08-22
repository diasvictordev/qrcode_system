<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title> Cadastro Sistema QR</title>
  <link rel="stylesheet" href="./css/pages.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/pages.css" />
  <link rel="stylesheet" href="./css/login.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
  <body>
    <main>
      <form action="processamento_cadastro_professor.php" method="POST">
        
      <h1>Cadastro de professores</h1>

      <label for="username">Nome</label>
        <input placeholder="Digite seu nome aqui" type="text" name="nome" id="nome" />
        <label for="username">CPF</label>
        <input placeholder="Digite uma senha aqui" type="text" name="cpf" id="cpf" />
        <label for="password">Senha</label>
        <input placeholder="Digite uma senha aqui" type="password" name="senha" id="senha" />

        <button type="submit">Cadastrar</button>

      </form>
    </main>
  </body>
</html>
