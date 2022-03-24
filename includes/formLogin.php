<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    


<section class="container d-flex mt-5 justify-content-center ">


    <div class="card" style="width: 30rem; margin-top: 100px">
    <div class="card-body">
        <h5 class="card-title">Faça seu Login</h5>
        <form action="../app/login.php" method="post">
            <div class="row form-group">
                <div class="col-12 mt-5">
                    <input type="text" class="form-control" placeholder="email@email.com.br" name="email">
                </div>           
            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    <input type="password" class="form-control" placeholder="Senha" name="senha">
                </div>
            </div>

            <div class="row mt-3 justify-content-center">           
                <input type="submit" class="btn btn-info" value="entrar" name="btn-logar">         
            </div>
        </form>
    </div>
    </div>   

</section>
</body>
</html>