<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 01/02/2018
 * Time: 10:21
 */

namespace contexts\TaskContext\src\DataAccess;

class ArraySessionManager
{
    
    private $key;
    
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function count(): int {
        return count($this->getArray());
    }

    public function getArray(): array
    {
        if(isset($_SESSION[$this->key])){
            return $_SESSION[$this->key];
        } else {
            return [];
        }
    }

    public function setArray($tasks){
        $_SESSION[$this->key] = $tasks;
    }

    public function append($task){
        $_SESSION[$this->key][] = $task;
    }

    public function removeAtIndex($index){
        $tasks = $this->getArray();
        array_splice($tasks, $index, 1);
        $this->setArray($tasks);
    }
}