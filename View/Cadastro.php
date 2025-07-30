<?php
require_once '../vendor/autoload.php';

use Controller\UserController;

$userController = new UserController();

$registerUserMessage = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $user_fullname = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['senha'];

        if($userController->checkUserByEmail($email)) {
            $registerUserMessage = "Já existe um usuário cadastrado com esse endereço de e-mail.";
        } else {
            if($userController->createUser($user_fullname, $email, $password)) {
                header('Location: ../index.php');
                exit();
            } else {
                $registerUserMessage = 'Erro ao registrar informações.';
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LyConnect - Cadastro</title>
  <link rel="stylesheet" href="../Style/Cadastro.css" />
</head>
<body>

  <!-- Imagem de fundo -->
  <img src="../img/Site para link na bio blogueiro fotográfico em Verde e branco .png" alt="Fundo" class="background-image" />

  <div class="container">

    <!-- Logo circular -->
    <img src="../img/Group 1.png" alt="Logo LyConnect" class="circle-logo" />

    <h2>Crie sua conta</h2>
    <p><strong>Preencha os campos para se cadastrar</strong></p>


    <form action="Cadastro.php" method = "POST">
      <label for="nome">Nome completo</label>
      <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" />
  
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Digite seu email" />

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" placeholder="Crie uma senha" />

      <label for="confirmar">Confirmar senha</label>
      <input type="password" id="confirmar" name="confirmar" placeholder="Confirme sua senha" />

      <!-- ✅ Botão estilizado -->
     <button type="submit" class = "botao-link">Cadastrar</button>
  
  
      <div class="register">
        Já tem uma conta? <a href="../index.php">Entrar</a>
      </div>
    </div>
    </form>

</body>
</html>
