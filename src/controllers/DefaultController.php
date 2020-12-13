<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index(){
        $this -> render('login');
    }

    public function doctors(){
        $this -> render('doctors_view');
    }
    public function specialist(){
        $this -> render('specialist_info');
    }
    public function pacjent(){
        $this -> render('pacjent_page_1');
    }
}
