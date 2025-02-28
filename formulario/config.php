<?php


$dbhost ="Localhost";
$dbUsername= "root";
$dbpassword ="";
$dbName ="eventos";

$conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);
if ($conexao->connect_errno)
{

    echo "Erro";
}
else

{
    echo "conexao efetuada com sucesso";
}

?>  