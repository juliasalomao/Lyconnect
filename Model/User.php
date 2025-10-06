<?php
namespace Model;

use Model\Connection;
use PDO;
use PDOException;

class User {
    private $pdo;

    public function __construct() {
        $this->pdo = Connection::getInstance();
    }

    // Cadastrar novo usuário
    public function registerUser($user_fullname, $email, $password) {
        try {
            // Verifica se o e-mail já existe
            $check = $this->getUserByEmail($email);
            if ($check) {
                return false;
            }

            $sql = "INSERT INTO usuarios (user_fullname, email, password) VALUES (:user_fullname, :email, :password)";
            $stmt = $this->pdo->prepare($sql);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            return $stmt->execute([
                ':user_fullname' => $user_fullname,
                ':email' => $email,
                ':password' => $hashedPassword
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    // Buscar usuário por e-mail
    public function getUserByEmail($email) {
        $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    // Verificar senha
    public function verifyPassword($email, $password) {
        $user = $this->getUserByEmail($email);
        if (!$user) return false;
        return password_verify($password, $user['password']);
    }
}
