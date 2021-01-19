<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ .'/../support/Auth.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/MoreInfoRepository.php';


class SecurityController extends AppController {
    public function login()
    {
        $userRepository = new UserRepository();
        $auth = new Auth();


        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUserByEmail($email);

        if(!$user){
            return $this->render('login', ['messages' => ['User not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $auth->login($user->getId());

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
        $auth = new Auth();

        if (!$this->isPost()) {
            return $this->render('signup');
        }

        $email = $_POST['email'];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT, ["cost"=>16]);
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $role = $_POST['doctor'] == "on" ? "pacient" : "doctor";

        $user = $userRepository->getUserByEmail($email);

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
        $user = $userRepository->getUserByEmail($email);
        $auth->login($user->getId());

        $url = "http://$_SERVER[HTTP_HOST]";
        if($role == "doctor"){
            $user = $userRepository->getUserByEmail($email);
            header("Location: {$url}/moreInfo");
        }
        else{
            header("Location: {$url}/pacjent");
        }

    }

    public function moreInfo(){

        $moreInfoRepository = new MoreInfoRepository();
        $auth = new Auth();
        $url = "http://$_SERVER[HTTP_HOST]";

        if(!$auth->authenticated()){
            header("Location: {$url}/login");
        }

        if(!$auth->getAuthUser()->getRole() == "doctor"){
            header("Location: {$url}/login");
        }

        if (!$this->isPost()) {
            return $this->render('more_info');
        }

        $id = $auth->getAuthUser()->getId();
        $phone = $_POST['phone'];
        $specialization = $_POST['specialization'];
        $about_me = $_POST['about_me'];

        $moreInfoRepository -> createMoreInfo([
            'id' => $id,
            'phone' => $phone,
            'specialization' => $specialization,
            'about_me' => $about_me,
        ]);

        header("Location: {$url}/doctors");
    }

    public function logout(){

        $auth = new Auth();

        $auth->logout();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }
}