<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 30/01/2018
 * Time: 09:39
 */

namespace contexts\TaskContext\src\UseCases\ListTasks;

use common\UseCases\Response;

class ListTaskResponse extends Response
{
    private $tasks;

    public function __construct($tasks)
    {
        $this->tasks = $tasks;
    }

    public function getTasks()
    {
        return $this->tasks;
    }





}