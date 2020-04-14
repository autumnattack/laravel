<?php


namespace App\Entity;


class UserEntity
{
    private $id;
    private $name;
    private $username;
    private $password;
    private $loginTime;

    private function toObject()
    {

        return $this;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'loginTime' => $this->getLoginTime()

        ];
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     * @param mixed $loginTime
     */
    public function setLoginTime($loginTime): void
    {
        $this->loginTime = $loginTime;
    }

}