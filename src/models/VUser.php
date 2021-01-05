<?php


class VUser
{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $role;
    private $phone;
    private $specialization;
    private $more_info;


    public function __construct($id, $name, $surname, $email, $password, $role, $phone, $specialization, $more_info)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
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

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }


    public function getRole()
    {
        return $this->role;
    }


    public function setRole($role): void
    {
        $this->role = $role;
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

