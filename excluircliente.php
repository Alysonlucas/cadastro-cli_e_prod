<?php
include_once 'factory/conexao.php';
$id = $_GET['id'];
$excluir = "delete from tbcliente where codcli='$id'";
$executar = mysqli_query($conn,$excluir);
if($executar){
    echo"
    <script>
      alert('Dados excluido com sucesso!');
      window.location.href='listar_cli.php';
      </script>
      ";
}else{
    echo "
    <script>
    alert('Erro ao excluir o cliente!');
    window.location.href='listar_cli.php';
    </script>
    ";
}



?>