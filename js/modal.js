// Dados fictícios de contatos
const contactsData = [
    {
        id: 1,
        name: "Ana Silva",
        email: "ana.silva@email.com",
        phone: "(11) 99999-1234",
        company: "Tech Solutions",
        position: "Desenvolvedora Frontend",
        location: "São Paulo, SP",
        address: "Rua das Flores, 123",
        bio: "Especialista em React e JavaScript com 5 anos de experiência em desenvolvimento web.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-15",
        tags: ["Frontend", "React", "JavaScript"]
    },
    {
        id: 2,
        name: "Carlos Oliveira",
        email: "carlos.oliveira@empresa.com",
        phone: "(21) 98888-5678",
        company: "Digital Marketing Pro",
        position: "Gerente de Marketing",
        location: "Rio de Janeiro, RJ",
        address: "Av. Copacabana, 456",
        bio: "Profissional de marketing digital com expertise em campanhas online e análise de dados.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-20",
        tags: ["Marketing", "Digital", "Analytics"]
    },
    {
        id: 3,
        name: "Maria Santos",
        email: "maria.santos@consultoria.com",
        phone: "(31) 97777-9012",
        company: "Business Consulting",
        position: "Consultora de Negócios",
        location: "Belo Horizonte, MG",
        address: "Rua da Liberdade, 789",
        bio: "Consultora experiente em estratégia empresarial e transformação digital.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-18",
        tags: ["Consultoria", "Estratégia", "Negócios"]
    },
    {
        id: 4,
        name: "João Pereira",
        email: "joao.pereira@startup.com",
        phone: "(47) 96666-3456",
        company: "InnovaTech Startup",
        position: "CTO",
        location: "Florianópolis, SC",
        address: "Rua da Inovação, 321",
        bio: "Empreendedor e tecnólogo com foco em inovação e desenvolvimento de produtos digitais.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-22",
        tags: ["Startup", "CTO", "Inovação"]
    },
    {
        id: 5,
        name: "Fernanda Costa",
        email: "fernanda.costa@design.com",
        phone: "(85) 95555-7890",
        company: "Creative Design Studio",
        position: "UX/UI Designer",
        location: "Fortaleza, CE",
        address: "Av. Beira Mar, 654",
        bio: "Designer criativa especializada em experiência do usuário e interfaces intuitivas.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-19",
        tags: ["Design", "UX", "UI"]
    },
    {
        id: 6,
        name: "Roberto Lima",
        email: "roberto.lima@vendas.com",
        phone: "(62) 94444-2468",
        company: "Sales Excellence",
        position: "Diretor de Vendas",
        location: "Goiânia, GO",
        address: "Rua do Comércio, 987",
        bio: "Profissional de vendas com mais de 10 anos de experiência em gestão de equipes comerciais.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-16",
        tags: ["Vendas", "Gestão", "Comercial"]
    },
    {
        id: 7,
        name: "Fábio Souza",
        email: "Fabiosgonçalves7@Gmail.com",
        phone: "(85) 9 87348907",
        company: "Freelancer",
        position: "Desenvolvedor Full Stack",
        location: "Fortaleza, CE",
        address: "Rua Andrea 89",
        bio: "Desenvolvedor experiente em tecnologias web modernas e soluções inovadoras.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-25",
        tags: ["Desenvolvimento", "Full Stack", "Web"]
    },
    {
        id: 8,
        name: "Tiana Melo Silva",
        email: "tiana.melo@empresa.com",
        phone: "(11) 94567-8901",
        company: "Tech Innovation",
        position: "Analista de Sistemas",
        location: "São Paulo, SP",
        address: "Rua Paulista, 1000",
        bio: "Analista especializada em sistemas corporativos e otimização de processos.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-23",
        tags: ["Análise", "Sistemas", "Processos"]
    },
    {
        id: 9,
        name: "Gabriel Reis Couto",
        email: "gabriel.reis@startup.com",
        phone: "(21) 93456-7890",
        company: "Digital Solutions",
        position: "Product Manager",
        location: "Rio de Janeiro, RJ",
        address: "Av. Atlântica, 500",
        bio: "Gerente de produto com foco em soluções digitais e experiência do usuário.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-21",
        tags: ["Produto", "Digital", "Gestão"]
    },
    {
        id: 10,
        name: "Felipe Lins Pereira",
        email: "felipe.lins@consultoria.com",
        phone: "(31) 92345-6789",
        company: "Business Strategy",
        position: "Consultor Sênior",
        location: "Belo Horizonte, MG",
        address: "Rua dos Negócios, 200",
        bio: "Consultor sênior especializado em estratégia empresarial e transformação organizacional.",
        avatar: "../img/user 7.png",
        lastContact: "2024-01-17",
        tags: ["Consultoria", "Estratégia", "Transformação"]
    }
];

