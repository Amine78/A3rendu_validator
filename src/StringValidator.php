<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nerrow
 * Date: 25/11/14
 * Time: 12:38
 * To change this template use File | Settings | File Templates.
 */

namespace Panda\Validator;


/**
 * Class StringValidator
 *
 * @package Panda\Validator
 */
class StringValidator {
    /**
     *
     * @param string $string
     * @param  int $length
     *
     * @return bool
     */
    public static function generate($string,$length )
    {
        if(!is_string($string))
        return ( mb_strlen( $string ) == $length) ? true : false;
    }

    /**
     * @param string $string
     * @param string $length
     *
     * @return bool
     */
    public static function sup($string,$length)
    {
        if(!is_string($string))
        return ( mb_strlen( $string ) >$length) ? true : false;
    }

    /**
     * @param int $string
     * @param string $length
     *
     * @return bool
     */
    public static function inf($string,$length)
    {
        if(!is_string($string))
        return ( mb_strlen( $string ) < $length) ? true : false;
    }

    /**
     * @param int $string
     *
     * @return bool
     * @throws \Exception
     */
    public static function noSpace($string)
    {
        if(!is_string($string))
        throw new \Exception('$string must be a string');
        return (mb_substr($string, -1) != " " && mb_substr($string, 0, 1) != " " ) ? true : false;
    }

    /**
     * @param $string
     * @return bool
     * @throws \Exception
     */
    public static function noSpacein($string)
    {
        if(!is_string($string))
            throw new \Exception('$string must be a string');
        return(!mb_strpos($string, " ")) ? true or false;
    }
}