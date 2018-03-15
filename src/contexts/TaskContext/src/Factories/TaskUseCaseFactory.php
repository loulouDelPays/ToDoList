<?php

namespace contexts\TaskContext\src\Factories;

use common\Factories\UseCaseFactory;
use \common\UseCases\UseCase;
use \contexts\TaskContext\src\UseCases\AddTask\AddTaskUseCase;
use \contexts\TaskContext\src\UseCases\DeleteTask\DeleteTaskUseCase;
use \contexts\TaskContext\src\UseCases\ListTasks\ListTasksUseCase;
use \contexts\TaskContext\src\DataAccess\FakeTaskRepository;

class TaskUseCaseFactory implements UseCaseFactory
{
    const ADD_TASK = 0;
    const LIST_TASKS = 1;
    const DELETE_TASK = 2;

    private  $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new FakeTaskRepository();
    }


    public function getInstance(int $useCaseIndex): UseCase
    {
        switch ($useCaseIndex){
            case self::ADD_TASK :
                return new AddTaskUseCase($this->taskRepository);
            case  self::DELETE_TASK :
                return new DeleteTaskUseCase($this->taskRepository);
            case self::LIST_TASKS  :
                return new ListTasksUseCase($this->taskRepository);
            default:
                return new ListTasksUseCase($this->taskRepository);
        }
    }


}