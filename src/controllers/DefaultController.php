<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/MoreInfoRepository.php';

class DefaultController extends AppController {

    private $moreInfoRepository;

    public function __construct()
    {
        parent::__construct();
        $this->moreInfoRepository = new MoreInfoRepository();
    }

    public function index(){
        $this -> render('login');
    }

    public function doctors(){
        $this -> render('doctors_view');
    }

    public function pacjent(){
        $this -> render('pacjent_page_1', [
            'info' => $this->moreInfoRepository->getRandomInfo()
        ]);
    }
}
