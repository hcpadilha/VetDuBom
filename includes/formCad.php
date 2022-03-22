







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section class="container d-flex mt-3 justify-content-center ">
        

        <div class="card" style="width: 30rem; margin-top: 100px">
            <div class="card-body">
                <h5 class="card-title">Faça seu Cadastro</h5>
                <div class="form-group mt-5">
                    <form action="../app/cadastra.php" method="post">
                        <!-- Inicio linha1 formulario-->
                        <div class="row form-group mt-5">
                            <div class="mt-2" >
                                <input class="form-control" type="text" name="nome" placeholder="Nome">
                            </div>
                            <div class="mt-2">
                                <input class="form-control" type="text" name="genero" placeholder="Gênero">
                            </div>
                        
                        </div>
                        <!-- Fim linha1 formulario-->
            
                        <!-- Inicio linha2 formulario-->
                        <div class="row form-group">     
                            <div class="mt-2">
                                <input class="form-control" type="date" name="nascimento" placeholder="Data de Nascimento">
                            </div>
                            <div class="mt-2">
                                <input class="form-control" type="text" name="cpf" placeholder="CPF">        
                            </div>
                            <div class="mt-2">
                                <input class="form-control" type="text" name="email" placeholder="E-mail">        
                            </div>
                            <div class="mt-2">
                                <input class="form-control" type="text" name="cel" placeholder="(00) 0000-0000">        
                            </div>
                            <div class="mt-2">
                                <input class="form-control" type="password" name="senha" placeholder="Senha">        
                            </div>
                        </div>
            
                    
            
            
                        <!-- Fim linha2 formulario-->
            
                        <!--Inicio Botão-->         
            
                        <div class="row mt-3 justify-content-center ">
                        
                            <button class="btn btn-info" type="submit" name="submit">Enviar</button>
                        </div>
                                <!--Fim botão-->
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>