<?php


namespace App\Service;


use App\Entity\UserEntity;
use App\Repositories\UserRepository;

class UserService
{
    public $userRepository;

    /**
     * UserService constructor.
     */
    public function __construct()
    {
        $this->userRepository = new UserRepository;
    }

    public function userSave($userEntity){

        $this->userRepository->createRecord($userEntity);
    }



}