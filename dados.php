<?php

$local_serve = "localhost";

$usuario_serve = "root";

$senha_serve = "";

$banco = "banco";

$connect = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ('Não foi possivel se conectar ao banco de dados.');

$nome = $_POST['Nome'];

$sobrenome = $_POST['Sobrenome'];

$EMAIL = $_POST['Email'];

$NOME = strtoupper($nome);

$SOBRENOME = strtoupper($sobrenome);

$nomeinteiro = $NOME . " " . $SOBRENOME;

$email = strtolower($EMAIL);


$inserir = "INSERT into cadastro values('$nomeinteiro', '$email')";

mysqli_query($connect, $inserir) or die ("Não foi possível fazer o cadastro"); 

mysqli_close($connect);

echo"Cadastro realizado com sucesso!";

echo"$nomecompleto";

?>