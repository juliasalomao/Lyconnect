<?php
namespace Model;

use PDO;
use PDOException;

class Contato {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=lyconnect;charset=utf8", "root", "juliaCS2008@");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão com o banco: " . $e->getMessage());
        }
    }

    //  Inserir contato válido
    public function create($nome, $sobrenome, $telefone) {
        if (empty($nome) || empty($telefone)) {
            return false;
        }

        $sql = "INSERT INTO contatos (nome, sobrenome, telefone) VALUES (:nome, :sobrenome, :telefone)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':telefone' => $telefone
        ]);
    }

    // Listar contatos
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM contatos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //  Buscar contato por ID
    public function findById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM contatos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //  Excluir contato
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM contatos WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>
