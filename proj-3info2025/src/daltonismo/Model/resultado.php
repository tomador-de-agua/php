<?php 
include_once '../Model/dalto.class.php'; // ajusta o caminho certo aqui

$respostas = $_POST['respostas'] ?? [];

// Gabarito fixo
$fixo = ['12','6','29','5','3','15','74','6','45'];
$a = 0;

// Conta acertos
for ($i=0; $i < count($fixo); $i++) { 
  if (isset($respostas[$i]) && trim($respostas[$i]) == $fixo[$i]) {
    $a++;
  }
}
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resultado do Teste</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet"> 

  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Poppins', Arial, sans-serif;
    }

    /* Vídeo de fundo */
    .background-video {
      position: fixed;
      inset: 0;
      z-index: -2;
      overflow: hidden;
    }

    .background-video video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      transform: translate(-50%, -50%);
      object-fit: cover;
      pointer-events: none;
    }

    /* Overlay escura */
    .overlay {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.35);
      z-index: -1;
    }

    /* Conteúdo principal */
    main {
      padding: 80px 20px;
      min-height: 100vh;
    }

    .content-box {
      max-width: 800px;
      margin: 0 auto;
      background: rgba(10,10,10,0.55);
      padding: 24px;
      border-radius: 12px;
      color: #fff;
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
    }

    .btn:hover {
      background: #4e5d6c;
      box-shadow: 0 2px 8px rgba(45,58,74,0.10);
    }
  </style>
</head>
<body>

  <!-- Vídeo de fundo -->
  <div class="background-video" aria-hidden="true">
    <video autoplay loop muted playsinline>
      <source src="../../../public/img/fundo_da_tela.mp4" type="video/mp4" />
      Seu navegador não suporta reprodução de vídeo.
    </video>
  </div>
  <div class="overlay" aria-hidden="true"></div>

  <main>
    <div class="content-box">
      <h1>Resultado do Teste</h1>
      <p>Pontuação: <strong><?php echo $a; ?>/9</strong></p>

      <?php
        if ($a >= 9){
          echo "<p>Você não é daltônico</p>";
        } elseif ($a >= 6) {
          echo "<p>Possível daltonismo</p>";
        } elseif ($a >= 3) {
          echo "<p>Boas chances de daltonismo</p>";
        } elseif ($a >= 1) {
          echo "<p>Daltônico (consulte um oftalmologista)</p>";
        } else {
          echo "<p>Você errou de propósito, né?</p>";
        }
      ?>

      <a href="../View/daltonismo.html" class="btn">Concluir</a>
    </div>
  </main>
</body>
</html>
