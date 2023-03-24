<?php 
include "../conn/connect.php";

$email = $_GET['email'];
//  function email($id)
// {
    global $conn;

    $Getmail = "select * from funcionario where email = $email";
    $resultado = $conn->query($Getmail); 

    if (mysqli_num_rows($resultado) > 0)
    {
        $row = mysqli_fetch_assoc($resultado);
        return  json_encode( $row);
    }else {
        return "Nenhum Resultado Encontrado";
    }
// }





?>