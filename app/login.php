<?php

require_once("conecta.php");

$query = $conect->prepare("SELECT * FROM tb_vetCad WHERE email = :EMAIL AND senha = :SENHA");

$email = $_POST["email"];
$senha = $_POST["senha"];

$query->execute(array(

    ':EMAIL' => $email,
    ':SENHA' => $senha

));

$users = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($users) <= 0){

    echo "<h1>Nome ou senha não encontrados</h1>";

}else{

    $userValid = $users[0];

    session_start();

    $_SESSION['email'] = $userValid['email'];
    $_SESSION['senha'] = $userValid['senha'];

    $_SESSION["login"] = true;

    header('Location: redireciona.php');

}






?>