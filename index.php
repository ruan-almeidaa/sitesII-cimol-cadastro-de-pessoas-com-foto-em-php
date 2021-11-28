<?php
    include("conexao.php");
    $sql = "SELECT * FROM pessoas";
    $con = mysqli_query($conexao, $sql) or die ("erro ao inserir");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

    
    <title>Cadastro de pessoas</title>
</head>
<body>
    <nav class="navbar navbar-primary bg-light">
        <a href=""><i class="fas fa-home iconesPrimarios"></i></a>
    </nav>
    <div class="container">

        <hr>
        <h2>Pessoas</h2>
        <input type="button" name="redirect" onClick="window.location='cadastrarPessoa.php';" class="btn btn-success" value="Cadastrar nova">
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($dado = $con->fetch_array()){
                    $url_imagem = $dado["fotoPessoa"];
                    if(trim($url_imagem)==""){
                        $url_imagem = "padrao.png";
                    }
                ?>
                    <tr>
                        <td><?php echo "<img src='http://localhost/cimol/cadastro%20de%20pessoas/upload/$url_imagem' width='100' height='100'>" ?></td>
                        <td><?php echo $dado["nomePessoa"];?></td>
                        <td><?php echo $dado["emailPessoa"];?></td>
                        <td>

                        <a class="btn btn-danger" href="javascript: if(confirm('Tem certeza que deseja deletar <?php echo $dado['nomePessoa']; ?> da lista?'))
			            location.href='deletar.php?p=deletar&pessoa=<?php echo $dado['idPessoa']; ?>';">Deletar</a>
    
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/public/js/bootstrap.min.js"></script>
</body>
</html>