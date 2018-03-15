<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 14:02
 */

namespace common\Validators;


class NotEmptyValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_empty_string(){
        $validator = new NotEmptyValidator();
        $this->assertFalse($validator->isValid(''));
    }

    public function test_not_empty_string(){
        $validator = new NotEmptyValidator();
        $this->assertTrue($validator->isValid('OKOK'));
    }
}