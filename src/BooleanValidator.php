<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nerrow
 * Date: 25/11/14
 * Time: 20:52
 * To change this template use File | Settings | File Templates.
 */

namespace Panda\Validator;


/**
 * Class BooleanValidator
 * @package Panda\Validator
 */
class BooleanValidator {
    /**
     * @param bool $boolean
     * @return bool
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if(!is_bool($boolean))
        throw new \Exception('$boolean must be a boolean');
        return ($boolean == true) ? true : false ;
    }
    /**
     * @param bool $boolean
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if(!is_bool($boolean))
        throw new \Exception('$boolean must be a boolean');
        return($boolean == false) ? true : false ;
    }

}