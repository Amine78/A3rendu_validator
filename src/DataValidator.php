<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nerrow
 * Date: 25/11/14
 * Time: 21:11
 * To change this template use File | Settings | File Templates.
 */

namespace Panda\Validator;


/**
 * Class DataValidator
 * @package Panda\Validator
 */
class DataValidator {
    /**
     * @param $year
     * @param \DateTime $date
     * @return bool
     * @throws Exception
     */
    public static function isYear($year, \DateTime $date)
    {
        if(!is_int($year))
            throw new Exception('Month must be an integer');
        return ($date->format('Y') == $year)? true : false ;
    }

    /**
     * @param $month
     * @param \DateTime $date
     * @return bool
     * @throws Exception
     */
    public static function isMonth($month, \DateTime $date)
    {
        if(!is_int($month))
            throw new Exception('Month must be an integer');
        return ($date->format('m') == $month) ? true : false ;
    }

    /**
     * @param \DateTime $date
     * @return bool
     */
    public static function isMajor(\DateTime $date)
    {
        $currentDate = new \DateTime();
        $currentDate->setTimezone(new \DateTimeZone('Europe/Paris'));
        return ($currentDate->format('Y') - $date->format('Y') >= 21) ? true : false;
    }
}