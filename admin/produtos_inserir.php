<?php
// Incluindo o Sistema de autenticação
include("acesso_com.php");

// Incluir o arquivo e fazer a conexão
include("../conn/connect.php");

if($_POST){

        // Guardo o nome da imagem no banco e o arquivo no diretório
    if(isset($_POST['enviar'])){
        $nome_img   =   $_FILES['imagem_produto']['name'];
        $tmp_img    =   $_FILES['imagem_produto']['tmp_name'];
        $dir_img    =   "../images/".$nome_img;
        move_uploaded_file($tmp_img,$dir_img);
    };

    // Receber os dados do formulário
    // Organizar os campos na mesma ordem
    $id    =   $_POST['id'];
    $titulo   =   $_POST['titulo'];
    $descricao     =   $_POST['descricao'];
    $resumo     =   $_POST['resumo'];
    $preco      =   $_POST['preco'];
    $destaque     =   $_POST['destaque'];
    $desconto   =   $_POST['desconto'];
    $tipos  =   $_POST['tipo_id'];

    // Consulta SQL para inserção de dados
    $insertSQL  =   "insert produtos (titulo, descricao, resumo, preco, destaque, desconto, tipo_id) values ('$titulo','$descricao','$resumo','$preco','$destaque','$desconto',$tipos)";
    $resultado  =   $conn->query($insertSQL);

    // Após a ação a página será redirecionada
    if(mysqli_insert_id($conn)){
        header("Location: produtos_list.php");
    }else{
        header("Location: produtos_list.php");
    };
};

// Selecionar os dados da chave estrangeira
$ListaTipos = $conn->query("select * from tipos");
$row_fk = $ListaTipos->fetch_all();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Produtos - Insere</title>
    <meta charset="UTF-8">
    <!-- Link arquivos Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link para CSS específico -->
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            /* background-image: linear-gradient(45deg, cyan, blue ); */
        }
        .tela-cadastro{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
        .Space
        {
            position: absolute;
            bottom: 75%;
            left: 50%;
            transform: translate(-60%, -40%);  
        }
        .Space2
        {
           position: static;
           padding-top: 15%;
           padding-bottom: 5%;
           padding-left: 23%;
        }
        .img-lg-rodapé {
        width: 60%;
        height: 100%;
        position: relative;
        left: px;
        top: 20px;
    }
    .form__group {
  position: relative;
  padding: 20px 0 0;
  margin-top: 10px;
  width: 100%;
  max-width: 965px;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: none;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 17px;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}

.form__field::placeholder {
  color: transparent;
}

.form__field:placeholder-shown ~ .form__label {
  font-size: 17px;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 17px;
  color: #9b9b9b;
  pointer-events: none;
}

.form__field:focus {
  padding-bottom: 9px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #116399, #38caef);
  border-image-slice: 1;
}

.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 17px;
  color: #38caef;
  font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}
.fundofixo{
  background: url('../images/Fundo/Fundo.jpg') no-repeat fixed;
  -webkit-background-size: cover;
  background-size: cover;
 }
    </style>
</head>
<body class="fundofixo">

<main class="container">
    <div class="row"><!-- Abre row -->
        <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4"><!-- Dimensionamento -->
            <h2 class="breadcrumb text-danger">
                Inserindo Produtos
            </h2>
            <!-- Abre thumbnail -->
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                <form action="produtos_inserir.php" method="POST" name="form_login" id="form_login" enctype="multipart/form-data">
        <!-- Cadastro Cliente -->
        <div class="form__group field">
            <input name="titulo" type="text" class="form__field" id="titulo" aria-describedby="titulo">
            <label for="titulo" class="form__label">Titulo:</label>
        </div>
        <div class="form__group field">
            <input name="descricao" type="text" class="form__field" id="descricao" aria-describedby="descricao">
            <label for="descricao" class="form__label">Descrição:</label>
        </div>
        <div class="form__group field">
            <input name="resumo" type="text" class="form__field" id="resumo" aria-describedby="resumo">
            <label for="resumo" class="form__label">Resumo:</label>
        </div>
        <div class="form__group field">
            <input name="preco" type="text" class="form__field" id="preco" aria-describedby="preco">
            <label for="preco" class="form__label">Preço:</label>
        </div>
        <div class="form__group field">
            <input name="destaque" type="text" class="form__field" id="destaque" aria-describedby="destaque">
            <label for="destaque" class="form__label">Destaque:</label>
        </div>
        <div class="form__group field">
            <input name="desconto" type="text" class="form__field" id="desconto" aria-describedby="desconto">
            <label for="desconto" class="form__label">Desconto:</label>
        </div>
        <div class="form__group field">
        <select for="" class="form-select" aria-label="tipo_id" name="tipo_id" id="tipo_id" required>
            <?php foreach ($row_fk as $set) { ?>
                  <option value=<?php echo $set['0']?>><?php echo $set['2']; ?></option>
                  <?php } ?>
                </select>
               
            <label for="tipo_id" class="form__label">Tipos:</label>
        </div>
        <!-- Fim Cadastro Cliente -->
        <br>
        <br>
        <br>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Script para a imagem -->
<script>
document.getElementById("imagem_produto").onchange = function(){
    var reader = new FileReader();
    if(this.files[0].size>528385){
        alert("A imagem deve ter no máximo 500Kb");
        $("#imagem").attr("src","blank");
        $("#imagem").hide();
        $('#imagem_produto').wrap('<form>').closest('form').get(0).reset();
        $('#imagem_produto').unwrap();
        return false;
    };
    if(this.files[0].type.indexOf("image")==-1){
        alert("Formato inválido, escolha uma imagem!");
        $("#imagem").attr("src","blank");
        $("#imagem").hide();
        $('#imagem_produto').wrap('<form>').closest('form').get(0).reset();
        $('#imagem_produto').unwrap();
        return false;
    };
    reader.onload = function (e) {
        // obter dados carregados e renderizar miniatura.
        document.getElementById("imagem").src = e.target.result;
        $("#imagem").show();
    };  
    // leia o arquivo de imagem como um URL de dados.
    reader.readAsDataURL(this.files[0]);
};
</script>

<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>