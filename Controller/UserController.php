<?php


namespace Controller;

use Model\User;
use Exception;

class UserController{
    private $userModel;

public function __construct()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $this->userModel = new User();
}

    // Cadastro
    public function createUser($user_fullname, $email, $password){

        if (empty($user_fullname) or empty($email) or empty($password)) {
            return false;
        }


        return $this->userModel->registerUser($user_fullname, $email, $password);

    }

    // Email já cadastrado?
    public function checkUserByEmail($email){
        return $this->userModel->getUserByEmail($email);
    }

    // Login
public function login($email, $password){
    $user = $this->userModel->getUserByEmail($email);

    if ($user && password_verify($password, $user['senha'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['user_fullname'] = $user['nome'];
        $_SESSION['email'] = $user['email'];
        return true;
    }
    return false;
}

    // Usuário loggado?
    public function isLoggedIn(){
        return isset($_SESSION['id']);
    }

    // Puxar dados do usuário
    public function getUserData($id, $user_fullname, $email){
        return $this->userModel->getUserInfo($id, $user_fullname, $email);
    }
}

?>