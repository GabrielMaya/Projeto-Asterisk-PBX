<?php
$host = "localhost";
$user = "root";
$pass = "Telec0m900012@";
$base = "asterisk";

$conexao = mysqli_connect ($host,$user,$pass,$base);


if (mysqli_connect_errno()) {
   // echo "Erro na Conexao ao  MySQL: " . mysqli_connect_error();
  }else{
    //echo "conexão com o banco efetuada com sucesso";
  }

?>