<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 13:47
 */

namespace contexts\TaskContext\src\Presenters;



use contexts\TaskContext\src\Domain\Task\Task;
use contexts\TaskContext\src\UseCases\ListTasks\ListTaskResponse;

class ListTaskHtmlPresenterTest extends \PHPUnit_Framework_TestCase
{
    public function test_present_correctly_the_response(){

        $task1 = new Task('Task 1', 'Description task 1');
        $task1->setId(1);
        $task2 = new Task('Task 2', 'Description task 2');
        $task2->setId(2);
        $tasks =  [$task1, $task2];

        $response = new ListTaskResponse($tasks);
        $presenter = new ListTasksHtmlPresenter();

        self::assertEquals(
            $presenter->present($response),
            ['tasks' => [
                ['id'=>1, 'title'=> 'Task 1', 'description'=>'Description task 1'],
                ['id'=>2, 'title'=> 'Task 2', 'description'=>'Description task 2']
                ]
            ]
        );
    }
}