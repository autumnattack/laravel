<?php

namespace App\Repositories;


use App\Entity\UserEntity;
use App\Model\UserMongoModel;

class UserRepository
{

    public function createRecord(Array $ary)
    {
        UserMongoModel::create($ary);
    }
}
