<?php

$local_serve = "localhost";

$usuario_serve = "root";

$senha_serve = "";

$banco = "banco";

$connect = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ('Não foi possivel se conectar ao banco de dados');

$nome = $_POST['nome'];

$cpf = $_POST['CPF'];


$cpf2 = str_replace(".", "", $cpf);

$cpf3 = str_replace("-", "",$cpf2);


$inserir = "INSERT into cadastro2(nome, CPF) values('$nome','$cpf3')";

mysqli_query($connect, $inserir) or die ("Não foi possível fazer o cadastro."); 

mysqli_close($connect);

echo"Cadastro concluído com sucesso!";