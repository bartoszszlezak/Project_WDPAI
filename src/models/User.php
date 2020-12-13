<?php


class User
{
    private $email;
    private $password;
    private $name;
    private $surname;
    private $role;

    public function __construct(string $email, string $password, string $name, string $surname, string $role)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;

    }


    public function getRole(): string
    {
        return $this->role;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }


    public function setEmail(string $email)
    {
        $this->email = $email;
    }


    public function setPassword(string $password)
    {
        $this->password = $password;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }


    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }


}