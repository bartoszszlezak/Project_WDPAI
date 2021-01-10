<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/VUserRepository.php';
require_once __DIR__.'/../repository/FeedbackRepository.php';


class SpecialistController extends AppController
{
    private $vUserRepository;

    public function __construct()
    {
        parent::__construct();
        $this->vUserRepository = new VUserRepository();
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->vUserRepository->getBySurname($decoded['search']));
        }
    }
    public function specialist(){

        $auth = new Auth();
        $feedbackRepository = new FeedbackRepository();
        $id = $_GET['id'];
        $url = "http://$_SERVER[HTTP_HOST]";
        if (!isset($id) || empty($id)){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/pacjent");
            exit();
        }

        if(!$this->isPost()){
            $this -> render('specialist_info', [
                'vUser' => $this->vUserRepository->getById($id)
            ]);
            exit();
        }

        $userID = $auth->getAuthUser()->getId();
        $specialistId = $_GET['id'];
        $feedback = $_POST['feedback'];


        $feedbackRepository->addFeedback([
            "user_id" => $userID,
            "specialist_id" => $specialistId,
            "comment" => $feedback
        ]);

        header("Location: {$url}/specialist?id=$specialistId");

    }

}