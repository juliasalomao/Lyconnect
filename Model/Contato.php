<?php
namespace Model;

use PDO;

class Contato {
    private $pdo;

    public function __construct() {
        // Configure sua conexão PDO aqui
        $this->pdo = new PDO('mysql:host=localhost;dbname=seubanco;charset=utf8', 'usuario', 'senha');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function inserirContato($dados) {
        $sql = "INSERT INTO contatos (nome, email, telefone, profissao, endereco) VALUES (:nome, :email, :telefone, :profissao, :endereco)";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':nome' => $dados['nome'],
            ':email' => $dados['email'],
            ':telefone' => $dados['telefone'],
            ':profissao' => $dados['profissao'] ?? '',
            ':endereco' => $dados['endereco'] ?? ''
        ]);
    }

    public function getTodosContatos() {
        $stmt = $this->pdo->query("SELECT * FROM contatos ORDER BY nome");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>