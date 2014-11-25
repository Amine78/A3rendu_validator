<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nerrow
 * Date: 25/11/14
 * Time: 16:28
 * To change this template use File | Settings | File Templates.
 */

namespace Panda\Validator;


/**
 * Class ArrayValidator
 * @package Panda\Validator
 */
class ArrayValidator {
    /**
     * @param $array
     *
     * @return bool
     * @throws \Exception
     */
    public static function isEmpty($array){
        if(!is_array($array))
            throw new \Exception('$array must be an array');
        return (empty($array)) ? true : false;
    }

    /**
     * @param $array
     * @param $min
     * @param $max
     *
     * @return bool
     * @throws \Exception
     */
    public static function bet($array, $min ,$max){
        if(!is_array($array))
            throw new \Exception('$array must be an array');
        return (count($array) > $min && count($array) < $max) ? true : false;
    }

    /**
     * @param $array
     * @param $key
     *
     * @return bool
     * @throws \Exception
     */
    public static function keyexist($array, $key){
        if(!is_array($array))
            throw new \Exception('$array must be an array');
        return ( array_key_exists($key, $array)) ? true :false;

    }

    /**
     * @param $array
     * @param $number
     *
     * @return bool
     * @throws \Exception
     */
    public static function equal($array, $number)
    {
        if(!is_array($array) || !is_int($number))
            throw new \Exception('$array must be an array, and $number must be an integer');
        return (count($array) == $number) ? true : false;

    }

    /**
     * @param $value
     * @param $array
     * @return bool
     * @throws \Exception
     */
    public static function valueExists($value, $array)
    {
        if(!is_array($array))
            throw new \Exception('$array must be an array');
        return (in_array($value, $array)) ? true : false ;
    }


}