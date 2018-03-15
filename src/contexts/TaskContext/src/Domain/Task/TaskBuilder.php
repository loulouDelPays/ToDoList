<?php

namespace contexts\TaskContext\src\Domain\Task;


use tests\DataBuilder;

class TaskBuilder extends DataBuilder
{
    public function getDataClass(): string {
        return Task::class;
    }

}