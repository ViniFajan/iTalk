
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
// register.php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Valida se as senhas coincidem
    if ($password != $confirm_password) {
        echo "<script>swal({title: 'As senhas não coincidem!', icon: 'warning'}).then(function(){window.location.href = 'login.php';});</script>";
    } else {
        // Verifica se o email já existe
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existing_user) {
            echo "<script>swal({title: 'Email já cadastrado!', icon: 'warning'}).then(function(){window.location.href = 'login.php';});</script>";
        } else {
            // Inserir no banco de dados
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            echo "<script>swal({title: 'Cadastro realizado com sucesso!', icon: 'success'}).then(function(){window.location.href = 'login.php';});</script>";
            exit();
        }
    }
}
?>