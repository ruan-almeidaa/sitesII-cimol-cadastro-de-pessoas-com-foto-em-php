# Cadastro de pessoas com foto nome e e-mail
### Tecnologias utilizadas:
 - PHP
 - Bootstrap
 - MySql
 - HTML
 - CSS

### Validações:

A aplicação possui validações tanto no lado do cliente quanto no servidor, sendo obrigatório o envio dos campos de 'nome' e 'email'.  Validando no back-end da seguinte forma:

    (trim($_POST['nome']) != "" && $_POST['nome'] != null && trim($_POST['email']) != "" && $_POST['email'] != null)

Já o campo de 'foto' não é obrigatório, e quando não for enviado será gravado `null` no banco de dados.
Ao acessar a página onde são apresentadas as fotos, é validado se o campo de foto da pessoa tem algum valor e se não tiver será mostrado um avatar padrão.

    	if(trim($url_imagem)==""){
    	    $url_imagem = "padrao.png";   
      }

 
Mas quando uma foto é enviada, é conferido antes de fazer a gravação se ela possui uma das seguintes extensões:

	   if($extensao !="jpg" && $extensao !="png" && $extensao !="jpeg"){ ?>
	    <script>
		    window.alert("Desculpe, apenas arquivos JPG, JPEG e PNG são permitidos.");
		    window.location.href = "cadastrarPessoa.php";
	    </script>
    <?php
	    }

 Se o bloco acima retornar `false` a gravação da imagem continua entrando no bloco onde a aplicação executa as seguintes etapas:

Armazena o nome da foto na variável `$arquivo` 
  

      $arquivo = $caminho_dir.basename($_FILES['foto']['name']); 

Armazena a extensão da foto, garantindo que ela esteja toda em minúsculo com a função `strlower()`

    $extensao = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
Cria um novo nome para a foto, usando a função `md5()` para gerar um hash do nome original, e também a função `uniqid()` para garantir que não existam fotos com os mesmos nomes.

    $novo_nome = md5(uniqid($_FILES["name"])).".".$extensao;
É setada  a pasta para onde irão as fotos

    $diretorio = "upload/";
A foto é movida para a pasta, já usando seu novo nome único

    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);
