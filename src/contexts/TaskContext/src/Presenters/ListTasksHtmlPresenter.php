<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 30/01/2018
 * Time: 10:22
 */

namespace contexts\TaskContext\src\Presenters;

use contexts\TaskContext\src\UseCases\ListTasks\ListTaskResponse;

class ListTasksHtmlPresenter
{
    public function present(ListTaskResponse $listTaskResponse){
        $result = array('tasks' => []);

        foreach ($listTaskResponse->getTasks() as $task){
            $result ['tasks'][] = array(
                'id'=> $task->getId(),
                'title'=> $task->getTitle(),
                'description'=> $task->getDescription()
            );
        }

        return $result;
    }

}