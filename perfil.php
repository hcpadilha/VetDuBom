<?php
include("app/verifica.php");

session_start();

if (logIn()){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" id="logo"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Exames</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Fale conosco</a>
                </li>
                <li>
                    <a href="./includes/formLogin.php"><button type="button" class="btn btn-info shadow" id="btn1">Login</button></a>
                </li>
                <li>
                    <a href="./includes/formCad.php"><button type="button" class="btn btn-info shadow" id="btn2">Cadastre-se</button></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container mt-5"> 
    <div class="row">
        <h1 class="col-6">Bem vindo ao seu perfil</h1>
    </div>
    <div class="row">
    <a href="app/logout.php"><button type="button" class="btn btn-info shadow col-6">Sair</button></a>
    </div>
</div> 
<?php

}else {
    echo "Area restrita";
}

?>
</body>
</html>