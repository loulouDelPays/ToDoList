<?php

namespace contexts\TaskContext\src\UseCases\ListTasks;

use contexts\TaskContext\src\DataAccess\FakeTaskRepository;
use contexts\TaskContext\src\Domain\Task\Task;
use contexts\TaskContext\src\UseCases\AddTask\AddTaskRequest;
use contexts\TaskContext\src\UseCases\AddTask\AddTaskUseCase;

class AddTaskUseCaseTest extends \PHPUnit_Framework_TestCase
{

    public function test_add_task(){

        $taskRepository = new FakeTaskRepository();

        $request = new AddTaskRequest("OKOK", "KOKO");

        $useCase = new AddTaskUseCase($taskRepository);

        $response = $useCase->process($request);

        $this->assertNotNull(
            $taskRepository->getOneById($response->getTaskId())
        );

    }
}