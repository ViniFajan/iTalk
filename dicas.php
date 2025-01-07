<?php
session_start();
?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTalk - Dicas</title>
    <link rel="icon" href="imgs/1login.png" type="image/png">
    <link rel="stylesheet" href="./static/css/dicas.css">
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
    
    <main class="main">
        <h1>A melhor IA para conversar</h1>
        <p>Procurando aprender uma nova língua?
        O iTalk oferece diversas formas de conversas para melhorar seu vocabulário.
        Comece já fazendo o download. Escolha de acordo com suas necessidades e no seu ritmo.</p>

        <section class="tips-section">

            <div class="tabs">
                <button class="tab-button" onclick="showTab('gerais')">Dicas Gerais</button>
                <button class="tab-button" onclick="showTab('ingles')">Inglês</button>
                <button class="tab-button" onclick="showTab('espanhol')">Espanhol</button>
                <button class="tab-button" onclick="showTab('alemao')">Alemão</button>
                <button class="tab-button" onclick="showTab('frances')">Francês</button>
                <button class="tab-button" onclick="showTab('portugues')">Português</button>
            </div>

            <div id="gerais" class="tab-content">
    <h2>Dicas Gerais</h2>
    <p>Imersão total no idioma: Quanto mais contato você tiver com a língua, melhor será sua compreensão. Assista a filmes e séries no idioma original, ouça podcasts e leia livros ou artigos simples no idioma que está aprendendo.</p>
    <p>Crie um hábito diário de prática: A consistência é crucial. Separe 15 a 30 minutos por dia para praticar e revisar vocabulário ou pronúncia.</p>
    <p>Pratique conversação simulando diálogos: Imagine-se em situações como pedir comida em um restaurante ou fazer uma compra. Fale em voz alta para treinar.</p>
    <p>Defina objetivos claros: Estabeleça metas específicas, como "aprender 20 palavras novas por semana" ou "manter uma conversa de 3 minutos".</p>
    <p>Use flashcards: Ferramentas digitais ou cartões manuais ajudam a memorizar vocabulário de forma eficaz.</p>
    <p>Grave-se falando: Isso permite identificar e corrigir pronúncia e entonação.</p>
    <p>Participe de grupos de conversação online ou presenciais: Troque ideias com outros estudantes ou falantes nativos.</p>
    <p>Faça exercícios de escuta ativa: Ouça diálogos curtos e tente transcrever o que ouviu.</p>
    <p>Seja paciente consigo mesmo: Aprender um idioma é um processo, não um evento imediato.</p>
    <p>Teste-se com frequência: Use questionários ou simulados para avaliar seu progresso.</p>
</div>

<div id="ingles" class="tab-content" style="display:none;">
    <h2>Dicas para Aprender Inglês</h2>
    <p>Domine os 'phrasal verbs': Eles são muito comuns no inglês cotidiano. Exemplos incluem "pick up" (pegar) e "give up" (desistir).</p>
    <p>Pratique os tempos verbais: Comece pelo presente simples, passado e futuro, antes de avançar para os tempos perfeitos.</p>
    <p>Conheça expressões idiomáticas: Aprenda frases como "break the ice" (quebrar o gelo).</p>
    <p>Entenda o uso de preposições: "In", "on", e "at" são desafiadores, mas essenciais.</p>
    <p>Expanda vocabulário temático: Foque em tópicos como viagens, negócios ou saúde.</p>
    <p>Leia histórias infantis: O vocabulário simples é ideal para iniciantes.</p>
    <p>Conheça os conectores: Palavras como "although" e "therefore" tornam frases mais sofisticadas.</p>
    <p>Pratique question tags: "You’re coming, aren’t you?" é comum no dia a dia.</p>
    <p>Acompanhe notícias em inglês: Sites como BBC ou vídeos educativos no YouTube são ótimos.</p>
    <p>Ouça músicas e cante junto: Isso melhora o entendimento e ajuda a fixar pronúncia.</p>
</div>

<div id="espanhol" class="tab-content" style="display:none;">
    <h2>Dicas para Aprender Espanhol</h2>
    <p>Preste atenção aos verbos regulares e irregulares: Pratique ambos, pois verbos como "hablar" seguem padrões, enquanto "ir" e "ser" exigem mais atenção.</p>
    <p>Cuidado com os falsos cognatos: Palavras como "embarazada" (grávida) não têm o mesmo significado em português. Estude esses casos para evitar confusões.</p>
    <p>Domine os pronomes reflexivos: Como "me levanto" (eu me levanto).</p>
    <p>Estude as diferenças entre 'ser' e 'estar': Ambos significam “ser/estar”, mas têm contextos distintos.</p>
    <p>Pratique o uso de subjuntivo: Essencial para expressar desejos ou incertezas, como em "Espero que vengas" (Espero que você venha).</p>
    <p>Leia literatura simples: Livros infantis ou histórias curtas são um bom começo.</p>
    <p>Pratique a pronúncia da letra 'ñ': É única do espanhol, como em "año".</p>
    <p>Evite traduções literais: Tente pensar em espanhol para construir frases mais naturais.</p>
    <p>Conheça regionalismos: Palavras e expressões podem variar entre países que falam espanhol.</p>
    <p>Veja filmes ou séries em espanhol: Ative as legendas para associar áudio e texto.</p>
