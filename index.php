<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTalk</title>
    <link rel="icon" href="imgs/1login.png" type="image/png">
    <link rel="stylesheet" href="./static/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
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


                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="logout.php" class="signup-btn">Sair</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="signup-btn">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

<main>
    <div class="content">
        <div class="left">
            <div class="texto">
                <h1>Aprenda um novo idioma com a iTalk</h1>
                <p>Desenvolva suas habilidades linguísticas com inteligência artificial. Alcance seus objetivos de forma rápida e personalizada!</p>
            <div class="cta">
                <a href="login.php" class="cta-btn">Comece Agora</a>
            </div>
            </div>
    </div>
        <div class="right">
            <img src="./static/imgs/1.jpg" alt="" width="450" height="300">
        </div>
    </div>

    <section class="glass-section">
        <div class="glass-left">
            <img src="./static/imgs/222.jpg" alt="Logo iTalk" width="350" height="400">
        </div>
        <div class="glass-right">
            <div class="texto2">
                <h2>Como o iTalk funciona?</h2>
                <p>O iTalk utiliza inteligência artificial para oferecer uma experiência de aprendizado adaptativa e personalizada.</p>
            </div>
        </div>
    </section>

    <h1 class="title-cards">Línguas Mais Populares</h1>
    <div class="title-underline"></div>

    <div class="cards-container">
        <div class="card">
            <a href="dicas.php">
                <img src="./static/imgs/Bandeira - EUA.png" alt="Bandeira do Reino Unido">
                <p>Inglês – Língua mais estudada globalmente.</p>
            </a>
        </div>
        <div class="card">
            <a href="dicas.php">
                <img src="./static/imgs/Bandeira - Espanhol.png" alt="Bandeira da Espanha">
                <p>Espanhol – Popular na Europa e América.</p>
            </a>
        </div>
        <div class="card">
            <a href="dicas.php">
                <img src="./static/imgs/Bandeira - Françes.png" alt="Bandeira da França">
                <p>Francês – Importância histórica e cultural.</p>
            </a>
        </div>
        <div class="card">
            <a href="dicas.php">
                <img src="./static/imgs/Bandeira - Alemão.png" alt="Bandeira da Alemanha">
                <p>Alemão – Procurado em negócios e academia.</p>
            </a>
        </div>
        <div class="card">
            <a href="dicas.php">
                <img src="./static/imgs/Bandeira - brasil.png" alt="Bandeira do Brasil">
                <p>Brasil - Diversidade cultural refletida na linguagem.<p>
            </a>
        </div>
    </div>

    <section class="discover-section">
    <div class="discover-content">
        <h2>Por Que Aprender Um Novo Idioma?</h2>
        <p>Aprender uma nova língua abre portas para oportunidades incríveis. Desde viagens internacionais e conexões culturais até avanços na sua carreira, dominar outro idioma transforma sua visão do mundo.</p>
        <ul>
            <li><strong>Avanço na Carreira:</strong> Se destaque no mercado global.</li>
            <li><strong>Conexão Cultural:</strong> Explore tradições e perspectivas únicas.</li>
            <li><strong>Viagens Enriquecedoras:</strong> Viva experiências autênticas em qualquer lugar do mundo.</li>
            <li><strong>Estímulo Cognitivo:</strong> Melhore memória e habilidades de resolução de problemas.</li>
        </ul>
    </div>
    <div class="discover-image">
        <img src="./static/imgs/333.jpg" alt="Imagem representando benefícios de aprender idiomas">
    </div>
</section>


    <section class="faq-section">
        <h2>Perguntas Frequentes</h2>
        <div class="faq">
            <div class="faq-question">Como o iTalk funciona?</div>
            <div class="faq-answer">
                <p>O iTalk ajuda você a alcançar suas ambições de aprendizado de idiomas...</p>
            </div>
        </div>
        <div class="faq">
            <div class="faq-question">Quantas aulas de iTalk por semana posso fazer?</div>
            <div class="faq-answer">
                <p>Você pode fazer quantas aulas quiser...</p>
            </div>
        </div>
        <div class="faq">
            <div class="faq-question">O iTalk é valioso para aprender um idioma?</div>
            <div class="faq-answer">
                <p>Sim, com certeza...</p>
            </div>
        </div>
    </section>
</main>

<section class="no-more-explore">
    <div class="explore-text">
        <h2>Não há mais o que explorar</h2>
        <p>É melhor ir conversar</p>
    </div>
    <div class="explore-btn">
        <a href="login.php" class="explore-btn-link">Acesse sua conta</a>
    </div>
</section>


<footer>
    <p>&copy; 2024 iTalk. Todos os direitos reservados.</p>
    <nav>
        <ul>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</footer>
<script src="./static/js/nav.js"></script>
<script src="./static/js/script.js"></script>
</body>
</html>
