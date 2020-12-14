<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];


$sql = "INSERT INTO contatos (nome, email, telefone)
VALUES ('$nome', '$email', '$telefone')";


?>