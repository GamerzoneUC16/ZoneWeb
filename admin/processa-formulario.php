<?php 
include "../conn/connect.php";

$login = "http://localhost:8080/ZoneWeb/admin/login.php";

$consultaTel = $conn->query("select id from telefone;  ");
$rowtel = $consultaTel->fetch_assoc();
print_r($rowtel);

$consultaEnd = $conn->query("select * from enderecos ");
$rowEnd = $consultaEnd->fetch_assoc();
print_r($rowEnd);


$GetTel = mysqli_insert_id($rowtel['id']);
$GetEnd =mysqli_insert_id($rowEnd['id']);

if($_POST){
    // Cadastro Cliente
        $id         = $_POST['id'];
        $nome       = $_POST['nome'];
        $sobrenome  = $_POST['sobrenome'];
        $cpf        = $_POST['cpf'];
        $GetTel     = $_POST['telefone_id'];
        $GetEnd     = $_POST['endereco_id'];
        
        

        $insertCli = "insert cliente (nome, sobrenome, cpf,telefone_id,endereco_id) values ('$nome','$sobrenome','$cpf',1, 1);";
        $resultadoCli = $conn->query($insertCli);
    // Fim Cadastro Cliente
  $idtel = $conn->insert_id;
  $idend = $conn->insert_id;


    if(mysqli_insert_id($conn)){
        header("Location: $login");
    }else{
        header("Location: $login");
    };
}    

if($_POST){
// Cadastro Telefone
    $id_tel         = $_POST['id'];
    $numero_tel     = $_POST['numero_tel'];
    $tipo_tel       = $_POST['tipo_tel'];

    $insertTel = "insert telefone (numero_tel,tipo_tel) values ('$numero_tel','$tipo_tel')";
    $resultadoTel = $conn->query($insertTel);
//Fim Cadastro Telefone
}

if($_POST){
// Cadastro Endereco
    $id_end         = $_POST['id'];
    $logradouro     = $_POST['logradouro'];
    $numero_end     = $_POST['numero_end'];
    $bairro         = $_POST['bairro'];
    $cidade         = $_POST['cidade'];
    $uf             = $_POST['uf'];
    $cep            = $_POST['cep'];
    $complemento    = $_POST['complemento'];
    $tipo_end       = $_POST['tipo_end'];

    $insertEnd = "insert enderecos (logradouro,numero_end,bairro,cidade,uf,cep,complemento,tipo_end) values ('$logradouro','$numero_end','$bairro','$cidade','$uf','$cep','$complemento','$tipo_end')";
    $resultadoEnd = $conn->query($insertEnd);
    
// Fim Cadastro Endereco
}


?>