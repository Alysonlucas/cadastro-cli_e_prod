<?php
if($_POST["cxprod"] != ""){
    require_once "factory/conexao.php";
    $produto = $_POST['cxproduto'];
    $marca = $_POST['cxmarca'];
    $qtde = $_POST['cxqtde'];
    $setor = $_POST['cxsetor'];
    $valor = $_POST['cxvalor'];
    $inserir = "insert into tbproduto(produto,marca,qtde,setor,valor)
    values('$prod','$marca','$qtde','$setor','$valor')";
    $gravar = mysqli_query($conn,$inserir);
    echo "Dados gravados com sucesso!";
}else{
    echo "Digite um produto, para gravar os dados!";
}
?>