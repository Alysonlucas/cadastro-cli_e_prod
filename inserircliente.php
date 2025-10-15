<?php
if($_POST["cxnome"] != ""){
    require_once "factory/conexao.php";
    $nome = $_POST['cxnome'];
    $idade = $_POST['cxidade'];
    $email = $_POST['cxemail'];
    $cidade = $_POST['cxcidade'];
    $inserir = "insert into tbcliente(cliente,idade,email,cidade)
    values('$nome','$idade','$email','$cidade')";
    $query = mysqli_query($conn,$inserir);
    echo"
    <script>
    alert('Cliente cadastrado com sucesso!');
    window.location.href = 'cadcliente.php';
    </script>
    ";
}else{
    echo "<script>
    alert('Digite um nome, para gravar os dados!');
    </script>";
}
?>