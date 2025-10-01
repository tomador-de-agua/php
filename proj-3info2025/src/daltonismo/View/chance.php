<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chance</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="../../../public/css/styles.css">
  <style>
    .opt {
      color: darkgray;
    }
  </style>
</head>
<body id="page-menu" class="bg-black min-h-screen flex items-center justify-center">  

  <header class="topbar" id="topbar" role="navigation" aria-label="Navegação principal"> 
    <nav class="nav-inner" id="navInner"> 
      <a href="daltonismo.html" class="nav-link">Retornar</a>
    </nav> 
  </header> 

  <!-- Fundo em vídeo -->
  <div class="background-video" aria-hidden="true">
    <video autoplay loop muted playsinline> 
      <source src="../../../public/img/fundo_da_tela.mp4" type="video/mp4" />
      Seu navegador não suporta reprodução de vídeo.
    </video>
  </div> 

  <!-- Caixa principal -->
  <div class="w-full max-w-3xl bg-black/70 shadow-lg rounded-xl overflow-hidden text-white">
    <div class="bg-gray-900 text-white font-semibold text-lg px-6 py-4">
      Chance de Daltonismo
    </div>
    <div class="p-6">
      <p class="mb-6 text-gray-200">Selecione as características do pai e da mãe para calcular a chance do filho ter:</p>

      <div class="overflow-x-auto">
        <table class="w-full border-collapse rounded-lg shadow-sm">
          <thead>
            <tr class="bg-gray-800 text-white">
              <th class="px-4 py-3 text-left">Pai</th>
              <th class="px-4 py-3 text-left">Mãe</th>
              <th class="px-4 py-3 text-left">Filho</th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd:bg-gray-700 even:bg-gray-600 hover:bg-gray-500 transition">
              <td class="px-4 py-3">
                <select id="pai" class="w-full border border-gray-500 rounded-lg px-3 py-2 bg-gray-900 text-white focus:outline-none focus:ring-2 focus:ring-gray-400 opt">
                  <option value="N">Homem normal</option>
                  <option value="D">Homem daltônico</option>
                </select>
              </td>
              <td class="px-4 py-3">
                <select id="mae" class="w-full border border-gray-500 rounded-lg px-3 py-2 bg-gray-900 text-white focus:outline-none focus:ring-2 focus:ring-gray-400 opt">
                  <option value="N">Mulher normal</option>
                  <option value="P">Mulher portadora</option>
                  <option value="D">Mulher daltônica</option>
                </select>
              </td>
              <td class="px-4 py-3">
                <textarea id="resultado" readonly placeholder="Resultado aparecerá aqui"
                  class="w-full h-20 border border-gray-500 rounded-lg px-3 py-2 bg-gray-900 text-white resize-none focus:outline-none"></textarea>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="flex flex-wrap gap-4 mt-6">
        <button onclick="calcular()" class="bg-gray-800 hover:bg-gray-700 text-white px-6 py-2 rounded-lg font-semibold shadow transition">
          Calcular
        </button>
      </div>
    </div>
  </div>

  <script>
    function calcular() {
      const pai = document.getElementById("pai").value;
      const mae = document.getElementById("mae").value;
      let chanceHomem = "";
      let chanceMulher = "";

      // Exemplo baseado em herança ligada ao X (como hemofilia/daltonismo)
      if (pai === "N" && mae === "N") {
        chanceHomem = "0%";
        chanceMulher = "0%";
      } 
      else if (pai === "N" && mae === "P") {
        chanceHomem = "50%";
        chanceMulher = "0%";
      } 
      else if (pai === "N" && mae === "D") {
        chanceHomem = "100%";
        chanceMulher = "0%";
      } 
      else if (pai === "D" && mae === "N") {
        chanceHomem = "0%";
        chanceMulher = "100% portadoras";
      } 
      else if (pai === "D" && mae === "P") {
        chanceHomem = "50%";
        chanceMulher = "50% (deficientes ou portadoras)";
      } 
      else if (pai === "D" && mae === "D") {
        chanceHomem = "100%";
        chanceMulher = "100%";
      }

      document.getElementById("resultado").value =
        `Chance (Homem): ${chanceHomem} | Chance (Mulher): ${chanceMulher}`;
    }
  </script>
</body>
</html>
