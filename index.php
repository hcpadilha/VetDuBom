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
    <!--Henrique esteve aqui-->
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
    <div class="text-center">
        <a href="" class="col-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg></a>
        <a href=""class="col-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg></a>
        <a href="" class="col-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>
      </div>
    </div>

  </footer>
</div>









<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
