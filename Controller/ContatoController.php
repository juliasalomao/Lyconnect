<?php
namespace Controller;

use PDO;

class ContatoController {
    private $pdo;

    public function __construct() {
$this->pdo = new PDO('mysql:host=localhost;dbname=lyconnect;charset=utf8', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

public function createContato($nome, $email, $telefone, $endereco, $profissao) {
    try {
        $sql = "INSERT INTO contatos (nome, email, profissao, telefone, endereco) VALUES (:nome, :email, :profissao, :telefone, :endereco)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':profissao', $profissao);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':endereco', $endereco);
        return $stmt->execute();
    } catch (\PDOException $e) {
        // Log do erro ou outra ação
        return false;
    }
}
}