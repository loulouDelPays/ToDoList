<?php

namespace common\Validators;


interface Validator
{
    public function isValid($expression): bool;
}