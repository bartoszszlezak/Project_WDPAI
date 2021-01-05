<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/VUserRepository.php';

class SpecialistController extends AppController
{
    private $vUserRepository;

    public function __construct()
    {
        parent::__construct();
        $this->vUserRepository = new VUserRepository();
    }


    public function specialist(){
        $id = $_GET['id'];
        if (!isset($id) || empty($id)){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/pacjent");
            exit();
        }

        $this -> render('specialist_info', [
            'vUser' => $this->vUserRepository->getById($id)
        ]);
    }

}