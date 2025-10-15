<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista geral</title>
</head>
<body>
    <?php 
    require_once "factory/conexao.php";
    $consulta = "select *from tbcliente";
    $executa = mysqli_query($conn,$consulta);
    while($coluna = mysqli_fetch_array($executa)){
        ?>
        Nome:
        <?php echo $coluna["cliente"];?> <br>
        Idade:
        <?php echo $coluna["idade"];?> <br>
        E-mail:
        <?php echo $coluna["email"];?> <br>
        Cidade:
        <?php echo $coluna["cidade"];?> <br>
        <a href="excluircliente.php?id=<?php echo $coluna['codcli']?>">
          Excluir
         </a>
         <hr>
    <?php } ?>
</body>
</html>