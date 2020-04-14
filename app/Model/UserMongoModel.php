<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class UserMongoModel extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'user';
    protected $primaryKey = '_id';
    protected $fillable = ['id', 'name','username', 'password', 'loginTime'];
}