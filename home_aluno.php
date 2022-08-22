<?php 

include('protect.php');
include('conexao.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Home</title>
</head>
<body>
   
    <h1>Seja bem vindo, aluno! </h1>


    <form>
        <p>Escolha a disclina</p>
        <select>
            <option selected value="">Selecione...</option>
            <?php
           
            $query = $connection->query("SELECT nome FROM materia");
            ?>

            <?php while($reg = $query->fetch_array()){ ?>
                <option  value="<?php echo $_POST['materia'];?>">
                    <?php echo $_POST['materia']; ?>
                </option>

            <?php }?>
            
            
        </select>
        <input type="submit" class="button">
    </form>

    <table class="tabela" border="1">
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>00/00/0000</th>
            <th>00/00/0000</th>
            <th>00/00/0000</th>
            <!--Será preciso um laço para pegar as datas das aulas-->
            <th>Total</th>
        </tr>
        <tr>
            <td>x</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
    </table>
</body>
</html> 

