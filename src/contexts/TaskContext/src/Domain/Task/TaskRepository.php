<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 30/01/2018
 * Time: 10:01
 */

namespace contexts\TaskContext\src\Domain\Task;


interface TaskRepository
{
    public function getAll(): array;
    public function deleteOne($taskId);
    public function addOne($task);

}