<?php
    include ("conexao.php");
    $idPessoa = intval($_GET['pessoa']);

    $sql = "DELETE FROM pessoas WHERE idPessoa = '$idPessoa'";

    $sql_query = mysqli_query($conexao, $sql) or die ("erro ao inserir");
    mysqli_close($conexao);

    if($sql_query){
?>

    <script>
        alert("Deletada com sucesso!");
        window.location.href = "index.php";
    </script>
    

<?php }else{?>

    <script>
        alert("não foi possível deletar!");
        window.location.href = "index.php";
    </script>

<?php } ?>