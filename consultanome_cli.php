<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos dados</title>
</head>
<body>

    <?php
        require_once "factory/conexao.php";
        $cliente = $_POST['cxnomepesquisa'];
        $consulta = "select * from tbcliente where cliente = '$cliente'";
        $executa = mysqli_query($conn,$consulta);
        $coluna = mysqli_fetch_array($executa); 
    ?>
    
    <h1>Resultado Geral:</h1>
    Nome:
    <?php echo $coluna["cliente"];?> <br>
    Idade:
    <?php echo $coluna["idade"];?> <br>
    E-mail:
    <?php echo $coluna["email"];?> <br>
    Cidade:
    <?php echo $coluna["cidade"];?> <br>


    
</body>
</html>