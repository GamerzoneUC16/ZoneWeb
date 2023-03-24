<?php 
include '../conn/connect.php';


$inicio = "http://localhost:8080/ZoneWeb/loja.php";
if($_POST){


    $id     =   $_POST['id'];
    $username  =   $_POST['username'];
    $email  =   $_POST['email'];
    $senha  =   $_POST['senha'];
    $nivel  =   $_POST['nivel'];

    $insertSQL  =   "insert usuarios (username, email, senha, nivel) values ('$username','$email', md5('$senha'),'$nivel')";
$resultado  =   $conn->query($insertSQL);


if(mysqli_insert_id($conn)){
    header("Location: $inicio");
}else{
    header("Location: $inicio");
};
 };
// Fim Cadastrar
if(email($id) == $email) {
    echo '<div class="form__group field" hidden>
    <input class="form__field" type="text" name="nivel" id="nivel" placeholder="Nivel" maxlength="100" required>
    <label class="form__label" for="nivel">Nivel</label>
<br>';
} else {
    '<div class="form__group field">
    <input class="form__field" type="text" name="nivel" id="nivel" placeholder="Nivel" maxlength="100" required>
    <label class="form__label" for="nivel">Nivel</label>
<br>';
}

?>