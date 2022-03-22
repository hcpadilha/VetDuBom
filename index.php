<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VetDuBom</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://your-site-or-cdn.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
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
<main>
    
    <div class="" id="caogato"> 
        <img id="img1" src="img/cao e gato.jpg" alt="">

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6" id="sobrenos">
                <h2  id="titulo">Sobre Nós</h2>
                <p class="mt-5">
                    A VetDuBom é uma empresa de serviços veterinários à domicílio que atende exclusivamente nas cidades de Niterói e São Gonçalo*. Nosso foco é atuar no cuidado preventivo e manutenção da qualidade de vida do seu pet. <br><br>
        
        
                    Você poderá agendar consultas, vacinas e exames no dia e horário da sua preferência, através dos nossos canais digitais, e a nossa equipe irá até a sua residência. Seu pet pode contar, ainda, com o Petner Pro – um verdadeiro programa de acompanhamento da saúde do seu pet!<br><br>
        
        
                    Após cada atendimento, todos os dados ficam armazenados na nossa plataforma. Assim você consegue acompanhar o histórico de saúde do seu pet de forma completamente digital!<br><br>
        
        
                    *Verifique a disponibilidade do seu bairro.
                </p>
            </div>
            <div class="col-6">
                <img src="img/matéria medicina veterinária.png" alt="veterinaria e o cachorro">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
           <h2 class="link-info mt-5 " id="titulo2">Curiosidades sobre nosso Site</h2>
            <div class="col mt-5 " id="img3">
                <ul>    
                <li ><img src="img/dog.jfif" alt=""></li>
                <li class="mt-5"> <img src="img/casa.jfif" alt=""></li>
                <li class="mt-5"><img src="img/computador.jfif" alt=""></li>
                <li class="mt-5"><img src="img/computador.jfif" alt=""></li>
                </ul>

            </div>
            <div class="col mt-5" id="text">
                <h3 class="link-info">Praticidade</h3>
                <p>Com poucos cliques, você agenda consultas, exames e vacinas para o seu pet, sempre no seu domicílio. E pode acompanhar o histórico de saúde de forma digital, eliminando a papelada!</p>
                <h3 class="link-info">No conforto do seu lar</h3>
                <p>Para o pet, ser cuidado no seu próprio lar faz uma grande diferença! E por isso atendemos exclusivamente em domicílio. É melhor para ele, é melhor para você!</p>
                <h3 class="link-info">Segurança</h3>
                <p>Os atendimentos são sempre realizados por equipes treinadas e qualificadas, contendo um veterinário e um assistente técnico, para assegurar total segurança. Além disso, só utilizamos vacinas importadas e materiais de excelente qualidade.</p>
                <h3 class="link-info">Sempre on</h3>
                <p>Os atendimentos são sempre realizados por equipes treinadas e qualificadas, contendo um veterinário e um assistente técnico, para assegurar total segurança. Além disso, só utilizamos vacinas importadas e materiais de excelente qualidade.</p>
            </div>
        </div>


    </div>
    
</main>
<div class="container">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col-3">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
      <a href="index.php" id="logo2"><img src="img/logo.png"  alt=""> </a>
      <p class="text-muted">R. Alm. Tefé, 680 - Centro, Niterói - RJ, 24030-085 <br>
      (00) 0000-0000
      </p>
    </div>

    
    <div class="col-3 rodape mt-4">
    <h5>MENU</h5>
    <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Consultas</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Exames</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Fale conosco</a></li>
    
    </ul>
    </div>

    <div class="col-3 rodape mt-4">
    <h5>LEGAL</h5>
    <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Termos de serviço</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Política de privacidade</a></li>
        
    </ul>
    </div>

    <div class="col-3 rodape mt-4">
    <h5>REDES SOCIAIS</h5>
    <ul class="nav flex-column ">
    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#whatsapp"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
    </div>

  </footer>
</div>









<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>