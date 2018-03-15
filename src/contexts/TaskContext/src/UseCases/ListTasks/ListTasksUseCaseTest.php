<?php

namespace contexts\TaskContext\src\UseCases\ListTasks;

use contexts\TaskContext\src\DataAccess\FakeTaskRepository;

class ListTasksUseCaseTest extends \PHPUnit_Framework_TestCase
{

    public function test_provide_tasks(){

        $taskRepository = new FakeTaskRepository();
        $request = new ListTaskRequest();
        $useCase = new ListTasksUseCase($taskRepository);

        $response = $useCase->process($request);

        $this->assertGreaterThan(
            0,
            count($response->getTasks())
        );

    }
}