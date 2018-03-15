<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 13:36
 */

namespace contexts\TaskContext\src\Presenters;


use contexts\TaskContext\src\UseCases\AddTask\AddTaskResponse;

class AddTaskHtmlPresenter
{
    public function present(AddTaskResponse $addTaskResponse){
        $result = array('errors' => $this->getErrors($addTaskResponse));
        return $result;
    }

    private function getErrors(AddTaskResponse $addTaskResponse){
        $errors = [];
        if(!$addTaskResponse->isRequestValid()){
            $errors[] = "Tous les champs sont obligatoires";
        }
        return $errors;
    }
}