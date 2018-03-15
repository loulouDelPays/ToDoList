<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 13:58
 */

namespace contexts\TaskContext\src\Validators;


use contexts\TaskContext\src\UseCases\AddTask\AddTaskRequest;

class AddTaskValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_correct_task_request(){
        $validator = new AddTaskValidator();

        $request = new AddTaskRequest('okok', 'nnnn');

        $this->assertTrue($validator->isValid($request));
    }

    public function test_correct_task_title_missing(){
        $validator = new AddTaskValidator();

        $request = new AddTaskRequest('', 'nnnn');

        $this->assertFalse($validator->isValid($request));
    }

    public function test_correct_task_description_missing(){
        $validator = new AddTaskValidator();

        $request = new AddTaskRequest('OKOK', '');

        $this->assertFalse($validator->isValid($request));
    }

    public function test_correct_task_title_and_description_missing(){
        $validator = new AddTaskValidator();

        $request = new AddTaskRequest('', '');

        $this->assertFalse($validator->isValid($request));
    }
}