<?php
namespace Panda\Validator;
/**
 * Class IntValidator
 * @package Panda\Validator
 */
class IntValidator
{

    public function __construct()
    {

    }

    /**
     * @param $int
     * @param $number
     * @return bool
     * @throws \Exception
     */

    public static function equal($int, $number)
    {
        if (!is_int($int) || !is_int($number))
            throw new \Exception("Params are not right, they must be numbers");
        return ($int === $number) ? true : false ;

    }
    /**
    * @param int $int
    * @param int $number
     *
    * @return bool
     *
    * @throws \Exception
     */
    public static function sup($int ,$number)
    {
        if (!is_int($int) || !is_int($number))
            throw new \Exception("Params are not right, they must be numbers");
            return ($int > $number) ? true : false;
    }

    /**
     * @param int $int
     * @param  int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inf($int,$number)
    {
        if (!is_int($int) || !is_int($number))
            throw new \Exception("Params are not right, they must be numbers");
            return ($int < $number) ? true : false;

    }

    /**
     * @param int $int
     * @param  int $number
     *
     * @return bool
     * @throws \Exception
     */
    public static function bet($int,$number)
    {
        if (!is_int($int) || !is_int($number))
            throw new \Exception("Params are not right, they must be numbers");
            return ($int >=  $number) ? true : false;

    }



}
