<?php

namespace contexts\TaskContext\src\UseCases\DeleteTask;

use contexts\TaskContext\src\Domain\Task\TaskRepository;
use common\UseCases\Request;
use common\UseCases\Response;
use common\UseCases\UseCase;

class DeleteTaskUseCase implements UseCase
{
    private $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function process(Request $request): Response {
        $this->taskRepository->deleteOne($request->getTaskId());
        return new DeleteTaskResponse();
    }
}