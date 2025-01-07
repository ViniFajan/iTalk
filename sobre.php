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
    <link rel="stylesheet" href="./static/css/sobre.css">
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

    <section class="about-text">
        <h2>Sobre o iTalk</h2>
        <p>

            "Olá! Seja bem-vindo ao iTalk!

Nós, da equipe iTalk, criamos essa plataforma com um objetivo muito especial: ajudar pessoas como você, que estão aprendendo uma nova língua e às vezes sentem falta de alguém para treinar a pronúncia e a fala. Sabemos o quanto pode ser desafiador dar os primeiros passos em um novo idioma, especialmente quando não há oportunidades de prática no dia a dia.

Para tornar isso possível, contamos com a inteligência artificial do Gemini, que é o coração da nossa plataforma. Essa tecnologia incrível nos permite oferecer interações personalizadas, ajudando você a praticar sua pronúncia e conversa de forma mais natural, como se estivesse falando com um amigo de verdade. O Gemini entende suas dificuldades, adapta os feedbacks e te acompanha na evolução do aprendizado.

Nossa equipe acredita que todos merecem uma chance de se expressar com confiança, independentemente do idioma. Por isso, unimos esforços para desenvolver uma ferramenta que torne o aprendizado mais acessível, interativo e, claro, divertido!

Estamos aqui para tornar essa jornada mais leve e eficiente. Então, prepare-se para explorar o iTalk e aproveite ao máximo as dicas e recursos que criamos para você!" 

        </p>
    </section>
    </main>
    
    <section class="timeline">
    <div class="timeline-item">
        <h3>Janeiro 2024</h3>
        <p>Definição do tema do TCC, objetivos e estrutura do projeto. Planejamento inicial do site iTalk.</p>
    </div>
    <div class="timeline-item">
        <h3>Fevereiro 2024</h3>
        <p>Pesquisa e fundamentação teórica sobre ferramentas de aprendizado de idiomas e tecnologias de IA aplicáveis.</p>
    </div>
    <div class="timeline-item">
        <h3>Março 2024</h3>
        <p>Desenvolvimento do layout inicial do site, incluindo páginas principais como Home, Sobre, Dicas e Login.</p>
    </div>
    <div class="timeline-item">
        <h3>Abril 2024</h3>
        <p>Implementação do backend para funcionalidades básicas do site, como login e navegação dinâmica.</p>
    </div>
    <div class="timeline-item">
        <h3>Maio 2024</h3>
        <p>Elaboração do protótipo funcional do site para apresentação parcial do TCC. Testes iniciais de navegação e conteúdo.</p>
    </div>
    <div class="timeline-item">
        <h3>Junho 2024</h3>
        <p>Refinamento do design do site, inclusão de conteúdos finais e ajustes com base no feedback do orientador.</p>
    </div>
    <div class="timeline-item">
        <h3>Julho 2024</h3>
        <p>Teste de acessibilidade e desempenho do site. Ajustes técnicos para melhorar a experiência do usuário.</p>
    </div>
    <div class="timeline-item">
        <h3>Agosto 2024</h3>
        <p>Desenvolvimento da documentação do site, incluindo explicações técnicas e pedagógicas para o TCC.</p>
    </div>
    <div class="timeline-item">
        <h3>Setembro 2024</h3>
        <p>Finalização do projeto e revisão detalhada de todas as páginas e funcionalidades do site.</p>
    </div>
    <div class="timeline-item">
        <h3>Outubro 2024</h3>
        <p>Preparação para a apresentação do TCC: simulação de defesa e ajustes finais com base no feedback do orientador.</p>
    </div>
    <div class="timeline-item">
        <h3>Novembro 2024</h3>
        <p>Entrega oficial do TCC e finalização de pendências acadêmicas relacionadas ao projeto.</p>
    </div>
    <div class="timeline-item">
        <h3>Dezembro 2024</h3>
        <p>Apresentação da defesa do TCC e conclusão do curso.</p>
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

    