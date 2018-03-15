<?php

namespace contexts\TaskContext\src\UseCases\ListTasks;

use contexts\TaskContext\src\DataAccess\FakeTaskRepository;
use contexts\TaskContext\src\UseCases\DeleteTask\DeleteTaskRequest;
use contexts\TaskContext\src\UseCases\DeleteTask\DeleteTaskUseCase;

class DeleteTaskUseCaseTest extends \PHPUnit_Framework_TestCase
{

    public function test_delete_task(){

        $taskRepository = new FakeTaskRepository();

        $tasks = $taskRepository->getAll();

        // $taskRepository->getAll() returns at least 3 tasks by default
        $taskToDelete = $tasks[1];

        $request = new DeleteTaskRequest($taskToDelete->getId());

        $useCase = new DeleteTaskUseCase($taskRepository);

        $useCase->process($request);

        $this->assertFalse(
            in_array($taskToDelete, $taskRepository->getAll())
        );

    }
}