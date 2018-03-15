<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 30/01/2018
 * Time: 09:08
 */

namespace contexts\TaskContext\src\DataAccess;

use contexts\TaskContext\src\Domain\Task\Task;
use contexts\TaskContext\src\Domain\Task\TaskRepository;

class FakeTaskRepository implements TaskRepository
{

    private $taskManager;

    public function __construct()
    {
        $this->taskManager = new ArraySessionManager('tasks');
        if($this->taskManager->count() === 0){
            $this->taskManager->setArray($this->getDefaultTasks());
        }
    }

    private function getDefaultTasks(): array{
        return [
            new Task('Task 1', 'Description task 1'),
            new Task('Task 2', 'Description task 2'),
            new Task('Task 3', 'Description task 3')
        ];
    }

    public function getAll(): array {
        return $this->taskManager->getArray();
    }

    public function deleteOne($taskId){

        $i = 0;

        foreach ($this->taskManager->getArray() as $task) {
            if ($task->getId() === $taskId) {
                $this->taskManager->removeAtIndex($i);
                break;
            }
            $i++;
        }

    }

    public function addOne($task)
    {
        $this->taskManager->append($task);
        return $task->getId();
    }

    public function getOneById($taskId){

        foreach ($this->taskManager->getArray() as $task) {
            if ($task->getId() === $taskId) {
                return $task;
            }
        }

    }


}