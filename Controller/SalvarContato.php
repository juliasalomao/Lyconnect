<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Controller\ContatoController;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $nome = $data['nome'] ?? '';
    $email = $data['email'] ?? '';
    $telefone = $data['telefone'] ?? '';
    $endereco = $data['endereco'] ?? '';

    $contatoController = new ContatoController();

    try {
        $result = $contatoController->createContato($nome, $email, $telefone, $endereco);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Contato criado com sucesso']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erro ao criar contato']);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Erro: ' . $e->getMessage()]);
    }

} else {
    echo json_encode(['success' => false, 'message' => 'Método HTTP não suportado']);
}