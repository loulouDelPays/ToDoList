<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 31/01/2018
 * Time: 18:12
 */

namespace contexts\TaskContext\src\UseCases\AddTask;


use common\UseCases\Response;

class AddTaskResponse extends Response
{
    private $taskId;

    public function getTaskId()
    {
        return $this->taskId;
    }

    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
    }

}