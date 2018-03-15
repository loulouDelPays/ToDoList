<?php

namespace contexts\TaskContext\src\Domain\Task;


class TaskTest extends \PHPUnit_Framework_TestCase
{
    public function test_provide_the_title()
    {
        $taskTitle = 'a title';
        $this->assertEquals(
            (new TaskBuilder())
                ->withTitle($taskTitle)
                ->build()
                ->getTitle(),
            $taskTitle);
    }

    public function test_provide_the_description()
    {
        $taskDescription = 'a description';
        $this->assertEquals(
            (new TaskBuilder())
                ->withDescription($taskDescription)
                ->build()
                ->getDescription(),
            $taskDescription);
    }
}