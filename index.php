<?php 
require_once 'vendor/autoload.php';

use Controller\UserController;

$userController = new UserController();
$loginMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['senha'];

    if ($userController->login($email, $password)) {
        header('Location: View/Home.php');
        exit();
    } else {
        $loginMessage = "Email ou senha incorretos.";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LyConnect - Login</title>
  <link rel="stylesheet" href="Style/login.css" >
</head>
<body>
<!-- Imagem de fundo -->
  <img src="img/Site para link na bio blogueiro fotográfico em Verde e branco .png" alt="Fundo" class="background-image" />

  <div class="container">

    <!-- Logo circular -->
    <img src="img/Group 1.png" alt="Logo LyConnect" class="circle-logo" />

    <h2>Bem-Vindo(a) de volta!</h2>
    <p>Entre com suas informações de login</p>

    <form action="index.php" method = "POST">
      <label for="email">Email</label>
      <input type="email" required id="email" name = "email" placeholder="Digite seu email" />
  
      <label for="senha">Senha</label>
      <input type="password" required id="senha" name = "senha" placeholder="Digite sua senha" />

      <button type = "submit" class = "in-btn">Entrar</button>
      </form>
  
      <div class="register">
        É novo por aqui? <a href="http://localhost/Lyconnect/View/Cadastro.php">Cadastre-se</a>
      </div>
  </div>
</body>
</html>
