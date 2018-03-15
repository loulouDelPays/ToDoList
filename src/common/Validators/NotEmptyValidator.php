<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 12:58
 */

namespace common\Validators;


class NotEmptyValidator implements Validator
{

    public function isValid($expression): bool
    {
        return strlen($expression) > 0;
    }


}