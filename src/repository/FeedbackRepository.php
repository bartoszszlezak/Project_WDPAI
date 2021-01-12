<?php

require_once __DIR__.'/../models/MoreInfo.php';
require_once __DIR__.'/../models/VFeedback.php';
require_once __DIR__.'/../models/Feedback.php';
require_once 'Repository.php';

class FeedbackRepository extends Repository
{
    public function getFeedback($specialistId) :array{

        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.feedback WHERE specialist_id = :specialistId
            SORT BY id desc
            LIMIT 3 
        ');

        $stmt->bindParam(':specialistId',$specialistId, PDO::PARAM_INT);
        $stmt->execute();
        $feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($feedbacks as $j) {
            $result[] = new Feedback(
                $j['id'],
                $j['user_id'],
                $j['specialist_id'],
                $j['time'],
                $j['comment']
            );
        }

        return $result;
    }

    public function addFeedback(array $data){

        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.feedback(user_id, specialist_id, comment, time) VALUES (:user_id, :specialist_id, :comment, current_date)
        ');

        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_INT);
        $stmt->bindParam(':specialist_id', $data['specialist_id'], PDO::PARAM_INT);
        $stmt->bindParam(':comment', $data['comment'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function view(int $specialistId) :array{

        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * from vfeedback where specialist_id = :specialistId
            LIMIT 3
        ');

        $stmt->bindParam(':specialistId', $specialistId, PDO::PARAM_INT);
        $stmt->execute();
        $feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($feedbacks as $j) {
            $result[] = new VFeedback(
                $j['id'],
                $j['name'],
                $j['surname'],
                $j['comment'],
                $j['time'],
                $j['specialist_id']
            );
        }

        return $result;

    }
}