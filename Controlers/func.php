<?php 
include "../conn/connect.php";

$email = $_POST['email'];
//  function email($email)
// {
   

    $Getmail = "select * from funcionario where email = $email";
    $resultado = $conn->query($Getmail);
    

    if (($resultado) > 0)
    {
        $row = mysqli_fetch_assoc($resultado);
        return  json_encode($row);
    }else {
        return "Nenhum Resultado Encontrado";
    }
// }





?>