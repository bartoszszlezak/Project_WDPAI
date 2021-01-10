<?php


class VFeedback
{
    private $id;
    private $name;
    private $surname;
    private $comment;
    private $time;
    private $specialist_id;


    public function __construct($id, $name, $surname, $comment, $time, $specialist_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->comment = $comment;
        $this->time = $time;
        $this->specialist_id = $specialist_id;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }


    public function getComment()
    {
        return $this->comment;
    }


    public function setComment($comment): void
    {
        $this->comment = $comment;
    }


    public function getTime()
    {
        return $this->time;
    }


    public function setTime($time): void
    {
        $this->time = $time;
    }


    public function getSpecialistId()
    {
        return $this->specialist_id;
    }


    public function setSpecialistId($specialist_id): void
    {
        $this->specialist_id = $specialist_id;
    }



}