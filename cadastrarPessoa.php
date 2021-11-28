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
        <a href="index.php"><i class="fas fa-home iconesPrimarios"></i></a>
    </nav>
    <br>
    <div class="container">
        <div class="card" id="formularioPergunta">
            <div class="card-header">
                <h3>Cadastrar nova pessoa!</h3>
                <hr>
            </div>

            <div class="card-body">
                <form method="POST" action="cadastrar.php" enctype="multipart/form-data">
                    <label for="tituloPergunta">Nome</label>
                    <input type="text" class="form-control" placeholder="Qual o nome da pessoa?" name="nome" id="nome" required>
                    <br>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Qual o melhor e-mail?" name="email" id="email" required>
                    <br>
                    <label for="email">Foto</label>
                    <br>
                    <input type="file" name="foto" id="foto">
                    <br>
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                    <a class="btn btn-danger" href="index.php">Cancelar</a> 
                </form>
            </div>
        </div>
       
        
        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    
</body>
</html>