</div>

<div id="alemao" class="tab-content" style="display:none;">
    <h2>Dicas para Aprender Alemão</h2>
    <p>Foque no gênero dos substantivos: Masculino, feminino e neutro afetam os artigos e a estrutura da frase. Memorize o gênero com as novas palavras que aprender.</p>
    <p>Compreenda os casos gramaticais: Praticar os casos nominativo, acusativo e dativo ajudará a formar frases corretas em alemão.</p>
    <p>Domine a ordem da frase: Verbos geralmente vão ao final da oração subordinada.</p>
    <p>Aprenda palavras compostas: Como “Handschuh” (luva) que significa “sapato de mão”.</p>
    <p>Estude os verbos modais: Como "können" (poder) e "müssen" (dever).</p>
    <p>Treine a pronúncia dos sons duros: Como "ch" em “ich”.</p>
    <p>Aprenda preposições com casos específicos: Como "mit" que exige dativo.</p>
    <p>Explore literatura simples: Livros infantis alemães são um ótimo começo.</p>
    <p>Entenda o sistema de prefixos: Verbos como “aufstehen” (levantar-se) mudam o sentido com prefixos diferentes.</p>
    <p>Use recursos online confiáveis, como a Deutsche Welle.</p>
</div>

<div id="frances" class="tab-content" style="display:none;">
    <h2>Dicas para Aprender Francês</h2>
    <p>Preste atenção aos acentos: Eles mudam a pronúncia e às vezes o significado da palavra. Pratique a diferença entre "é" e "è".</p>
    <p>Pratique o uso do 'liaison': Isso conecta palavras na fala, como "les amis", e melhora sua fluência.</p>
    <p>Domine as conjugações irregulares: Verbo "être" (ser/estar) é essencial.</p>
    <p>Pratique nasais: Sons como “on” e “en” são desafiadores.</p>
    <p>Aprenda expressões fixas: Como “avoir faim” (ter fome).</p>
    <p>Estude os pronomes relativos: Como “qui” e “que”.</p>
    <p>Fique atento aos falsos cognatos: “Préservatif” significa camisinha, não preservativo.</p>
    <p>Explore música francesa: Artistas como Stromae têm pronúncia clara.</p>
    <p>Entenda os tempos compostos: Como passé composé para ações passadas.</p>
    <p>Pratique o 'r' gutural: Fundamental para uma pronúncia autêntica.</p>
</div>

<div id="portugues" class="tab-content" style="display:none;">
    <h2>Dicas para Aprender Português</h2>
    <p>Domine as diferenças entre formal e informal: A língua portuguesa tem um uso variado de formalidade dependendo do contexto e da pessoa com quem você está falando.</p>
    <p>Esteja atento aos verbos irregulares: Os verbos "ser", "ir" e "ter" são essenciais e possuem formas irregulares.</p>
    <p>Aprenda palavras conectivas: Como “pois”, “entretanto” e “contudo”.</p>
    <p>Descubra as expressões idiomáticas: Como “matar dois coelhos com uma cajadada só”.</p>
    <p>Estude o plural dos substantivos compostos: Como “guarda-chuvas” e “guarda-roupas”.</p>
    <p>Pratique os ditongos nasais: Sons como “ão” e “õe” são desafiadores para estrangeiros.</p>
    <p>Explore gêneros textuais: Leia crônicas, notícias e poemas para entender diferentes estilos.</p>
    <p>Treine a colocação pronominal: Como “me ajuda” e “ajuda-me”.</p>
    <p>Aprenda prefixos e sufixos comuns: Como “in-” (inverso) e “-ável” (possibilidade).</p>
    <p>Estude as diferenças entre “por” e “para”: Elas podem confundir iniciantes.</p>
</div>


        </section>
    </main>

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

    <script>
        function showTab(tabId) {
            var tabs = document.getElementsByClassName('tab-content');
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = 'none';
            }
            document.getElementById(tabId).style.display = 'block';
        }

        document.addEventListener("DOMContentLoaded", function() {
            showTab('gerais');
        });
    </script>
    <script src="./static/js/nav.js"></script>
</body>
</html>