<?php
   require_once("conecta.php"); 

    if($_POST["nome"] && $_POST["genero"] && $_POST["nascimento"] && $_POST["cpf"] && $_POST["email"] && $_POST["cel"] && $_POST["senha"]){
        $nome = $_POST["nome"];
        $genero = $_POST["genero"];
        $nascimento = $_POST["nascimento"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $cel = $_POST["cel"];
        $senha = $_POST["senha"];

        $query = $conect->prepare("INSERT INTO tb_vetCad (nome, genero, nascimento, cpf, email, cel, senha) VALUES(:NOME, :GENERO, :NASCIMENTO, :CPF, :EMAIL, :CEL, :SENHA)");
        
        $query->execute(array(
        ':NOME' =>$nome,
        ':GENERO'=>$genero,
        ':NASCIMENTO'=>$nascimento,
        ':CPF'=>$cpf,
        ':EMAIL'=>$email,
        ':CEL'=>$cel,
        ':SENHA' =>$senha
     ));

      echo "Deu certo!" ;

     header("Location: ../index.php");

    }
?>
