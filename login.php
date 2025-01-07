<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./static/css/login.css">
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
                <li><a href="login.php" class="signup-btn">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="logo-section">
                <img src="./static/imgs/logo1-transformed.png" alt="Logo iTalk" width="100%">
            </div>
            <div class="login-container">
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>

                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Entrar</button>

                    <div class="extra-options">
                        <a href="#" id="open-register">Criar conta</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Modal para cadastro -->
    <div class="modal" id="register-modal">
        <div class="modal-content">
            <span class="close" id="close-register">&times;</span>
            <h2>Cadastro</h2>
            <form action="register.php" method="POST">
                <label for="username">Nome Completo:</label>
                <input type="text" id="name" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Confirmar Senha:</label>
                <input type="password" id="confirm-password" name="confirm_password" required>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="./static/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php
// login.php
session_start();
include 'conexao.php';

if (isset($_SESSION['user_id'])) {
    echo "<script>swal({title: 'Você já está logado!', text: 'Redirecionando você para a página da IA.', icon: 'warning'}).then(function(){window.location.href = 'ia.php';});</script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta o banco de dados para verificar o email e a senha
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['password'] == $password) {
        // Inicia a sessão do usuário
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ia.php");
        exit();
    } else {
        echo "<script>swal({title: 'Email ou senha incorretos!', icon: 'error'});</script>";
    }
}
?>
