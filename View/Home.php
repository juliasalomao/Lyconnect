<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Contatos</title>

    <link rel="stylesheet" href="../Style/home.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <span class="menu-icon">≡</span>
                <h1>Contatos</h1>
            </div>
            
            <div class="search-container">
                <div class="search-box">
                    <span class="search-icon">🔍</span>
                    <input type="text" id="searchInput" placeholder="Buscar" class="search-input">
                </div>

                <div class="seu-nome"> <h4>Você - Mariana Soares</h4> </div>
            </div>
            
            <div class="contacts-list" id="contactsList">
                <div class="contact-item active" data-contact="fabio">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Fábio Souza</span>
                </div>
                <div class="contact-item" data-contact="tiana">
                    <div class="contact-avatar"><img src="../img/user 7.png" alt=""></div>
                    <span class="contact-name">Tiana Melo Silva</span>
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
                        <p id="profileRole">cargo profissional</p>
                        <div class="profile-actions">
                            <button class="status-btn">Status: Ativo</button>
                            <button class="edit-btn">Editar</button>
                            <button class="delete-btn">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-section">
                <div class="form-group">
                    <label for="nomeInput">Nome:</label>
                    <input type="text" id="nomeInput" value="Fábio Souza Gonçalves" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="emailInput">E-Mail:</label>
                    <input type="email" id="emailInput" value="Fabiosgonçalves7@Gmail.com" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="telefoneInput">Telefone:</label>
                    <input type="tel" id="telefoneInput" value="(85) 9 87348907" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="enderecoInput">Endereço:</label>
                    <input type="text" id="enderecoInput" value="Rua Andrea 89" class="form-input">
                </div>
            </div>
        </div>
    </div>
    
    <script src="../js/modal.js"></script>

</body>
</html>



    <!-- Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Salvar contato</h2>
            <div class="modal-form">
                <div class="form-group-modal">
                    <img src="../img/account 1.png" alt="" class="modal-icon">
                    <input type="text" placeholder="Insira nome">
                </div>
                <div class="form-group-modal">
                    <img src="../img/account 1.png" alt="" class="modal-icon">
                    <input type="text" placeholder="Insira sobrenome">
                </div>
                <div class="form-group-modal">
                    <img src="../img/user 7.png" alt="" class="modal-icon">
                    <span class="country-code">País +55</span>
                    <input type="text" placeholder="Insira Nº de telefone">
                </div>
                <div class="form-group-modal switch-group">
                    <span>Sincronizar contato com celular</span>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>