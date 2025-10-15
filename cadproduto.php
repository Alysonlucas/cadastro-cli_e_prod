<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <script src="js/javinha.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro de produto</h1>
        <form action="consultaprod.php" method="POST">
            Digite um nome completo:<br>
            <input type="text" name="cxnomepesquisa">
            <input type="submit" value="Pesquisar">
            <br><br>
            <button type="button" onClick="listarProdutos()">listar</button>
        </form>
        <br><br><br>
        <hr />
        <form action="inserirproduto.php" method="POST">
            Produto: <br />
            <input type="text" name="cxproduto" /><br />
            Marca: <br />
            <input type="text" name="cxmarca" /><br />
            Quantidade: <br />
            <input type="text" name="cxqtde" /><br />
            Setor: <br />
            <input type="text" name="cxsetor" /><br />
            Valor: <br />
            <input type="text" name="cxvalor" /><br />
            <input type="submit" value="Gravar" />
        </form>
    </div>
</body>

</html>