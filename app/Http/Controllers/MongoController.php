<?php


namespace App\Http\Controllers;

use App\Entity\UserEntity;
use App\Helper\Mapper;
use App\Model\UserMongoModel;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class MongoController extends Controller
{
    /**
     * @var UserService
     */
    var $userService;

    /**
     * MongoController constructor.
     */
    public function __construct()
    {
        $this->userService = new UserService();
    }

    function std_class_object_to_array($stdclassobject)
    {
        $array = [];
        $_array = is_object($stdclassobject) ? get_object_vars($stdclassobject) : $stdclassobject;
        foreach ($_array as $key => $value) {
            $value = (is_array($value) || is_object($value)) ? std_class_object_to_array($value) : $value;
            $array[$key] = $value;
        }

        return $array;
    }

    public function index(Request $request)
    {
        $userEntity = Mapper::map($request->getContent(), new UserEntity);
        $userEntity->setLoginTime(date('Y-m-d H:i:s'));
        $this->userService->userSave($userEntity->toArray());
        return "ok";
    }

}