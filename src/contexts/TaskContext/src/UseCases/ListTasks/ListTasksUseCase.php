<?php

namespace contexts\TaskContext\src\UseCases\ListTasks;

use contexts\TaskContext\src\Domain\Task\TaskRepository;
use common\UseCases\Request;
use common\UseCases\Response;
use common\UseCases\UseCase;



class ListTasksUseCase implements UseCase
{

    private $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function process(Request $request): Response {
        $tasks = $this->taskRepository->getAll();
        $response = new ListTaskResponse($tasks);
        return new ListTaskResponse($tasks);
    }


}