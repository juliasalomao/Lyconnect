<?php
namespace Controller;

use Model\Contato;

class ContatoController {
    private $contatoModel;

    public function __construct() {
        $this->contatoModel = new Contato();
    }

    // Criar contato
    public function create($nome, $sobrenome, $telefone) {
        if (strlen($telefone) < 8) {
            return "Telefone inválido!";
        }

        $resultado = $this->contatoModel->create($nome, $sobrenome, $telefone);
        return $resultado ? "Contato criado com sucesso!" : "Erro ao criar contato.";
    }

    // Listar contatos
    public function listar() {
        return $this->contatoModel->getAll();
    }

    // Buscar por ID
    public function buscar($id) {
        $contato = $this->contatoModel->findById($id);
        return $contato ?: "Contato não encontrado.";
    }

    // Excluir
    public function excluir($id) {
        $resultado = $this->contatoModel->delete($id);
        return $resultado ? "Contato excluído com sucesso!" : "Erro ao excluir contato.";
    }
}
