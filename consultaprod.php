<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Resultado</title>
</head>
<body>
        <h1>
            Resultado da Pesquisa
        </h1>
        <?php
                require_once "factory/conexao.php";
                $nome = $_POST["cxnomepesquisa"];
                $consulta = "select *from tbproduto where produto = '$nome' ";
                $executa = mysqli_query($conn,$consulta);

                $coluna = mysqli_fetch_array($executa);
        ?>

        
        Produto: <?php echo $coluna["produto"]; ?><br>
        Marca: <?php echo $coluna["marca"]; ?><br>
        Quantidade: <?php echo $coluna["qtde"]; ?><br>
        Setor: <?php echo $coluna["setor"]; ?><br>
        Valor: <?php echo $coluna["valor"]; ?><br>
</body>
</html>