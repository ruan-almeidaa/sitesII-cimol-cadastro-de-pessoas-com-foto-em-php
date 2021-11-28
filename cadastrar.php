<?php
    include("conexao.php");
    

    $_POST['nome'] = ( isset($_POST['nome']) ) ? $_POST['nome'] : null;
    $_POST['email'] = ( isset($_POST['email']) ) ? $_POST['email'] : null;
    $foto = $_FILES['foto'];


    if(trim($_POST['nome']) != "" && $_POST['nome'] != null && trim($_POST['email']) != "" && $_POST['email'] != null){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $arquivo = $caminho_dir.basename($_FILES['foto']['name']);
        $extensao = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
        $novo_nome = md5(uniqid($_FILES["name"])).".".$extensao;
        $diretorio = "upload/";
        move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);

        if (trim($extensao) != ""){
            if($extensao !="jpg" && $extensao !="png" && $extensao !="jpeg"){ ?>

                <script>
                window.alert("Desculpe, apenas arquivos JPG, JPEG e PNG são permitidos.");
                window.location.href = "cadastrarPessoa.php";

                </script>
        <?php
            }else{
               $sql = "INSERT INTO pessoas (nomePessoa, emailPessoa, fotoPessoa) VALUES('$nome', '$email', '$novo_nome')"; 
            }
            
        }else{    
            $sql = "INSERT INTO pessoas (nomePessoa, emailPessoa) VALUES('$nome', '$email')";
        }

        mysqli_query($conexao, $sql) or die ("erro ao inserir");
        mysqli_close($conexao);

        header('Location: index.php');

    }else{ ?>
            <script>
                window.alert("Por favor preencha os campos de 'nome e 'email' com caracteres válidos!")
                window.location.href = "cadastrarPessoa.php"
            </script>
   <?php } ?>

