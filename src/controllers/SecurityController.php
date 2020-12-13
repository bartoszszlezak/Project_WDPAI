<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {
    public function login()
    {
        $userRepository = new UserRepository();


        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);

        if(!$user){
            return $this->render('login', ['messages' => ['User not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }



        if ($user->getRole() == 'doctor') {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/doctors");
        }

        else{
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/pacjent");
        }

    }

    public function signup(){

        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('signup');
        }

        $email = $_POST['email'];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT, ["cost"=>16]);
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $role = $_POST['doctor'] == "on" ? "pacient" : "doctor";

        $user = $userRepository->getUser($email);

        if($user){
            return $this->render('signup', ['messages' => ['User with this email exist!']]);
        }

        $userRepository -> createUser([
            'email' => $email,
            'password' => $password,
            'name' => $name,
            'surname' => $surname,
            'role' => $role
        ]);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }
}