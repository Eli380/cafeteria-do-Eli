<?php

//PEGANDO OS DADOS VINDOS DO FORMULARIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('h:i:s');

//CONFIGURACOES DE CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'eventos.sql';

//CONEXAO COM NOSSO BANCO DE DADOS
$conn = new mysqli($server, $usuario, $senha, $banco);

//VERIFICAR CONEXAO
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
}


//PREPARAR COMANDO PARA TABELA
$smtp = $conn->prepare("INSERT INTO clientes(nome, email, mensagem, data, hora) VALUES (?,?,?,?,?)");
$smtp->bind_param("sssss", $nome, $email, $mensagem, $data_atual, $hora_atual);

if($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
}else{
    echo "erro no envio da mesagem:" .$smtp->error;
}

$smtp->close();
$conn->close();

?>

