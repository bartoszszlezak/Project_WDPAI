<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/MoreInfoRepository.php';
require_once __DIR__.'/../repository/VUserRepository.php';
require_once __DIR__.'/../repository/FeedbackRepository.php';
require_once __DIR__ .'/../support/Auth.php';

class DefaultController extends AppController {

    private $moreInfoRepository;
    private $vUserRepository;
    private $vFeedbackRepository;

    public function __construct()
    {
        parent::__construct();
        $this->moreInfoRepository = new MoreInfoRepository();
        $this->vUserRepository = new VUserRepository();
        $this->vFeedbackRepository = new FeedbackRepository();
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

        if(!($auth->getAuthUser()->getRole() == "doctor")){
            header("Location: {$url}/login");
        }
        $this -> render('doctors_view', [
            'vuser' => $this->vUserRepository->getById($auth->getAuthUser()->getId()),
            'vfeed' => $this->vFeedbackRepository->view($auth->getAuthUser()->getId())
        ]);
    }

    public function pacjent(){

        $auth = new Auth();
        $url = "http://$_SERVER[HTTP_HOST]";

        if(!$auth->authenticated()){
            header("Location: {$url}/login");
        }

        if(!($auth->getAuthUser()->getRole() == "pacient")){
            header("Location: {$url}/doctors");
        }
        $this -> render('pacjent_page_1', [
            'info' => $this->moreInfoRepository->getRandomInfo()
        ]);
    }
}
