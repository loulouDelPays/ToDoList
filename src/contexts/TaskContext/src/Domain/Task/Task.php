<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 29/01/2018
 * Time: 18:47
 */

namespace contexts\TaskContext\src\Domain\Task;


class Task
{
    private $id;
    private $title;
    private $description;

    public  function __construct(string $title = null, string $description = null){
        $this->title = $title;
        $this->description = $description;
        $this->id = uniqid();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }




}