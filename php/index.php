<?php

$host = 'db';  //the name of the mysql service inside the docker file.
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

//Criando a conexão
$conn = mysqli_connect($host,$user,$password,$db);


// Checando a conexão
if($conn->connect_error) {

  die ("Não foi possível conectar: " . $conn->connect_error()); 
}

echo 'Conexão bem sucedida';
mysqli_close($conn);

?>
