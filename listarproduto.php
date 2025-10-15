<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Lista Geral</title>
</head>

<body>
    <?php
    require_once "factory/conexao.php";
    $consulta = "select *from tbproduto";
    $executa = mysqli_query($conn, $consulta);
    while ($coluna = mysqli_fetch_array($executa)) {
        ?>

        Produto: <?php echo $coluna["produto"]; ?><br>
        Marca: <?php echo $coluna["marca"]; ?><br>
        Quantidade: <?php echo $coluna["qtde"]; ?><br>
        Setor: <?php echo $coluna["setor"]; ?><br>
        Valor: <?php echo $coluna["valor"]; ?><br>
        <hr>


    <?php } ?>
</body>

</html>