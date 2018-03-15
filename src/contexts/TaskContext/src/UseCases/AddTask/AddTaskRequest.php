<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 31/01/2018
 * Time: 18:12
 */

namespace contexts\TaskContext\src\UseCases\AddTask;

use common\UseCases\Request;

class AddTaskRequest implements Request
{
    private $title;

    private $description;

    public function __construct(string $title, string $description)
    {

        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }





}