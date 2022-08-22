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
      <form action="validacao_login_professor.php" method="POST">
        
      <h1>Login professores</h1>
      
        <label for="username">CPF</label>
        <input placeholder="Digite o CPF aqui" type="text" name="cpf" id="cpf" />
        <label for="password">Senha</label>
        <input placeholder="Digite a senha aqui" type="password" name="senha" id="senha" />
        <div class="form-group">
          <input type="checkbox" name="remember" id="remember"> Lembre-me
        </div>

        <button type="submit">Logar</button>


      </form>
    </main>
  </body>
</html>
