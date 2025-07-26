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


    
    <label for="nome">Nome completo</label>
    <input type="text" id="nome" placeholder="Digite seu nome completo" />

    <label for="email">Email</label>
    <input type="email" id="email" placeholder="Digite seu email" />

    <label for="senha">Senha</label>
    <input type="password" id="senha" placeholder="Crie uma senha" />

    <label for="confirmar">Confirmar senha</label>
    <input type="password" id="confirmar" placeholder="Confirme sua senha" />

    <!-- ✅ Botão estilizado -->
   <a href="Home.php" class="botao-link">Cadastrar</a>


    <div class="register">
      Já tem uma conta? <a href="../index.php">Entrar</a>
    </div>
  </div>

</body>
</html>
