<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Teste Daltonismo</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    html, body { height:100%; font-family: 'Poppins', sans-serif; }

    body {
      color:#fff;
      background:#000;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      overflow-x:hidden;
    }

    .background-video {
      position: fixed;
      inset: 0;
      z-index: -2;
      overflow: hidden;
    }asd
    .background-video video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .overlay {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.45);
      z-index: -1;
      backdrop-filter: blur(0.4px);
    }

    .topbar {
      position: fixed;
      top:0; left:0; right:0;
      z-index: 3;
      display: flex;
      justify-content: center;
      padding: 18px 24px;
      background: rgba(0,0,0,0.35);
      backdrop-filter: blur(6px);
    }
    .nav-inner {
      display:flex;
      gap:48px;
      align-items:center;
    }
    .nav-link {
      color:#fff;
      text-decoration:none;
      font-weight:700;
      font-size:20px;
      line-height:36px;
      transition: color 160ms ease, transform 160ms;
    }
    .nav-link:hover {
      color:#1CECE7;
      transform: translateY(-2px);
    }

    main {
      padding:80px 20px;
      min-height:100vh;
    }
    .container {
      max-width:1100px;
      margin:0 auto;
      background: rgba(10,23,28,0.7);
      padding:24px;
      border-radius:12px;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      background: #2d3a4a;
      color: #fff;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      transition: background 0.2s, box-shadow 0.2s;
      border: none;
      font-size: 20px;
    }
    .btn:hover {
      background: #4e5d6c;
      box-shadow: 0 2px 8px rgba(45,58,74,0.10);
    }
    .cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-bottom: 16px;
      margin-top: 20px
    }

    .test-item {
      text-align: center;
      max-width: 200px;
    }
    .test-item img {
      max-width: 200px;
      height: auto;
      border-radius: 8px;
      margin-bottom: 8px;
    }
    .test-item input {
      padding: 10px 12px;
      border-radius: 8px;
      border: 1px solid rgba(255,255,255,0.2);
      background: rgba(255,255,255,0.08
);
      color: #fff;
      font-size: 15px;
      outline: none;
      width: 100%;
    }
    .test-item input:focus {
      border-color: #1CECE7;
      box-shadow: 0 0 6px rgba(28,236,231,0.6);
    }


    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.25);
      background-color: #326873;
    }

    @media (max-width: 700px) {
      .nav-inner { gap:20px; }
      .nav-link { font-size: 18px; }
      .test-item img { max-width: 160px; }
    }
  </style>
</head>
<body>

  <header class="topbar" role="navigation" aria-label="Navegação principal"> 
    <nav class="nav-inner"> 
      <a href="daltonismo.html" class="nav-link">Retornar</a>
    </nav> 
  </header> 

  <div class="background-video" aria-hidden="true">
    <video autoplay loop muted playsinline> 
      <source src="../../../public/img/fundo_da_tela.mp4" type="video/mp4" />
      Seu navegador não suporta reprodução de vídeo.
    </video>
  </div> 
  <div class="overlay" aria-hidden="true"></div>

  <main>
    <div class="container">
      <h2>Teste de Daltonismo</h2>
      <p>Selecione o número que você consegue enxergar em cada imagem abaixo e clique em "Confirmar".</p>
      <form action="../Model/resultado.php" method="post">
        <div class="cards">
          <div class="test-item">
            <img src="../img/teste1.jpg" alt="Teste 1">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste2.jpg" alt="Teste 2">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste3.jpg" alt="Teste 3">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste4.jpg" alt="Teste 4">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste5.jpg" alt="Teste 5">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste6.jpg" alt="Teste 6">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste7.jpg" alt="Teste 7">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste8.jpg" alt="Teste 8">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
          <div class="test-item">
            <img src="../img/teste9.jpg" alt="Teste 9">
            <input type="number" name="respostas[]" placeholder="Número">
          </div>
        </div>
        <button type="submit" class="btn">Confirmar</button>
      </form>
    </div>
  </main>
</body>
</html>
