<?php


class Feedback
{
    private $id;
    private $userId;
    private $specialistId;
    private $feedbackTime;
    private $text;

    public function __construct($id, $userId, $specialistId, $feedbackTime, $text)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->specialistId = $specialistId;
        $this->feedbackTime = $feedbackTime;
        $this->text = $text;
    }


    public function getUserId()
    {
        return $this->userId;
    }


    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }


    public function getSpecialistId()
    {
        return $this->specialistId;
    }

    public function setSpecialistId($specialistId): void
    {
        $this->specialistId = $specialistId;
    }


    public function getFeedbackTime()
    {
        return $this->feedbackTime;
    }

    public function setFeedbackTime($feedbackTime): void
    {
        $this->feedbackTime = $feedbackTime;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }


}