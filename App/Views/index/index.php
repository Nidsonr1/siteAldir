<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Aldir Campos </title>
  <link rel="shortcut icon " href="Imagens/Logo2.png" type="image/png">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</head>

<body>
  <div id="Sidebar">
    <div id="LogoEContato">
      <img src="./Imagens/Logo2.png" alt="Logo" id="home">
      <div id=Contato>
        <img src="./Imagens/Telefone.png" alt="Logo" width="12"> (88) 98120-6115 <br>
        <img src="./Imagens/Email.png" alt="Logo" width="12"> aldircamposassessoriaadm@gmail.com <br>
        <img src="./Imagens/Localizacao.png" alt="Logo" width="10"> Rua Manoel Piraca de Souza, S/N, Betolândia - Juazeiro do Norte/CE
      </div>
    </div>
    <hr id="Linha">
    <div id="Posicao">
      <div id="Navbar">
        <div id="Link">
          <a href="#home"> Início </a>
          <a href="#sobreNos"> Sobre nós </a>
          <a href="#Parceiros"> Parceiros </a>
          <a href="Contato"> Contato </a>
      </div>
      </div>
    </div>
    <div id="Topicos">
      <a href="#home"> Início </a>
      <a href="#sobreNos"> Sobre nós </a>
      <a href="#Parceiros"> Parceiros </a>
      <a href="Contato"> Contato </a>
    </div>
  </div>
  <div id="Slide">
    <!-- Bootstrap -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="Imagens/IMAGEM.jpg" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Imagens/IMAGEM.jpg" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Imagens/IMAGEM.jpg" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
  <div>
    <div class="Infos" id="sobreNos">
      <h1> Sobre nós </h1>
      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sem turpis, venenatis at odio in, porta
        laoreet est. Duis tincidunt sapien sed sollicitudin hendrerit. Duis sed bibendum nunc, vitae faucibus lectus.
        Suspendisse placerat ipsum sit amet quam dapibus, sit amet feugiat nulla eleifend. Morbi sed quam neque. Sed
        massa purus, dapibus a hendrerit non, tincidunt eget est. Etiam tincidunt, sem quis euismod porta, nulla dolor
        titor justo, sed maximus erat magna sed dolor. Proin dictum porta ligula, rhoncus dictum ex luctus sed. Cras
        sed turpis ut felis fermentum condimentum in at tortor. Aenean ultricies, ligula at scelerisque ornare, augue
        sapien tincidunt lacus, ac scelerisque libero sem sed tellus. Nunc placerat neque sit amet consectetur finibus.
        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris porttitor
        arcu eu odio vulputate, et semper tortor cursus. Etiam malesuada porta pretium. Vestibulum dictum arcu ut ante
        ultricies maximus. Maecenas eu rutrum ligula. </p>
    </div>
    <div class="Infos" id="Parceiros">
      <h1> Parceiros </h1>
      <div class="Cards">
        <div class="card" class="Efeito" style="width: 22rem;">
          <img src="./Imagens/IMAGEM.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" id="Prefeitura"> Prefeitura 1 </p>
            <p class="card-text" id="ContatoDaP"> <img src="./Imagens/Telefone.png" alt="Logo" width="12"> (xx) xxxxx -
              xxxx <br>
              <img src="./Imagens/Email.png" alt="Logo" width="12"> xxxxxxxx@gmail.com <br>
              <img src="./Imagens/Localizacao.png" alt="Logo" width="10"> Rua xxxxxxxxx - xxx
            </p>
          </div>
        </div>
        <div class="card" class="Efeito" style="width: 22rem;">
          <img src="./Imagens/IMAGEM.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" id="Prefeitura"> Prefeitura 2 </p>
            <p class="card-text" id="ContatoDaP"> <img src="./Imagens/Telefone.png" alt="Logo" width="12"> (xx) xxxxx -
              xxxx <br>
              <img src="./Imagens/Email.png" alt="Logo" width="12"> xxxxxxxx@gmail.com <br>
              <img src="./Imagens/Localizacao.png" alt="Logo" width="10"> Rua xxxxxxxxx - xxx
            </p>
          </div>
        </div>
        <div class="card" class="Efeito" style="width: 22rem;">
          <img src="./Imagens/IMAGEM.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" id="Prefeitura"> Prefeitura 3 </p>
            <p class="card-text" id="ContatoDaP"> <img src="./Imagens/Telefone.png" alt="Logo" width="12"> (xx) xxxxx -
              xxxx <br>
              <img src="./Imagens/Email.png" alt="Logo" width="12"> xxxxxxxx@gmail.com <br>
              <img src="./Imagens/Localizacao.png" alt="Logo" width="10"> Rua xxxxxxxxx - xxx
            </p>
          </div>
        </div>
      </div>
      <div class="Cards">
        <div class="card" class="Efeito" style="width: 22rem;">
          <img src="./Imagens/IMAGEM.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" id="Prefeitura"> Prefeitura 4 </p>
            <p class="card-text" id="ContatoDaP"> <img src="./Imagens/Telefone.png" alt="Logo" width="12"> (xx) xxxxx -
              xxxx <br>
              <img src="./Imagens/Email.png" alt="Logo" width="12"> xxxxxxxx@gmail.com <br>
              <img src="./Imagens/Localizacao.png" alt="Logo" width="10"> Rua xxxxxxxxx - xxx
            </p>
          </div>
        </div>
        <div class="card" class="Efeito" style="width: 22rem;">
          <img src="./Imagens/IMAGEM.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" id="Prefeitura"> Prefeitura 5 </p>
            <p class="card-text" id="ContatoDaP"> <img src="./Imagens/Telefone.png" alt="Logo" width="12"> (xx) xxxxx -
              xxxx <br>
              <img src="./Imagens/Email.png" alt="Logo" width="12"> xxxxxxxx@gmail.com <br>
              <img src="./Imagens/Localizacao.png" alt="Logo" width="10"> Rua xxxxxxxxx - xxx
            </p>
          </div>
        </div>
        <div class="card" class="Efeito" style="width: 22rem;">
          <img src="./Imagens/IMAGEM.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" id="Prefeitura"> Prefeitura 6 </p>
            <p class="card-text" id="ContatoDaP"> <img src="./Imagens/Telefone.png" alt="Logo" width="12"> (xx) xxxxx -
              xxxx <br>
              <img src="./Imagens/Email.png" alt="Logo" width="12"> xxxxxxxx@gmail.com <br>
              <img src="./Imagens/Localizacao.png" alt="Logo" width="10"> Rua xxxxxxxxx - xxx
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./_cdn/js/script.js"></script>
</body>

</html>