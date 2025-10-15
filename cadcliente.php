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

        <h1>Cadastro de clente</h1>


        <form action="consultanome_cli.php" method="POST">
            Digite um nome completo:<br>
            <input type="text" name="cxnomepesquisa">
            <input type="submit" value="Pesquisar">
            <br><br><br>
            <button type="button" onClick="lista()">listar</button>
        </form>
        <br><br><br>

        <hr />


        <form action="inserircliente.php" method="POST">
            Cliente: <br />
            <input type="text" name="cxnome" /><br />
            Idade: <br />
            <input type="text" name="cxidade" /><br />
            Email: <br />
            <input type="text" name="cxemail" /><br />
            Cidade: <br />
            <input type="text" name="cxcidade" /><br />
            <input type="submit" value="Gravar" />
        </form>
        <div class="voltar">
            <a href="index.php">← Voltar à página inicial</a>
        </div>
    </div>
</body>

</html>