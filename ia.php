<?php
session_start();  // Inicia a sessão para poder usar variáveis de sessão
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redireciona para a página de login caso o usuário não esteja logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTalk</title>
    <link rel="icon" href="imgs/1login.png" type="image/png">
    <link rel="stylesheet" href="./static/css/ia.css">
</head>

<body>
    <header id="navbar">
        <div class="logo">
            <a href="index.php">
                <h1>iTalk</h1>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="dicas.php">Dicas</a></li>
                <li><a href="ia.php">IA</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="logout.php" class="signup-btn">Sair</a></li>
            </ul>
        </nav>
    </header>
<main>
        <!-- Botões de seleção de idiomas -->
    <div class="language-selector">
      <button id="lang-en" class="custom-btn">English</button>
      <button id="lang-de" class="custom-btn">Deutsch</button>
      <button id="lang-fr" class="custom-btn">Français</button>
      <button id="lang-it" class="custom-btn">Italiano</button>
      <button id="lang-es" class="custom-btn">Español</button>
      <button id="lang-pt" class="custom-btn">Português</button>
    </div>

    <div class="container">

        <!-- Conteúdo principal -->
        <div class="circle"></div>
        <div class="buttons">
            <button id="mic-btn" class="mic-button">
                <img src="./static/imgs/mic-outline.png" alt="Iniciar Reconhecimento de Fala">
            </button>
            <button id="cancel-btn" class="cancel-button">
                <img src="./static/imgs/close-outline.png" alt="Cancelar">
            </button>
        </div>
    </div>
  </main>

  <script>
  const buttons = document.querySelectorAll('.custom-btn');

    // Adiciona o evento de clique a cada botão
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove a classe 'selected' de todos os botões
            buttons.forEach(btn => btn.classList.remove('selected'));
            
            // Adiciona a classe 'selected' ao botão clicado
            button.classList.add('selected');
        });
    });
    </script>

    <script src="./static/js/ia.js"></script>
    <script src="./static/js/nav.js"></script>
    <script src="./static/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
