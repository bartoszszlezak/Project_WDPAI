<?php


class MoreInfo
{
    private $id;
    private $phone;
    private $specialization;
    private $more_info;


    public function __construct($id, $phone, $specialization, $more_info)
    {
        $this->id = $id;
        $this->phone = $phone;
        $this->specialization = $specialization;
        $this->more_info = $more_info;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getPhone()
    {
        return $this->phone;
    }


    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }


    public function getSpecialization()
    {
        return $this->specialization;
    }


    public function setSpecialization($specialization): void
    {
        $this->specialization = $specialization;
    }


    public function getMoreInfo()
    {
        return $this->more_info;
    }


    public function setMoreInfo($more_info): void
    {
        $this->more_info = $more_info;
    }



}