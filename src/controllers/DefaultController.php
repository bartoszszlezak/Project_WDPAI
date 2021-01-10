<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/MoreInfoRepository.php';
require_once __DIR__.'/../repository/VUserRepository.php';
require_once __DIR__ .'/../support/Auth.php';

class DefaultController extends AppController {

    private $moreInfoRepository;
    private $vUserRepository;

    public function __construct()
    {
        parent::__construct();
        $this->moreInfoRepository = new MoreInfoRepository();
        $this->vUserRepository = new VUserRepository();
    }

    public function index(){
        $this -> render('login');
    }

    public function doctors(){

        $auth = new Auth();
        $url = "http://$_SERVER[HTTP_HOST]";

        if(!$auth->authenticated()){
            header("Location: {$url}/login");
        }

        if(!$auth->getAuthUser()->getRole() == "doctor"){
            header("Location: {$url}/login");
        }
        $this -> render('doctors_view', [
            'vuser' => $this->vUserRepository->getById($auth->getAuthUser()->getId())
        ]);
    }

    public function pacjent(){

        $auth = new Auth();
        $url = "http://$_SERVER[HTTP_HOST]";

        if(!$auth->authenticated()){
            header("Location: {$url}/login");
        }

        if(!$auth->getAuthUser()->getRole() == "pacient"){
            header("Location: {$url}/login");
        }
        $this -> render('pacjent_page_1', [
            'info' => $this->moreInfoRepository->getRandomInfo()
        ]);
    }
}
