<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 31/01/2018
 * Time: 13:46
 */

namespace contexts\TaskContext\src\UseCases\DeleteTask;


use common\UseCases\Request;

class DeleteTaskRequest implements Request
{
    private $taskId;

    public function __construct($taskId)
    {
        $this->taskId = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

}