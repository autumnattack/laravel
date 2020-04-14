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

    public function index(Request $request)
    {
        $userEntity = Mapper::map($request->getContent(), new UserEntity);
        $userEntity->setLoginTime(date('Y-m-d H:i:s'));
        $this->userService->userSave($userEntity->toArray());
        return "ok";
    }

}