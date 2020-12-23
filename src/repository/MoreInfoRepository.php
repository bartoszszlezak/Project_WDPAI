<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/MoreInfo.php';

class MoreInfoRepository extends Repository
{
    public function getMoreInfo(int $id): ?MoreInfo{
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.more_info WHERE id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $more_info = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($more_info == false) {
            return null;
        }

        return new MoreInfo(
            $more_info['id'],
            $more_info['phone'],
            $more_info['specialization'],
            $more_info['about_me']
        );
    }

    public function createMoreInfo(array $data){
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.more_info(id, phone, specialization, about_me) VALUES (:id, :phone, :specialization, :about_me)
        ');

        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':specialization', $data['specialization'], PDO::PARAM_STR);
        $stmt->bindParam(':about_me', $data['about_me'], PDO::PARAM_STR);
        $stmt->execute();
    }
}