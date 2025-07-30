<?php

namespace Model;

use Model\Connection;

use PDO;
use PDOException;
use Exception;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::getInstance();
    }

    // Criar usuário
    public function registerUser($user_fullname, $email, $password)
    {
        try {
            // Inserção de dados
            $sql = 'INSERT INTO usuarios (nome, email, senha, data_criacao) VALUES (:nome, :email, :senha, NOW())';

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // PREPARAR O BANCO DE DADOS PARA RECEBER O COMANDO ACIMA
            $stmt = $this->db->prepare($sql);

            // REFERENCIAR OS DADOS PASSADOS PELO COMANDO SQL COM OS PARÂMETROS DA FUNÇÃO
            $stmt->bindParam(":nome", $user_fullname, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":senha", $hashedPassword, PDO::PARAM_STR);

            // EXECUTAR TUDO

            return $stmt->execute();

        } catch (PDOException $error) {
            // EXIBIR MENSAGEM DE ERRO COMPLETA E PARAR A EXECUÇÃO
            echo "Erro ao executar o comando " . $error->getMessage();
            return false;
        }
    }

    // LOGIN
    public function getUserByEmail($email)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":email", $email, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
        }
    }

    // OBTER INFORMAÇÕES DO USUÁRIO
    public function getUserInfo($id, $user_fullname, $email)
    {
        try {
            $sql = "SELECT nome, email FROM usuarios WHERE id = :id AND nome = :user_fullname AND email = :email";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":nome", $user_fullname, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);

            $stmt->execute();
            

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $error) {
            echo "Erro ao buscar informações: " . $error->getMessage();
            return false;
        }
    }
}

?>