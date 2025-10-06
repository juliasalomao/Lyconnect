<?php
namespace Controller;

use Model\User;

class UserController
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    // Cadastrar usuário
    public function createUser($user_fullname, $email, $password)
    {
        if (empty($user_fullname) || empty($email) || empty($password)) {
            return false;
        }

        return $this->userModel->registerUser($user_fullname, $email, $password);
    }

    // Buscar usuário por e-mail
    public function checkUserByEmail($email)
    {
        return $this->userModel->getUserByEmail($email);
    }

    //  Login
    public function login($email, $password)
    {
        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['user_fullname'] = $user['user_fullname'];
            $_SESSION['email'] = $user['email'];
            return true;
        }

        return false;
    }

    // Verificar se está logado
    public function isLoggedIn()
    {
        return isset($_SESSION['id']);
    }
}
