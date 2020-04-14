<?php


namespace App\Helper;


class Mapper
{

    private static $jsonObject;

    public static function map($jsonString, $object)
    {
        self::$jsonObject = json_decode($jsonString, true);

        if (count(self::$jsonObject) > 0) {
            foreach (self::$jsonObject as $key => $value) {
                $methodName = "set" . ucfirst($key);

                if (method_exists($object, $methodName)) {
                    $object->$methodName($value);
                }
            }
        }

        return $object;
    }

}