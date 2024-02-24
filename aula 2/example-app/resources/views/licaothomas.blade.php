<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfólio Thomas</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

#navespaco {
    padding-right: 4vh;
}

#inicio {
    background-image: linear-gradient(to bottom right, #9EAD85, #344E41);
    width: 100%;
    height: 100vh;
    padding-top: 40vh;
    color: #E5E3DC;
    font-family: Work Sans;
    letter-spacing: 3px;
}

.container {
    align-items: center;
    text-align: center;
}

#sobre {
    background-color: #101915;
    width: 100%;
    height: 100vh;
    padding-top: 10vh;
    font-family: Work Sans;
    color: #E5E3DC;
    letter-spacing: 2px;
}

#Thomas {
    width: 30%;
    height: 30%;
    border: #18251F 5px solid;
    border-radius: 50%;
}

.titulo {
    font-weight: bold;
    font-size: 4vh;
    padding-top: 3vh;
    padding-bottom: 3vh;
}

.conteudo {
    font-size: 2vh;
}

footer {
    background-color: #18251F;
    width: 100%;
    height: 20vh;
    padding: 5vh;
    font-family: Work Sans;
    color: #E5E3DC;
    letter-spacing: 2px;
}

.copyright {
    padding-bottom: 2vh;
}
.botao {
    width: 15vh;
    height: 5vh;
    padding: 3vh;
    text-decoration: none;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a id="navespaco" class="navbar-brand">Thomas John Ertel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#inicio">Início</a>
              <a class="nav-link active" href="#sobre">Sobre mim</a>
            </div>
          </div>
        </div>
      </nav>

      <section id="inicio">
        <div class="container">
            <h1>Sejam Bem-vindos!</h1>
            <h2>Meu nome é Thomas John Ertel</h2>
            <h3>Estudante de Sistemas para Internet</h3>
        </div>
      </section>

      <section id="sobre">
        <div class="container">
          <img src="https://i.pinimg.com/474x/29/a7/d5/29a7d533df49c5eeb408f245d7078843.jpg" id="Thomas">
        </div>
        <div class="container">
          <p class="titulo">Sobre mim</p>
          <p class="conteudo">Atualmente cursando o ensino superior em sistemas para internet, buscando aprofundar os conhecimentos em tecnologia e obter cada vez mais conhecimento.
            Com muita determinação e força de vontade já venho me desenvolvendo na área a 3 anos atuando em áreas como programação front-end, back-end e banco de dados, com conhecimentos em HTML, CSS, JavaScript e PHP.
            Tenho também experiência em vendas de pequenos empreendedores de produtos e itens diversos na plataforma OLX.</p>
        </div>
      </section>

      <footer>
        <div class="container">
          <p class="conteudo copyright">© Thomas John Ertel - 2024</p>
        </div>
        <div class="container">
          <a href="https://www.linkedin.com/in/thomasjohnertel/" class="btn btn-primary mx-2" target="_blank"><i
            class="bi bi-linkedin"></i> Linkedin</a>
          <a href="https://github.com/ThomasJohnErtel" class="btn btn-outline-light mx-2" target="_blank"><i
            class="bi bi-github">
            GitHub</i></a>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>