<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Marcela — Module Template</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../public/css/styles.css" />
  <style>
    img{
        padding: 50px 50px 0px 50px;
    }
    .lado{
            display: flex;
            align-items: center;
    }
  </style>
</head>
<body id="page-module-template">
  <header class="topbar" role="navigation" aria-label="Navegação principal">
    <nav class="nav-inner">
      <a href="../../index.html" class="nav-link">Home</a>
      <a href="../../cadastro_menu_login/View/menu.html" class="nav-link">Menu</a>
    </nav>
  </header>

  <div class="background-video" aria-hidden="true">
    <video autoplay loop muted playsinline>
      <source src="218955.mp4" type="video/mp4" />
    </video>
  </div>

  <div class="overlay" aria-hidden="true"></div>

  <main style="padding:80px 20px; min-height:100vh;">
    <div style="max-width:1100px; margin:0 auto; background: rgba(10,10,10,0.55); padding:24px; border-radius:12px;">
    <script src="app.js"></script>

    <h2>TESTE DALTONISMO</h2>
    <p>O teste consiste em imagens e opções, seleciona o, entre as opções, o número que você consegue enxergar nas imagens</p>
    <center>

    <br>
      <div>
        <ul>
          <li> <img src="../img/teste1.jpg" height="300px" alt=""> </li>
          <li> <p>12</p> </li>
        </ul>
      </div>    
    <br>
      <div>
        <img src="../img/teste2.jpg" height="300px" alt="">
        <p>8</p>
      </div>
    <br>
      <div>
        <img src="../img/teste3.jpg" height="300px" alt="">
        <p>29</p>
      </div>
    <br>
    <br>
    <div>
      <img src="../img/teste4.jpg" height="300px" alt="">
      <p>5</p>
    </div>
    <br>
    <br>
    <img src="../img/teste5.jpg" height="300px" alt="">
    <br>
    <input type="radio" name="teste5" id="teste5"> 3
    <br>
    <img src="../img/teste6.jpg" height="300px" alt="">
    <br>
    <input type="radio" name="teste6" id="teste6"> 15  
    <br>
    <img src="../img/teste7.jpg" height="300px" alt="">
    <br>
    <input type="radio" name="teste7" id="teste7"> 74 
    <br>
    <img src="../img/teste8.jpg" height="300px" alt="">
    <br>
    <input type="radio" name="teste8" id="teste8"> 6
    <br>
    <img src="../img/teste9.jpg" height="300px" alt="">
    <br>
    <input type="radio" name="teste9" id="teste9"> 45
    <br>
    <img src="../img/teste10.jpg" height="300px" alt="">
    <br>
    5
    <br>
  
    </center>
  </main>
  
</body>
</html>