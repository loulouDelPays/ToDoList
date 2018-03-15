<?php

namespace contexts\TaskContext\src\Validators;

use \common\Validators\Validator;
use \common\Validators\NotEmptyValidator;

class AddTaskValidator implements Validator
{

    private $notEmptyValidator;

    public function __construct()
    {
        $this->notEmptyValidator = new NotEmptyValidator();
    }

    public function isValid($taskRequest): bool
    {
        return $this->notEmptyValidator->isValid($taskRequest->getTitle())
            && $this->notEmptyValidator->isValid($taskRequest->getDescription());
    }

}