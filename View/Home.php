<?php
require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use Controller\UserController;

$userController = new UserController();

// Redireciona se não estiver logado
if (!isset($_SESSION['email'])) {
    header("Location: ../index.php");
    exit();
}

$emailLogado = $_SESSION['email'];
$usuario = $userController->checkUserByEmail($emailLogado);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Contatos</title>

    <link rel="stylesheet" href="../Style/Home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <span class="menu-icon">≡</span>
                <h1>Contatos</h1>
                <i class="bi bi-person" id="perfil"></i>
            </div>

            <!-- Popup perfil -->
            <div id="profilePopup" class="profile-popup" style="display:none;">
                <div class="profile-popup-content">
                    <span class="close-profile-popup" style="cursor:pointer; float:right;">&times;</span>
                    
                    <h3 id="popupProfileName"><?php echo htmlspecialchars($usuario['nome']); ?></h3>
                    <p id="popupProfileEmail"><?php echo htmlspecialchars($usuario['email']); ?></p>
                </div>
            </div>
            <!-- Fim Popup perfil -->

            <div class="search-container">
                <div class="search-box">
                    <span class="search-icon">🔍</span>
                    <input type="text" id="searchInput" placeholder="Buscar" class="search-input">
                </div>


            </div>

            <div class="contacts-list" id="contactsList">
                <div class="contact-item active" data-contact="fabio">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Fábio Souza</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">matias</span>
                </div>
                <div class="contact-item" data-contact="gabriel">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Gabriel Reis Couto</span>
                </div>
                <div class="contact-item" data-contact="felipe">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Felipe Lins Pereira</span>
                </div>
                <div class="contact-item" data-contact="luisa1">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Luísa Costa Maia</span>
                </div>
                <div class="contact-item" data-contact="luisa2">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Joaquim Borges Ferreira</span>
                </div>
                <div class="contact-item" data-contact="luisa3">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Marcelo Belo Nader</span>
                </div>
                <div class="contact-item" data-contact="pedro">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Pedro Almeida</span>
                </div>
                <div class="contact-item" data-contact="ana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Ana Carolina</span>
                </div>
                <div class="contact-item" data-contact="carlos">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Carlos Eduardo</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Allana Santos Rocha</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Beatriz Motta Silva</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Pedro Emanoel Alvez</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Sophia Dacy Mores</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Anna Luísa Texeira</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Julia Santos Paim</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Reynan Mesquita Ferreira</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Anderson Guilherme Poul</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Giulia Evellyn Carvalho</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Mathildes Oliveira De Araújo</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Diogo Santos Maia</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Amanda Araújo Cavalcante</span>
                </div>
            </div>
        </div>



        <div class="header">
            <div class="user-icon"> +
            </div>
        </div>


        <div class="main-content">
            <div class="profile-section">
                <div class="profile-header">
                    <div class="profile-avatar"> <img src="../img/user 7.png" alt=""></div>
                    <div class="profile-info">
                        <h2 id="profileName">Fábio Souza</h2>
                        <div class="profile-actions">
                            <button class="status-btn">Status: Ativo</button>
                            <button class="edit-btn" id="editContactBtn">Editar</button>
                            <button class="save-btn" id="saveContactBtn">Salvar</button>
                            <button class="delete-btn" id="deleteContactBtn">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group">
                    <label for="nomeInput">Nome:</label>
                    <input type="text" id="nomeInput" value="Fábio Souza Gonçalves" class="form-input" disabled>
                </div>

                <div class="form-group">
                    <label for="emailInput">E-Mail:</label>
                    <input type="email" id="emailInput" value="Fabiosgonçalves7@Gmail.com" class="form-input" disabled>
                </div>

                <div class="form-group">
                    <label for="telefoneInput">Telefone:</label>
                    <input type="tel" id="telefoneInput" value="(85) 9 87348907" class="form-input" disabled>
                </div>

                <div class="form-group">
                    <label for="enderecoInput">Endereço:</label>
                    <input type="text" id="enderecoInput" value="Rua Andrea 89" class="form-input" disabled>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/modal.js"></script>


    <!-- Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Salvar contato</h2>

            <!-- FORMULÁRIO -->
            <form id="addContactForm" method="POST" class="modal-form">
                <div class="form-group-modal">
                    <img src="../img/account 1.png" alt="" class="modal-icon">
                    <input type="text" id="modalNome" name="nome" placeholder="Insira nome" required>
                </div>
                <div class="form-group-modal">
                    <img src="../img/account 1.png" alt="" class="modal-icon">
                    <input type="email" id="modalEmail" name="email" placeholder="Insira e-mail" required>
                </div>
                <div class="form-group-modal">
                    <img src="../img/user 7.png" alt="" class="modal-icon">
                    <span class="country-code">País +55</span>
                    <input type="tel" id="modalTelefone" name="telefone" placeholder="Insira Nº de telefone" required>
                </div>
                <div class="form-group-modal">
                    <img src="../img/user 7.png" alt="" class="modal-icon">
                    <input type="text" id="modalEndereco" name="endereco" placeholder="Insira endereço">
                </div>

                <!-- BOTÃO DE SALVAR -->
                <div class="form-group-modal" style="text-align: right; margin-top: 20px;">
                    <button type="submit" id="salvar"
                        style="padding: 10px 20px; background-color: #052959; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>