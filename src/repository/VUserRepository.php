<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/VUser.php';

class VUserRepository extends Repository
{
    public function getById($id){
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.vuser WHERE id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $doctorInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($doctorInfo == false) {
            return null;
        }
        return new VUser(
            $doctorInfo['id'],
            $doctorInfo['name'],
            $doctorInfo['surname'],
            $doctorInfo['email'],
            $doctorInfo['password'],
            $doctorInfo['role'],
            $doctorInfo['phone'],
            $doctorInfo['specialization'],
            $doctorInfo['about_me']
        );
    }

    public function getBySurname(string $searchString){

        $searchString = '%'.strtolower($searchString).'%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.vuser WHERE role = \'doctor\' and LOWER(surname) LIKE :search  
            LIMIT 3
        ');

        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}