document.addEventListener('DOMContentLoaded', function() {
    const userIcon = document.querySelector('.user-icon');
    const modal = document.getElementById('contactModal');
    const closeButton = document.querySelector('.close-button');

    // Inicializar funcionalidade de pesquisa de contatos
    initializeContactSearch();

    userIcon.addEventListener('click', function() {
        modal.style.display = 'flex';
    });

    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});

// Função para inicializar a pesquisa de contatos
function initializeContactSearch() {
    const searchInput = document.getElementById('searchInput');
    const contactsList = document.getElementById('contactsList');
    
    if (searchInput) {
        // Adicionar event listener para pesquisa
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            filterAndRenderContacts(searchTerm);
        });
        
        // Adicionar event listener para foco no campo de pesquisa
        searchInput.addEventListener('focus', function() {
            // Quando clicar na barra de pesquisa, mostrar todos os contatos
            renderContactsInSidebar(contactsData);
        });
    }
    
    // Renderizar lista inicial de contatos (vazia até clicar na pesquisa)
    renderContactsInSidebar([]);
    
    // Carregar contato padrão (Fábio Souza)
    const defaultContact = contactsData.find(contact => contact.name === "Fábio Souza");
    if (defaultContact) {
        showContactDetailsInMain(defaultContact);
    }
}

// Função para filtrar e renderizar contatos
function filterAndRenderContacts(searchTerm) {
    if (!searchTerm) {
        renderContactsInSidebar(contactsData);
        return;
    }
    
    const filteredContacts = contactsData.filter(contact => 
        contact.name.toLowerCase().includes(searchTerm) ||
        contact.company.toLowerCase().includes(searchTerm) ||
        contact.position.toLowerCase().includes(searchTerm) ||
        contact.tags.some(tag => tag.toLowerCase().includes(searchTerm))
    );
    
    renderContactsInSidebar(filteredContacts);
}

// Função para renderizar contatos na sidebar
function renderContactsInSidebar(contacts) {
    const contactsList = document.getElementById('contactsList');
    if (!contactsList) return;
    
    // Limpar lista atual
    contactsList.innerHTML = '';
    
    // Renderizar contatos filtrados
    contacts.forEach((contact, index) => {
        const contactItem = document.createElement('div');
        contactItem.className = 'contact-item';
        contactItem.setAttribute('data-contact', contact.id);
        
        // Adicionar classe active para o primeiro item
        if (index === 0) {
            contactItem.classList.add('active');
        }
        
        contactItem.innerHTML = `
            <div class="contact-avatar">
                <img src="${contact.avatar}" alt="${contact.name}">
            </div>
            <span class="contact-name">${contact.name}</span>
        `;
        
        // Adicionar event listener para clique
        contactItem.addEventListener('click', function() {
            // Remover classe active de todos os itens
            document.querySelectorAll('.contact-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Adicionar classe active ao item clicado
            this.classList.add('active');
            
            // Mostrar detalhes do contato no main container
            showContactDetailsInMain(contact);
        });
        
        contactsList.appendChild(contactItem);
    });
}

// Função para exibir detalhes do contato no main container
function showContactDetailsInMain(contact) {
    // Atualizar informações do perfil
    const profileName = document.getElementById('profileName');
    const profileRole = document.getElementById('profileRole');
    const profileAvatar = document.querySelector('.profile-avatar img');
    
    if (profileName) profileName.textContent = contact.name;
    if (profileRole) profileRole.textContent = contact.position;
    if (profileAvatar) profileAvatar.src = contact.avatar;
    
    // Atualizar campos do formulário
    const nomeInput = document.getElementById('nomeInput');
    const emailInput = document.getElementById('emailInput');
    const telefoneInput = document.getElementById('telefoneInput');
    const enderecoInput = document.getElementById('enderecoInput');
    
    if (nomeInput) nomeInput.value = contact.name;
    if (emailInput) emailInput.value = contact.email;
    if (telefoneInput) telefoneInput.value = contact.phone;
    if (enderecoInput) enderecoInput.value = contact.address;
}

// Função para formatar data
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('pt-BR');
}

// Função para enviar email (simulação)
function contactPerson(email) {
    alert(`Abrindo cliente de email para: ${email}`);
    // window.location.href = `mailto:${email}`;
}

// Função para ligar (simulação)
function callPerson(phone) {
    alert(`Iniciando ligação para: ${phone}`);
    // window.location.href = `tel:${phone}`;
}

