<?php

require_once __DIR__.'/../repository/UserRepository.php';

class Auth
{

    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function getAuthUser(){
        if($this->authenticated()){
            return $this->userRepository->getUserById($_COOKIE["user_id"]);
        }
    }

    public function authenticated(){

        if(!isset($_COOKIE["user_id"]) || empty($_COOKIE["user_id"])){
            return false;
        }

        $user = $this->userRepository->getUserById($_COOKIE["user_id"]);

        if($user){
            return true;
        }

        return false;
    }

    public function login(int $userId){
        //$_SESSION["user_id"] = $userId;
        setcookie("user_id", $userId, time() + 86400, "/");
    }

    public function logout(){
        //unset($_SESSION["user_id"]);
        setcookie("user_id", "", time() - 86400, "/");
    }
}