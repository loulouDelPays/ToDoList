<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 31/01/2018
 * Time: 18:11
 */

namespace contexts\TaskContext\src\UseCases\AddTask;
use common\UseCases\Request;
use common\UseCases\Response;
use common\UseCases\UseCase;
use contexts\TaskContext\src\Domain\Task\Task;
use contexts\TaskContext\src\Domain\Task\TaskRepository;
use contexts\TaskContext\src\Validators\AddTaskValidator;


class AddTaskUseCase implements UseCase
{

    private $taskRepository;
    private $addTaskValidator;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
        $this->addTaskValidator = new AddTaskValidator();
    }

    public function process(Request $request): Response {

        $response = new AddTaskResponse();

        if(!$this->addTaskValidator->isValid($request)){
            $response->markRequestAsInvalid();
        } else {
            $response->markRequestAsValid();
            $this->processValidRequest($request, $response);
        }

        return $response;
    }


    private function processValidRequest(Request $request, $response)
    {
        $task = new Task($request->getTitle(), $request->getDescription());
        $taskId = $this->taskRepository->addOne($task);
        $response->setTaskId($taskId);
    }


}