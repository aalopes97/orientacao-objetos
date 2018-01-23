<?php

$host = "localhost";
$user = "root";
$pass = "senha";
$db = "teste";

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Deu ruim: " . $conn->connect_error);
}
else{
  echo "conectou";
}

$nome = $_POST['nome'];
$email = $_POST['codigo'];

$sql = "INSERT INTO user (nome, email) VALUES ('".$nome."',  '".$email."')";

if ($conn->query($sql) === TRUE) {
    echo "foi";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
