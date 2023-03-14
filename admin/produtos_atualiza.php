<?php 
// incluindo o Sistema de autenticação 
include("acesso_com.php");

// Incluir o arquivo e fazer a conecção
include("../conn/connect.php");


if($_POST){

    // Guardo o nome da imagem no banco e o arquivo no diretório
    if($_FILES['images_prod']['name']){
        $nome_img   =  $_FILES['images_prod']['name'];
        $tmp_img    =   $_FILES['imagem_prod']['tmp_name'];
        $dir_img    =   "../images/".$nome_img;
        move_uploaded_file($tmp_img,$dir_img);
    }else{
        $nome_img   =   $_POST['imagem_produto_atual'];
    };

    // Receber os dados do formulário
    // Organizar os campos na mesma ordem 
    $id    =   $_POST['id'];
    $titulo     =   $_POST['titulo'];
    $descricao     =   $_POST['descricao'];
    $resumo     =   $_POST['resumo'];
    $preco      =   $_POST['preco'];
    $imagem_produto     =   $nome_img;

    // Campo do form para filtrar o registro (WHERE)
    $id      = $_POST['id_produto'] ;

    // Consulta SQL para atualização de dados
    $updateSQL  =   "UPDATE produtos
                        SET id     =   '$id',
                            destaque_produto    =   '$destaque_produto',
                            descricao      =   '$descricao',
                            resumo      =   '$resumo',
                            valor_produto       =   '$valor_produto',
                            imagem_produto      =   '$imagem_produto'
                        WHERE id_produto = $id ";
    $resultado  =   $conn->query($updateSQL);
}

?>